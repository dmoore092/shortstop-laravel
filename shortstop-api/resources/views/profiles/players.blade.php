@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')

<div id="body-main">
    Profiles
    @if(count($users) > 0)
        {{-- @foreach($players as $player) --}}
            @foreach($users as $user)
                <div>
                    {{-- {{var_dump($user)}} --}}
                <h3><a href="/players/{{$user->id}}">{{ $user->name }}</a></h3>
                </div>
            @endforeach
        {{-- @endforeach --}}
        {{$users->links()}}
    @else 
        <p>No Players Found</p>
    @endif
<div>
        <hr class="my-4">
    @include('includes.footer')
@endsection