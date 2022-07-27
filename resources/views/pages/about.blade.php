@extends('layouts.app')

@section('title', 'Athletic Prospects | About Us')

@section('content')
<div class="jumbotron col-md-11 ml-auto mr-auto">
        <h1 class="display-4">About Us</h1>
        <hr>
        <h2 class="display-5">{!! html_entity_decode($post->header) !!}</h2>
        <p class="lead">{!! html_entity_decode($post->text) !!}</p>
        <h2>Any Questions?</h2>
        <p>Email us at <a href="mailto:Kprestano@athleticprospects.com">Kprestano@athleticprospects.com</a></p>
        {{-- <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p> --}}
<div>
    <hr class="my-4">
    @include('includes.footer')
@endsection
