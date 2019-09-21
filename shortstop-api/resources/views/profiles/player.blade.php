@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')
<div class="jumbotron col-md-7 ml-auto mr-auto">
        <h1 class="display-4"><a class="btn btn-danger" href="/players/{{$player->id}}/edit">Edit</a> {{$user->name}}</h1>
        <h4>{{$player->highschool}}</h4>
        <hr>

        <h2 class="display-5"></h2>
        
        <div>
            
            <div class="row">
                <div class="col-sm-4">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                <img src="/images/{{$player->profile_image}}" cclass="col-sm-4 img-fluid" style="max-width:300px" alt="Player Profile Image">
                            </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Player Info</h5>
                            <p class="card-text"><span class="profile-labels">Gender:</span> {{$player->gender}}<p>
                            <p class="card-text"><span class="profile-labels">Cell Phone:</span> {{$player->cell_phone}} <p>
                            <p class="card-text"><span class="profile-labels">Home Phone:</span> {{$player->home_phone}} <p>
                            <p class="card-text"><span class="profile-labels">Email: </span><a href="mailto:{{$player->email}}">{{$player->email}}</a><p>
                            <p class="card-text"><span class="profile-labels">Address:</span> {{$player->address}}<p>
                            <p class="card-text"><span class="profile-labels">City:</span> {{$player->city}} <p>
                            <p class="card-text"><span class="profile-labels">State:</span> {{$player->state}}<p>
                            <p class="card-text"><span class="profile-labels">Zip:</span> {{$player->zip}} <p>
                            <p class="card-text"><span class="profile-labels">Class of:</span> {{$player->grad_year}} <p>
                            <p class="card-text"><span class="profile-labels">Height:</span> {{$player->height}}<p>
                            <p class="card-text"><span class="profile-labels">Weight:</span> {{$player->weight}} <p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sport Info</h5>
                            <p class="card-text"><span class="profile-labels">Sport:</span> {{$player->sport}}</p>
                            <p class="card-text"><span class="profile-labels">Primary Position:</span> {{$player->primary_position}} </p>
                            <p class="card-text"><span class="profile-labels">Secondary Position:</span> {{$player->secondary_position}}</p>
                            <p class="card-text"><span class="profile-labels">Travel Team:</span> {{$player->travel_team}} </p>
                            <p class="card-text"><span class="profile-labels">GPA:</span> {{$player->gpa}}</p>
                            <p class="card-text"><span class="profile-labels">ACT:</span> {{$player->act}}</p>
                            <p class="card-text"><span class="profile-labels">SAT:</span> {{$player->sat}}</p>
                            <p class="card-text"><span class="profile-labels">Facebook:</span> {{$player->facebook}} </p>
                            <p class="card-text"><span class="profile-labels">Instagram:</span> {{$player->instagram}} </p>
                            <p class="card-text"><span class="profile-labels">Twitter:</span> {{$player->twitter}}</p>
                            <p class="card-text"><span class="profile-labels">Commitment:</span> {{$player->commitment}} </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                <small>When you become committed to a college, please send us an email at <a href="mailto:kprestano@athleticprospects.com">kprestano@athleticprospects.com</a> </small>
                <hr>
            @if(!auth::guest())
                @if(auth::user()->id == $player->id)
                    
                    {!! Form::open(['action' => ['PlayerController@destroy', $player->id], 'method' => 'POST', 'class' => 'btn']) !!}   
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('DELETE PROFILE', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                @endif
            @endif
        </div>
        
        <p class="lead"> </p>

<div>


                       
  
    <hr class="my-4">
    @include('includes.footer')
</div>
@endsection


    {{$player->id}}


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


