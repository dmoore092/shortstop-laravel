<?php

namespace App\Http\Controllers;

use App\AboutInfo;
use App\HomeInfo;
use Illuminate\Http\Request;
use App\Blog;

class PagesController extends Controller
{
    public function index(){
        return redirect('https://athleticprospects.com');
    }

}
