<?php

namespace App\Http\Controllers;

use App\AboutInfo;
use App\HomeInfo;
use Illuminate\Http\Request;
use App\Player;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        try{
            $about = AboutInfo::orderBy('created_at', 'desc')->limit(1)->get();
            $home = HomeInfo::orderBy('created_at', 'desc')->limit(1)->get();
        }
        catch(\Illuminate\Database\QueryException $ex){

        }

        return view('dashboard')->with('user', $user)->with('about', $about[0])->with('home', $home[0]);
    }
}
