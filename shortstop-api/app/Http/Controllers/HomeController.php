<?php

namespace App\Http\Controllers;

use App\Players;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    }
}

