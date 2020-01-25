@extends('layouts.app')

@section('title', 'Athletic Prospects | Dashboard')
@section('content')
<div class="jumbotron col-md-7 ml-auto mr-auto">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if($user->role === 'admin')
        @include('includes.admin')
    @else
        <h1 class="display-4">Dashboard</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://shortstop-userimages.s3.amazonaws.com/{{$user->profile_image}}" class="card-img" alt="Player Profile Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">My Profile</h5>
                        <p class="card-text">
                            {{$user->name}} <br>
                            <a href="/players/{{$user->id}}/edit">Edit My Profile</a>
                            <br>
                            <a href="/players/{{$user->id}}">View My Profile</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <hr class="my-4">
    @include('includes.footer')
</div>
@endsection
