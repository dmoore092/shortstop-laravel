
@extends('master')

@section('title', 'Athletic Prospects | Blog')

@section('content')

    <h1>Blog Content</h1>
    @foreach($posts as $post)
        <p>
            {{ $post['title'] }}
        </p>
    @endforeach

@endsection
