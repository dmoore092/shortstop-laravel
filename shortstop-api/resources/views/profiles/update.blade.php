@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')

    <div id="body-main">
        edit profile
        {!! Form::open(['action' => ['PlayerController@update', $player->id], 'method' => 'POST']) !!}
            <div>
                {{Form::label('gender', 'Gender')}}
                {{Form::text('gender', $player->gender, ['class' => 'form', 'placeholder' => 'm or f'])}}
                {{Form::label('email', 'Email')}}
                {{Form::text('email', $player->email, ['class' => 'form', 'placeholder' => 'Email'])}}
                {{Form::label('cell_phone', 'Cell Phone')}}
                {{Form::text('cell_phone', $player->cell_phone, ['class' => 'form', 'placeholder' => 'Cell Phone'])}}
                {{Form::label('home_phone', 'Home Phone')}}
                {{Form::text('home_phone', $player->home_phone, ['class' => 'form', 'placeholder' => 'Home Phone'])}}
                {{Form::label('address', 'Address')}}
                {{Form::text('address', $player->address, ['class' => 'form', 'placeholder' => 'Address'])}}
                {{Form::label('city', 'City')}}
                {{Form::text('city', $player->city, ['class' => 'form', 'placeholder' => 'City'])}}
                {{Form::label('state', 'State')}}
                {{Form::text('state', $player->state, ['class' => 'form', 'placeholder' => 'State'])}}
                {{Form::label('zip', 'Zip')}}
                {{Form::text('zip', $player->zip, ['class' => 'form', 'placeholder' => 'Zip'])}}
                {{Form::label('highschool', 'Highschool')}}
                {{Form::text('highschool', $player->highschool, ['class' => 'form', 'placeholder' => 'Highschool'])}}
                {{Form::label('weight', 'Weight')}}
                {{Form::text('weight', $player->weight, ['class' => 'form', 'placeholder' => 'Weight'])}}
                {{Form::label('height', 'Height')}}
                {{Form::text('height', $player->height, ['class' => 'form', 'placeholder' => 'Height'])}}
                {{Form::label('grad_year', 'Class Of')}}
                {{Form::text('grad_year', $player->grad_year, ['class' => 'form', 'placeholder' => 'Class Of'])}}
                {{Form::label('sport', 'Sport')}}
                {{Form::text('sport', $player->sport, ['class' => 'form', 'placeholder' => 'Sport'])}}
                {{Form::label('primary_position', 'Primary Position')}}
                {{Form::text('primary_position', $player->primary_position, ['class' => 'form', 'placeholder' => 'Primary Position'])}}
                {{Form::label('secondary_position', 'Secondary Position')}}
                {{Form::text('secondary_position', $player->secondary_position, ['class' => 'form', 'placeholder' => 'Secondary Position'])}}
                {{Form::label('travel_team', 'Travel Team')}}
                {{Form::text('travel_team', $player->travel_team, ['class' => 'form', 'placeholder' => 'Travel Team'])}}
                {{Form::label('gpa', 'Gpa')}}
                {{Form::text('gpa', $player->gpa, ['class' => 'form', 'placeholder' => 'GPA'])}}
                {{Form::label('sat', 'SAT')}}
                {{Form::text('sat', $player->sat, ['class' => 'form', 'placeholder' => 'SAT'])}}
                {{Form::label('act', 'ACT')}}
                {{Form::text('act', $player->act, ['class' => 'form', 'placeholder' => 'ACT'])}}
                {{Form::label('ref1_name', 'Reference 1 Name')}}
                {{Form::text('ref1_name', $player->ref1_name, ['class' => 'form', 'placeholder' => 'Name'])}}
                {{Form::label('ref1_jobtitle', 'Reference 1 Job Title')}}
                {{Form::text('ref1_jobtitle', $player->ref1_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])}}
                {{Form::label('ref1_email', 'Reference 1 Email')}}
                {{Form::text('ref1_email', $player->ref1_email, ['class' => 'form', 'placeholder' => 'Email'])}}
                {{Form::label('ref1_phone', 'Reference 1 Phone')}}
                {{Form::text('ref1_phone', $player->ref1_phone, ['class' => 'form', 'placeholder' => 'Phone'])}}
                {{Form::label('ref2_name', 'Reference 2 Name')}}
                {{Form::text('ref2_name', $player->ref2_name, ['class' => 'form', 'placeholder' => 'Name'])}}
                {{Form::label('ref2_jobtitle', 'Reference 2 Job Title')}}
                {{Form::text('ref2_jobtitle', $player->ref2_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])}}
                {{Form::label('ref2_email', 'Reference 2 Email')}}
                {{Form::text('ref2_email', $player->ref2_email, ['class' => 'form', 'placeholder' => 'Email'])}}
                {{Form::label('ref2_phone', 'Reference 2 Phone')}}
                {{Form::text('ref2_phone', $player->ref2_phone, ['class' => 'form', 'placeholder' => 'Phone'])}}
                {{Form::label('ref3_name', 'Reference 3 Name')}}
                {{Form::text('ref3_name', $player->ref3_name, ['class' => 'form', 'placeholder' => 'Name'])}}
                {{Form::label('ref3_jobtitle', 'Reference 3 Job Title')}}
                {{Form::text('ref3_jobtitle', $player->ref3_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])}}
                {{Form::label('ref3_email', 'Reference 3 Email')}}
                {{Form::text('ref3_email', $player->ref3_email, ['class' => 'form', 'placeholder' => 'Email'])}}
                {{Form::label('ref3_phone', 'Reference 3 Phone')}}
                {{Form::text('ref3_phone', $player->ref3_phone, ['class' => 'form', 'placeholder' => 'Phone'])}}
                {{Form::label('showcase1', 'Highlight Video 1')}}
                {{Form::text('showcase1', $player->showcase1, ['class' => 'form', 'placeholder' => ''])}}
                {{Form::label('showcase2', 'Highlight Video 2')}}
                {{Form::text('showcase2', $player->showcase2, ['class' => 'form', 'placeholder' => ''])}}
                {{Form::label('showcase3', 'Highlight Video 3')}}
                {{Form::text('showcase3', $player->showcase3, ['class' => 'form', 'placeholder' => ''])}}
                {{Form::label('personal_statement', 'Personal Statement')}}
                {{Form::text('personal_statement', $player->personal_statement, ['class' => 'form', 'placeholder' => 'Statement'])}}
                {{Form::label('commitment', 'Commitment')}}
                {{Form::text('commitment', $player->commitment, ['class' => 'form', 'placeholder' => 'Commitment'])}}
                {{Form::label('twitter', 'Twitter')}}
                {{Form::text('twitter', $player->twitter, ['class' => 'form', 'placeholder' => 'Twitter'])}}
                {{Form::label('facebook', 'Facebook')}}
                {{Form::text('facebook', $player->facebook, ['class' => 'form', 'placeholder' => 'Facebook'])}}
                {{Form::label('instagram', 'Instagram')}}
                {{Form::text('instagram', $player->instagram, ['class' => 'form', 'placeholder' => 'Instagram'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn'])}}
        {!! Form::close() !!}
    <div>
            <hr class="my-4">
    @include('includes.footer')
@endsection