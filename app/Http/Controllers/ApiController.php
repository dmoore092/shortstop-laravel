<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index() {
        return response()->json(["message" => "Hello from the API"]);
        // try{
        //     //show homepage with page content from db
        //     $post = HomeInfo::orderBy('created_at', 'desc')->limit(1)->get();
            
        //     /// shows homepage with blog content
        //     $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);

        //     //return view('pages.home')->with('post', $post[0])->with('blogs', $blogs);
        //     // return view('pages.home')->with('posts', $posts);
        // }
        // catch(\Illuminate\Database\QueryException $ex){

        // }
//        return dd($post[0]->header);
        
        //view('pages.home')->with('post', $post[0]);
      }
}
