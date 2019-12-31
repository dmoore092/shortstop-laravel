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
        try{
            $post = HomeInfo::orderBy('created_at', 'desc')->limit(1)->get();
            return view('pages.home')->with('post', $post[0]);
        }
        catch(\Illuminate\Database\QueryException $ex){

        }
//        return dd($post[0]->header);
        return view('pages.home')->with('post', $post[0]);

    }

    public function updateHome(Request $request){
        //edit info on homepage
        $this->middleware('admin');
        $this->validate($request, [
            'header' => 'required',
            'text' => 'required',
        ]);

        $post = new HomeInfo;
        $post->header = $request->header;
        $post->text = $request->text;
        $post->edited_by = auth()->user()->name;
        $post->save();
        return redirect()->action('PagesController@index');
    }

    public function about(){
        //show about us page with info from db
        try{
            $post = AboutInfo::orderBy('created_at', 'desc')->limit(1)->get();
        }
        catch(\Illuminate\Database\QueryException $ex){

        }
        return view('pages.about')->with('post', $post[0]);
    }

    public function updateAbout(Request $request){
        //update about us page
        $this->middleware('admin');
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
        ]);
        
        $post = new AboutInfo;
        $post->header = $request->header;
        $post->text = $request->text;
        $post->edited_by = auth()->user()->name;
        $post->save();
        return redirect()->action('PagesController@index');
    }
}
