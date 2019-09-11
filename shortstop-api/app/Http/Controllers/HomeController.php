<?php

namespace App\Http\Controllers;

use App\Players;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $players = Players::all();
        //$messages = Message::all();

        foreach($players as $name){
            echo $name->id;
            echo "\r\n";
        }die;

        return view('home');
    }
}

