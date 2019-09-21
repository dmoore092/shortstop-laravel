@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{$player->id}}
                    <a href="/players/{{$player->id}}/edit">Edit My Profile</a>
                    <br>
                    <a href="/players/{{$player->id}}">View My Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection