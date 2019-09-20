@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')

<div id="body-main">
    Profiles
    @if(count($players) > 0)
        @foreach($players as $player)
            <div>
            <h3><a href="/profile/{{$player->id}}">{{ $player->email }}</a></h3>
            </div>
        @endforeach
        {{$players->links()}}
    @else 
        <p>No Players Found</p>
    @endif
<div>
@endsection