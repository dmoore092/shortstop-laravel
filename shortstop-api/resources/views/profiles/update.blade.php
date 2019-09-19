@extends('master')

@section('title', 'Athletic Prospects | Profile')

@section('content')

    <div id="body-main">
        edit profile
        {!! Form::open(['action' => ['ProfileController@update', $profile->id], 'method' => 'POST']) !!}
            <div>
                {{Form::label('gender', 'Gender')}}
                {{Form::text('gender', $profile->gender, ['class' => 'form', 'placeholder' => 'm or f'])}}
                {{Form::label('cell_phone', 'Cell Phone')}}
                {{Form::text('cell_phone', $profile->cell_phone, ['class' => 'form', 'placeholder' => 'Cell Phone'])}}
                {{Form::label('home_phone', 'Home Phone')}}
                {{Form::text('home_phone', $profile->home_phone, ['class' => 'form', 'placeholder' => 'Home Phone'])}}
                {{Form::label('address', 'Address')}}
                {{Form::text('address', $profile->address, ['class' => 'form', 'placeholder' => 'Address'])}}
                {{Form::label('city', 'City')}}
                {{Form::text('city', $profile->city, ['class' => 'form', 'placeholder' => 'City'])}}
                {{Form::label('state', 'State')}}
                {{Form::text('state', $profile->state, ['class' => 'form', 'placeholder' => 'State'])}}
                {{Form::label('zip', 'Zip')}}
                {{Form::text('zip', $profile->zip, ['class' => 'form', 'placeholder' => 'Zip'])}}
                {{Form::label('highschool', 'Highschool')}}
                {{Form::text('highschool', $profile->highschool, ['class' => 'form', 'placeholder' => 'Highschool'])}}
                {{Form::label('weight', 'Weight')}}
                {{Form::text('weight', $profile->weight, ['class' => 'form', 'placeholder' => 'Weight'])}}
                {{Form::label('height', 'Height')}}
                {{Form::text('height', $profile->height, ['class' => 'form', 'placeholder' => 'Height'])}}
                {{Form::label('grad_year', 'Class Of')}}
                {{Form::text('grad_year', $profile->grad_year, ['class' => 'form', 'placeholder' => 'Class Of'])}}
                {{Form::label('sport', 'Sport')}}
                {{Form::text('sport', $profile->sport, ['class' => 'form', 'placeholder' => 'Sport'])}}
                {{Form::label('primary_position', 'Primary Position')}}
                {{Form::text('primary_position', $profile->primary_position, ['class' => 'form', 'placeholder' => 'Primary Position'])}}
                {{Form::label('secondary_position', 'Secondary Position')}}
                {{Form::text('secondary_position', $profile->secondary_position, ['class' => 'form', 'placeholder' => 'Secondary Position'])}}
                {{Form::label('travel_team', 'Travel Team')}}
                {{Form::text('travel_team', $profile->travel_team, ['class' => 'form', 'placeholder' => 'Travel Team'])}}
                {{Form::label('gpa', 'Gpa')}}
                {{Form::text('gpa', $profile->gpa, ['class' => 'form', 'placeholder' => 'GPA'])}}
                {{Form::label('sat', 'SAT')}}
                {{Form::text('sat', $profile->sat, ['class' => 'form', 'placeholder' => 'SAT'])}}
                {{Form::label('act', 'ACT')}}
                {{Form::text('act', $profile->act, ['class' => 'form', 'placeholder' => 'ACT'])}}
                {{Form::label('ref1_name', 'Reference 1 Name')}}
                {{Form::text('ref1_name', $profile->ref1_name, ['class' => 'form', 'placeholder' => 'Name'])}}
                {{Form::label('ref1_jobtitle', 'Reference 1 Job Title')}}
                {{Form::text('ref1_jobtitle', $profile->ref1_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])}}
                {{Form::label('ref1_email', 'Reference 1 Email')}}
                {{Form::text('ref1_email', $profile->ref1_email, ['class' => 'form', 'placeholder' => 'Email'])}}
                {{Form::label('ref1_phone', 'Reference 1 Phone')}}
                {{Form::text('ref1_phone', $profile->ref1_phone, ['class' => 'form', 'placeholder' => 'Phone'])}}
                {{Form::label('ref2_name', 'Reference 2 Name')}}
                {{Form::text('ref2_name', $profile->ref2_name, ['class' => 'form', 'placeholder' => 'Name'])}}
                {{Form::label('ref2_jobtitle', 'Reference 2 Job Title')}}
                {{Form::text('ref2_jobtitle', $profile->ref2_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])}}
                {{Form::label('ref2_email', 'Reference 2 Email')}}
                {{Form::text('ref2_email', $profile->ref2_email, ['class' => 'form', 'placeholder' => 'Email'])}}
                {{Form::label('ref2_phone', 'Reference 2 Phone')}}
                {{Form::text('ref2_phone', $profile->ref2_phone, ['class' => 'form', 'placeholder' => 'Phone'])}}
                {{Form::label('ref3_name', 'Reference 3 Name')}}
                {{Form::text('ref3_name', $profile->ref3_name, ['class' => 'form', 'placeholder' => 'Name'])}}
                {{Form::label('ref3_jobtitle', 'Reference 3 Job Title')}}
                {{Form::text('ref3_jobtitle', $profile->ref3_jobtitle, ['class' => 'form', 'placeholder' => 'Title'])}}
                {{Form::label('ref3_email', 'Reference 3 Email')}}
                {{Form::text('ref3_email', $profile->ref3_email, ['class' => 'form', 'placeholder' => 'Email'])}}
                {{Form::label('ref3_phone', 'Reference 3 Phone')}}
                {{Form::text('ref3_phone', $profile->ref3_phone, ['class' => 'form', 'placeholder' => 'Phone'])}}
                {{Form::label('personal_statement', 'Personal Statement')}}
                {{Form::text('personal_statement', $profile->personal_statement, ['class' => 'form', 'placeholder' => 'Statement'])}}
                {{Form::label('commitment', 'Commitment')}}
                {{Form::text('commitment', $profile->commitment, ['class' => 'form', 'placeholder' => 'Commitment'])}}
                {{Form::label('college', 'College')}}
                {{Form::text('college', $profile->college, ['class' => 'form', 'placeholder' => 'College'])}}
                {{Form::label('twitter', 'Twitter')}}
                {{Form::text('twitter', $profile->twitter, ['class' => 'form', 'placeholder' => 'Twitter'])}}
                {{Form::label('facebook', 'Facebook')}}
                {{Form::text('facebook', $profile->facebook, ['class' => 'form', 'placeholder' => 'Facebook'])}}
                {{Form::label('instagram', 'Instagram')}}
                {{Form::text('instagram', $profile->instagram, ['class' => 'form', 'placeholder' => 'Instagram'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn'])}}
        {!! Form::close() !!}
    <div>
@endsection