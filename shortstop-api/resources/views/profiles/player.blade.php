@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')
<div class="jumbotron col-md-10 ml-auto mr-auto">
    <h1 class="display-4">
        {{$user->name}}
        @if(!auth::guest())
            @if(auth::user()->id == $player->id)
            {{-- hide edit button if not your profile --}}
                <a class="btn btn-secondary" href="/players/{{$player->id}}/edit">Edit</a>
            @endif
        @endif
        <span class="float-right">
            @if(!auth::guest())
                @if(auth::user()->id == $player->id)
                    {!! Form::open(['action' => ['PlayerController@destroy', $player->id], 'method' => 'POST', 'class' => 'btn']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('DELETE PROFILE', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
                @endif
            @endif
        </span>
    </h1>
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
                        @if($player->id == 1 or $player->id == 2)
                        <p class="card-text"><span class="profile-labels">Gender:</span> {{$player->gender}}<p>
                        <p class="card-text"><span class="profile-labels">Cell Phone:</span> {{$player->cell_phone}} <p>
                        <p class="card-text"><span class="profile-labels">Home Phone:</span> {{$player->home_phone}} <p>
                        @endif
                        <p class="card-text"><span class="profile-labels">Email: </span><a href="mailto:{{$player->email}}">{{$player->email}}</a><p>
                        <p class="card-text"><span class="profile-labels">Address:</span> {{$player->address}}<p>
                        <p class="card-text"><span class="profile-labels">City:</span> {{$player->city}} <p>
                        <p class="card-text"><span class="profile-labels">State:</span> {{$player->state}}<p>
                        <p class="card-text"><span class="profile-labels">Zip:</span> {{$player->zip}} <p>
                        <p class="card-text"><span class="profile-labels">Class of:</span> {{$player->grad_year}} <p>
                        <p class="card-text"><span class="profile-labels">Height:</span> {{$player->height_feet}}' {{$player->height_inches}}''<p>
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
    </div>
    @if($player->showcase1 !== null || $player->showcase2 !== null || $player->showcase3 !== null)
    <hr>
    <div>
        <h4>Videos</h4>
        <div class="row">
            @if($player->showcase1 !== null)
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="{{$player->showcase1}}"></iframe>
                    </div>
                </div>
            @endif
            @if($player->showcase2 !== null)
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="{{$player->showcase2}}"></iframe>
                    </div>
                </div>
            @endif
            @if($player->showcase2 !== null)
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="{{$player->showcase3}}"></iframe>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @endif
    @if($player->ref1_name !== null || $player->ref2_name !== null || $player->ref2_name !== null)
    <hr>
    <div>
        <h4>References</h4>
        <div class="row">
            @if($player->ref1_name !== null)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{$player->ref1_name}}</div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> {{$player->ref1_jobtitle}}</p>
                        <p class="card-text"><span class="profile-labels">Email:</span> {{$player->ref1_email}}</p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> {{$player->ref1_phone}}</p>
                    </div>
                </div>
            </div>
            @endif
            @if($player->ref2_name !== null)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{$player->ref2_name}}</div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> {{$player->ref2_jobtitle}}</p>
                        <p class="card-text"><span class="profile-labels">Email:</span> {{$player->ref2_email}}</p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> {{$player->ref2_phone}}</p>
                    </div>
                </div>
            </div>
            @endif
            @if($player->ref3_name !== null)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{$player->ref3_name}}</div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> {{$player->ref3_jobtitle}}</p>
                        <p class="card-text"><span class="profile-labels">Email:</span> {{$player->ref3_email}}</p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> {{$player->ref3_phone}}</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    @endif
<div>




    <hr class="my-4">
    @include('includes.footer')
</div>
@endsection

{{--

    {{$player->id}}



    {{$player->ref2_name}}
    {{$player->ref2_jobtitle}}
    {{$player->ref2_email}}
    {{$player->ref2_phone}}
    {{$player->ref3_name}}
    {{$player->ref3_jobtitle}}
    {{$player->ref3_email}}
    {{$player->ref3_phone}}
    {{$player->personal_statement}}


    --}}



