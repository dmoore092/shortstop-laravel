<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Blog;
use App\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /// shows specific player
        $posts = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.blog')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
        ]);

        // Handle image Upload
        if($request->hasFile('image')){
            $url = Storage::disk('s3')->put('images/blogimages', $request->file('image'), 'public');
        } else {
            $url = '';
        }

        // Handle podcast Upload
        if($request->hasFile('podcast')){
            $url = Storage::disk('s3')->put('podcasts', $request->file('podcast'), 'public');
        } else {
            $url = '';
        }

        // Create Post
        $post = new Blog;
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->post_image = $url;
        $post->podcast = $request->input('podcast');
        $post->author = User::find(auth()->user()->id)->name;
        $post->post_image = $url;
        $post->save();

        return redirect('/blog')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
