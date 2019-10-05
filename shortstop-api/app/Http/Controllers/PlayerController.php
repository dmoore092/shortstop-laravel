<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\User;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use League\Flysystem\FileNotFoundException;

class PlayerController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth', ['except' => [
             'index', 'show'
         ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //this is when arriving at /player with no id set, show all players
        $users = User::where('users.role','player')->paginate(20);

        return view('profiles.players')->with('players', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->middleware('auth');
        //return('test');
        // return view('players.update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // shows specific player
        $user = User::find($id);
        //$url = Storage::url($user->profile_image);
        return view('profiles.player')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        // Check for correct user
        if(auth()->user() || auth()->user()->role == 'admin'){
            return view('profiles.update')->with('user', $user);
        }
        return redirect('/players')->with('error', 'Unauthorized Page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->middleware('auth');
        $showcase1 = null;
        $showcase2 = null;
        $showcase3 = null;

        $this->validate($request, [
            'gender' => 'required',
            'sport' => 'required',
            'cell_phone' => 'required',
            'home_phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'highschool' => 'required',
            'weight' => 'required',
            'height_feet' => 'required',
            'height_inches' => 'required',
            'grad_year' => 'required',
            'gpa' => 'required',
            'primary_position' => 'required',

        ]);

        if($request->has('showcase1')){
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->input('showcase1'), $match)){
                $showcase1 = $match[1];
            }
        }

        if($request->has('showcase2')){
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->input('showcase1'), $match)){
                $showcase2 = $match[1];
            }
        }

        if($request->has('showcase3')){
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->input('showcase1'), $match)){
                $showcase3 = $match[1];
            }
        }

        $edit = User::find($id);
        $edit->gender = $request->input('gender');
        $edit->cell_phone = $request->input('cell_phone');
        $edit->home_phone = $request->input('home_phone');
        $edit->address = $request->input('address');
        $edit->city = $request->input('city');
        $edit->state = $request->input('state');
        $edit->zip = $request->input('zip');
        $edit->highschool = $request->input('highschool');
        $edit->weight = $request->input('weight');
        $edit->height_feet = $request->input('height_feet');
        $edit->height_inches = $request->input('height_inches');
        $edit->grad_year = $request->input('grad_year');
        $edit->sport = $request->input('sport');
        $edit->primary_position = $request->input('primary_position');
        $edit->secondary_position = $request->input('secondary_position');
        $edit->travel_team = $request->input('travel_team');
        $edit->gpa = $request->input('gpa');
        $edit->sat = $request->input('sat');
        $edit->act = $request->input('act');
        $edit->ref1_name = $request->input('ref1_name');
        $edit->ref1_jobtitle = $request->input('ref1_jobtitle');
        $edit->ref1_email = $request->input('ref1_email');
        $edit->ref1_phone = $request->input('ref1_phone');
        $edit->ref2_name = $request->input('ref2_name');
        $edit->ref2_jobtitle = $request->input('ref2_jobtitle');
        $edit->ref2_email = $request->input('ref2_email');
        $edit->ref2_phone = $request->input('ref2_phone');
        $edit->ref3_name = $request->input('ref3_name');
        $edit->ref3_jobtitle = $request->input('ref3_jobtitle');
        $edit->ref3_email = $request->input('ref3_email');
        $edit->ref3_phone = $request->input('ref3_phone');
        $edit->showcase1 = $showcase1;
        $edit->showcase2 = $showcase2;
        $edit->showcase3 = $showcase3;
        $edit->personal_statement = $request->input('personal_statement');
        $edit->commitment = $request->input('commitment');
        $edit->twitter = $request->input('twitter');
        $edit->facebook = $request->input('facebook');
        $edit->instagram = $request->input('instagram');

        if(auth()->user()->id == $edit->id || auth()->user()->role == 'admin'){

            if($request->hasFile('profile_image')){
                //find current profile image from db
                $oldUrl = User::find($id)->pluck('profile_image');

                //upload new file to s3
                $url = Storage::disk('s3')->put('images/userimages', $request->file('profile_image'), 'public');

                //delete old image from s3
                Storage::disk('s3')->delete($oldUrl[0]);

                //save image path to request
                $edit->profile_image = $url;
            }

            //save all altered fields to db
            $edit->save();
        }


        return redirect()->action('PlayerController@show', ['id'=>$id])->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $user = User::find($id);

        //Check if post exists before deleting
        if (!isset($player)){
            return redirect('/players')->with('error', 'No Players Found');
        }

        if(auth()->user()->id == $player->id || auth()->user()->role == 'admin'){
            $player->delete();
            $user->delete();
            if($player->profile_image != 'black.JPG'){
                // Delete Image
                Storage::delete('public/profile_images/'.$player->profile_image);
            }
        }

        return redirect()->action('PlayerController@index')->with('success', 'Profile Deleted');
    }
}
