<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $posts = Blog::all()->toArray();
        return view('blog.index',compact('blog'));
//        $messages = Blog::all();
//        //$messages = Message::all();
//
//        foreach($messages as $message){
//            return view('blog')->with(title, $message);
//        }die;
//
//        return view('blog');
    }
}

