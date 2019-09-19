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
