<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Players;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //this is when arriving at profile with no id set, show all players
        $players = Players::orderBy('id')->paginate(1);
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
        // return view('profiles.update');
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
        // shows specific profile
        $profile = Players::find($id);
        return view('profiles.profile')->with('profile', $profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Players::find($id);
        return view('profiles.update')->with('profile', $profile);
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

        $edit = Players::find($id);
        $edit->gender = $request->input('gender');
        $edit->email = $request->input('email');
        // $edit->id = $request->input($id);
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
        $edit->save();

        return redirect()->action('ProfileController@show', ['id'=>$id])->with('success', 'Profile Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Players::find($id);
        $profile->delete();
        return redirect()->action('ProfileController@index')->with('success', 'Profile Deleted');
    }
}
