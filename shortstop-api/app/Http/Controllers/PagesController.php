<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.home');
    }

    public function about(){

        return view('pages.about');
    }

    public function players(){

        return view('pages.players');
    }

    public function profile($id){

        return view('pages.profile')->with('id', $id);
    }

    public function blog(){

        return view('pages.blog');
    }
}
