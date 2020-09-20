<?php

namespace App\Http\Controllers;

use App\AboutInfo;
use App\HomeInfo;
use Illuminate\Http\Request;
use App\Blog;

class ApiController extends Controller
{
    public function index() {
        //return response()->json(["message" => "hello from the api"]);
        try{
        //     //show homepage with page content from db
            //$post = HomeInfo::orderBy('created_at', 'desc')->limit(1)->get()->toJson(JSON_PRETTY_PRINT);
        //     /// shows homepage with blog content
            $blogs = Blog::get()->toJson(JSON_PRETTY_PRINT);
            // $blogs = ['test', 1, "test2", 2];

        //     //return view('pages.home')->with('post', $post[0])->with('blogs', $blogs);
        //     // return view('pages.home')->with('posts', $posts);
        }
        catch(\Illuminate\Database\QueryException $ex){

        }
//        return dd($post[0]->header);
        return response($blogs, 200);
        //view('pages.home')->with('post', );
      }
}
