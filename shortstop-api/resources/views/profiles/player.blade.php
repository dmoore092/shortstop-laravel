@extends('layouts.app')

@section('title', 'Athletic Prospects | Profile')

@section('content')
<div class="jumbotron col-md-7 ml-auto mr-auto">
    <h1 class="display-4">
        {{$user->name}}
        @if(!auth::guest())
            @if(auth::user() or auth::user()->role == 'admin')
            {{-- hide edit button if not your profile and you aren't an admin --}}
                <a class="btn btn-secondary" href="/players/{{$user->id}}/edit">Edit</a>
            @endif
        @endif
    </h1>
    <h4>{{$user->highschool}}</h4>
    <hr>
    <h2 class="display-5"></h2>
    <div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            <img src="/images/{{$user->profile_image}}" cclass="col-sm-4 img-fluid" style="max-width:300px" alt="Player Profile Image">
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Player Info</h5>
                        @if($user->id == 1 or $user->id == 2)
                        <p class="card-text"><span class="profile-labels">Gender:</span> {{$user->gender}}<p>
                        <p class="card-text"><span class="profile-labels">Cell Phone:</span> {{$user->cell_phone}} <p>
                        <p class="card-text"><span class="profile-labels">Home Phone:</span> {{$user->home_phone}} <p>
                        @endif
                        <p class="card-text"><span class="profile-labels">Email: </span><a href="mailto:{{$user->email}}">{{$user->email}}</a><p>
                        <p class="card-text"><span class="profile-labels">Address:</span> {{$user->address}}<p>
                        <p class="card-text"><span class="profile-labels">City:</span> {{$user->city}} <p>
                        <p class="card-text"><span class="profile-labels">State:</span> {{$user->state}}<p>
                        <p class="card-text"><span class="profile-labels">Zip:</span> {{$user->zip}} <p>
                        <p class="card-text"><span class="profile-labels">Class of:</span> {{$user->grad_year}} <p>
                        <p class="card-text"><span class="profile-labels">Height:</span> {{$user->height_feet}}' {{$user->height_inches}}''<p>
                        <p class="card-text"><span class="profile-labels">Weight:</span> {{$user->weight}} <p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sport Info</h5>
                        <p class="card-text"><span class="profile-labels">Sport:</span> {{$user->sport}}</p>
                        <p class="card-text"><span class="profile-labels">Primary Position:</span> {{$user->primary_position}} </p>
                        <p class="card-text"><span class="profile-labels">Secondary Position:</span> {{$user->secondary_position}}</p>
                        <p class="card-text"><span class="profile-labels">Travel Team:</span> {{$user->travel_team}} </p>
                        <p class="card-text"><span class="profile-labels">GPA:</span> {{$user->gpa}}</p>
                        <p class="card-text"><span class="profile-labels">ACT:</span> {{$user->act}}</p>
                        <p class="card-text"><span class="profile-labels">SAT:</span> {{$user->sat}}</p>
                        <p class="card-text"><span class="profile-labels">Facebook:</span> {{$user->facebook}} </p>
                        <p class="card-text"><span class="profile-labels">Instagram:</span> {{$user->instagram}} </p>
                        <p class="card-text"><span class="profile-labels">Twitter:</span> {{$user->twitter}}</p>
                        <p class="card-text"><span class="profile-labels">Commitment:</span> {{$user->commitment}} </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <small>When you become committed to a college, please send us an email at <a href="mailto:kprestano@athleticprospects.com">kprestano@athleticprospects.com</a> </small>
    </div>
    @if($user->showcase1 !== null || $user->showcase2 !== null || $user->showcase3 !== null)
    <hr>
    <div>
        <h4>Videos</h4>
        <div class="row">
            @if($user->showcase1 !== null)
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="https://www.youtube.com/embed/{{$user->showcase1}}"></iframe>
                    </div>
                </div>
            @endif
            @if($user->showcase2 !== null)
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="{{$user->showcase2}}"></iframe>
                    </div>
                </div>
            @endif
            @if($user->showcase2 !== null)
                <div class="col-sm-4">
                    <div class="card">
                        <iframe allowfullscreen type='text/html' src="{{$user->showcase3}}"></iframe>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @endif
    @if($user->ref1_name !== null || $user->ref2_name !== null || $user->ref2_name !== null)
    <hr>
    <div>
        <h4>References</h4>
        <div class="row">
            @if($user->ref1_name !== null)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{$user->ref1_name}}</div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> {{$user->ref1_jobtitle}}</p>
                        <p class="card-text"><span class="profile-labels">Email:</span> {{$user->ref1_email}}</p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> {{$user->ref1_phone}}</p>
                    </div>
                </div>
            </div>
            @endif
            @if($user->ref2_name !== null)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{$user->ref2_name}}</div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> {{$user->ref2_jobtitle}}</p>
                        <p class="card-text"><span class="profile-labels">Email:</span> {{$user->ref2_email}}</p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> {{$user->ref2_phone}}</p>
                    </div>
                </div>
            </div>
            @endif
            @if($user->ref3_name !== null)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{$user->ref3_name}}</div>
                    <div class="card-body">
                        <p class="card-text"><span class="profile-labels">Job Title:</span> {{$user->ref3_jobtitle}}</p>
                        <p class="card-text"><span class="profile-labels">Email:</span> {{$user->ref3_email}}</p>
                        <p class="card-text"><span class="profile-labels">Phone:</span> {{$user->ref3_phone}}</p>
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

    {{$user->id}}



    {{$user->ref2_name}}
    {{$user->ref2_jobtitle}}
    {{$user->ref2_email}}
    {{$user->ref2_phone}}
    {{$user->ref3_name}}
    {{$user->ref3_jobtitle}}
    {{$user->ref3_email}}
    {{$user->ref3_phone}}
    {{$user->personal_statement}}


    --}}



