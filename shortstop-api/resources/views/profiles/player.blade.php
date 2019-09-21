@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')

<div id="body-main">
    Profiles

    @if(!auth::guest())
        @if(auth::user()->id == $player->id)
            <a href="/players/{{$player->id}}/edit">Edit</a>
            {!! Form::open(['action' => ['PlayerController@destroy', $player->id], 'method' => 'POST', 'class' => 'btn']) !!}   
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('DELETE PROFILE', ['class' => 'btn'])}}
            {!! Form::close() !!}
        @endif
    @endif
    {{$player->id}}
    {{$player->gender}}
    {{$player->email}}
    {{$player->cell_phone}}
    {{$player->home_phone}}
    {{$player->address}}
    {{$player->city}}
    {{$player->state}}
    {{$player->zip}}
    {{$player->highschool}}
    {{$player->weight}}
    {{$player->height}}
    {{$player->grad_year}}
    {{$player->sport}}
    {{$player->primary_position}}
    {{$player->secondary_position}}
    {{$player->travel_team}}
    {{$player->gpa}}
    {{$player->sat}}
    {{$player->act}}
    {{$player->ref1_name}}
    {{$player->ref1_jobtitle}}
    {{$player->ref1_email}}
    {{$player->ref1_phone}}
    {{$player->ref2_name}}
    {{$player->ref2_jobtitle}}
    {{$player->ref2_email}}
    {{$player->ref2_phone}}
    {{$player->ref3_name}}
    {{$player->ref3_jobtitle}}
    {{$player->ref3_email}}
    {{$player->ref3_phone}}
    {{$player->personal_statement}}
    {{$player->commitment}}
    {{$player->twitter}}
    {{$player->facebook}}
    {{$player->instagram}}
<div>
        <hr class="my-4">
    @include('includes.footer')
@endsection
