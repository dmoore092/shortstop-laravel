@extends('layouts.app')

@section('title', 'Athletic Prospects | Blog')
@section('content')
    <div class="jumbotron col-md-7 ml-auto mr-auto">
        <h1 class="display-4">Blog @ Athletic Prospects</h1>
        <p class="lead"></p>
        <hr class="my-4">
        @include('includes.messages')
        @foreach($posts as $post)
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                @if($post->post_image != null or $post->post_image != "")
                    <div class="col-md-4">
                        <img src="https://shortstop-userimages.s3.amazonaws.com/{{$post->post_image}}" class="card-img" alt="Blog Image">
                    </div>
                @endif
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> {{$post->title}} </h5>
                            <p class="card-text">
                                {!! $post->text !!}
                            </p>
                            <p>
                                <audio controls>
                                    <source src="https://shortstop-userimages.s3.amazonaws.com/{{$post->podcast}}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <hr class="my-4">
        @endforeach
        {{$posts->links()}}
    @include('includes.footer')
    </div>
@endsection
