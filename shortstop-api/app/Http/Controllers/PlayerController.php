<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //this is when arriving at /player with no id set, show all players
        $players = Player::join('users', 'users.id', '=', 'players.id')->select('users.id', 
                                                                                'users.name', 
                                                                                'players.profile_image',
                                                                                'players.sport',
                                                                                'players.primary_position')->paginate(5);
        //$users = User::orderBy('id')->paginate(5);
        //return $players;
        return view('profiles.players')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return('test');
        // return view('players.update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // shows specific player
        $player = Player::find($id);
        return view('profiles.player')->with('player', $player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        
        //Check if player exists before deleting
        if (!isset($player)){
            return redirect('/players')->with('error', 'No Player Found');
        }

        // Check for correct user
        if(auth()->user()->id !== $player->id){
            return redirect('/players')->with('error', 'Unauthorized Page');
        }

        return view('profiles.update')->with('player', $player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gender' => 'required',
            'email' => 'required'    
        ]);

         // Handle File Upload
         if($request->hasFile('profile_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
        }

        $edit = Player::find($id);
        $edit->gender = $request->input('gender');
        $edit->email = $request->input('email');
        $edit->gender = $request->input('gender');
        $edit->email = $request->input('email');
        $edit->cell_phone = $request->input('cell_phone');
        $edit->home_phone = $request->input('home_phone');
        $edit->address = $request->input('address');
        $edit->city = $request->input('city');
        $edit->state = $request->input('state');
        $edit->zip = $request->input('zip');
        $edit->highschool = $request->input('highschool');
        $edit->weight = $request->input('weight');
        $edit->height = $request->input('height');
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
        $edit->personal_statement = $request->input('personal_statement');
        $edit->commitment = $request->input('commitment');
        $edit->twitter = $request->input('twitter');
        $edit->facebook = $request->input('facebook');
        $edit->instagram = $request->input('instagram');
        if($request->hasFile('profile_image')){
            $post->profile_image = $fileNameToStore;
        }
        $edit->save();

        return redirect()->action('PlayerController@show', ['id'=>$id])->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Players::find($id);

        //Check if post exists before deleting
        if (!isset($player)){
            return redirect('/posts')->with('error', 'No Post Found');
        }

         // Check for correct user
         if(auth()->user()->id !==$player->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        if($player->profile_image != 'black.JPG'){
            // Delete Image
            Storage::delete('public/profile_images/'.$post->profile_image);
        }
        $player->delete();
        return redirect()->action('PlayerController@index')->with('success', 'Profile Deleted');
    }
}
