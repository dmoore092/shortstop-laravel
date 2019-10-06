@extends('layouts.app')

@section('title', 'Athletic Prospects | Blog')
@section('content')
    <div class="jumbotron col-md-7 ml-auto mr-auto">
        <h1 class="display-4">Blog @ Athletic Prospects</h1>
        <p class="lead"></p>
        <hr class="my-4">
        @foreach($posts as $post)
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/images/{{$post->post_image}}" class="card-img" alt="Blog Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> {{$post->title}} </h5>
                            <p class="card-text">
                                {{$post->text}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <hr class="my-4">
        @endforeach
    @include('includes.footer')
    </div>
@endsection
