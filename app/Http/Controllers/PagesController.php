<?php

namespace App\Http\Controllers;

use App\AboutInfo;
use App\HomeInfo;
use Illuminate\Http\Request;
use App\Blog;

class PagesController extends Controller
{
    public function index(){
        //show homepage with post from db
        $post = HomeInfo::orderBy('created_at', 'desc')->limit(1)->get();
        return view('pages.home')->with('post', $post);
    }

    public function updateHome(Request $request){
        //edit info on homepage
        $this->middleware('admin');

        $post = new HomeInfo;
        $post->header = $request->header;
        $post->text = $request->text;
        $post->edited_by = auth()->user()->name;
        $post->save();
        return redirect()->action('PagesController@index');
    }

    public function about(){
        //show about us page with info from db
        $post = AboutInfo::orderBy('created_at')->limit(1)->get();
        return view('pages.about')->with('post', $post);
    }

    public function updateAbout(Request $request){
        //update about us page
        $this->middleware('admin');

        $post = new AboutInfo;
        $post->header = $request->header;
        $post->text = $request->text;
        $post->edited_by = auth()->user()->name;
        $post->save();
        return redirect()->action('PagesController@index');
    }
}
