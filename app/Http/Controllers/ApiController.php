<?php

namespace App\Http\Controllers;

use App\AboutInfo;
use App\HomeInfo;
use Illuminate\Http\Request;
use App\Blog;

class ApiController extends Controller
{
    public function index() {
        try{
            //return home page content from db
            $post = HomeInfo::orderBy('created_at', 'desc')->limit(1)->get()->toJson(JSON_PRETTY_PRINT);
        }
        catch(\Illuminate\Database\QueryException $ex){

        }
        return response($post, 200);
    }
}
