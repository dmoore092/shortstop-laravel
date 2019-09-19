@extends('master')

@section('title', 'Athletic Prospects | Profile')

@section('content')

<div id="body-main">
    Profiles
    <a href="/profile/{{$profile->id}}/edit">Edit</a>
    {!! Form::open(['action' => ['ProfileController@destroy', $profile->id], 'method' => 'POST', 'class' => 'btn']) !!}   
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('DELETE PROFILE', ['class' => 'btn'])}}
    {!! Form::close() !!}

    {{$profile->id}}
    {{$profile->gender}}
    {{$profile->email}}
    {{$profile->cell_phone}}
    {{$profile->home_phone}}
    {{$profile->address}}
    {{$profile->city}}
    {{$profile->state}}
    {{$profile->zip}}
    {{$profile->highschool}}
    {{$profile->weight}}
    {{$profile->height}}
    {{$profile->grad_year}}
    {{$profile->sport}}
    {{$profile->primary_position}}
    {{$profile->secondary_position}}
    {{$profile->travel_team}}
    {{$profile->gpa}}
    {{$profile->sat}}
    {{$profile->act}}
    {{$profile->ref1_name}}
    {{$profile->ref1_jobtitle}}
    {{$profile->ref1_email}}
    {{$profile->ref1_phone}}
    {{$profile->ref2_name}}
    {{$profile->ref2_jobtitle}}
    {{$profile->ref2_email}}
    {{$profile->ref2_phone}}
    {{$profile->ref3_name}}
    {{$profile->ref3_jobtitle}}
    {{$profile->ref3_email}}
    {{$profile->ref3_phone}}
    {{$profile->personal_statement}}
    {{$profile->commitment}}
    {{$profile->twitter}}
    {{$profile->facebook}}
    {{$profile->instagram}}
<div>
@endsection
