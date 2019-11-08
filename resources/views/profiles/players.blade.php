@extends('layouts.app')

@section('title', 'Athletic Prospects | Players')

@section('content')

<div class="jumbotron col-md-11 ml-auto mr-auto">
    <h1 class="display-4">Players</h1>
    <hr class="my-4">
    <div class="row  table-responsive">
        @if(count($users) > 0)
            <table id="players-table" class="table table-striped table-bordered " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>School</th>
                        <th>Sport</th>
                        <th>Class Of</th>
                        <th>Position</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($users as $user)
                @if($user->role == 'player')
                    <tr>
                        <td>
                            <a href="/players/{{$user->id}}" style="text-decoration: none !important;"> {{ $user->name }} </a>
                        </td>
                        <td>
                            {{ $user->highschool }}
                        </td>
                        <td>
                            {{ $user->sport }}
                        </td>
                        <td>
                            {{ $user->grad_year }}
                        </td>
                        <td>
                            {{ $user->primary_position }}
                        </td>
                    </tr>
                @endif
            @endforeach
                </tbody>
            </table>
        @else
            <h1>No Players Found</h1>
        @endif
    </div>

  <hr class="my-4">
  {{$users->links()}}
  @include('includes.footer')

</div>

@endsection

{{--<div class="container col-sm-12 col-md-5">--}}
{{--    <div class="card mb-3 mt-3 {{$user->sport}} ">--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col-md-4">--}}
{{--                <a href="/players/{{$user->id}}" style="text-decoration: none !important;">--}}
{{--                    <img src="https://shortstop-userimages.s3.amazonaws.com/{{$user->profile_image}}" style="min-width:150px;max-width: 260px;" class="card-img ml-3 mt-4" alt="Player Profile Image">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card-body ml-3">--}}
{{--                    <a href="/players/{{$user->id}}" style="text-decoration: none !important;">--}}
{{--                        <h5 class="card-title">{{ $user->name }}</h5>--}}
{{--                    </a>--}}
{{--                    <p class="card-text">--}}
{{--                        Sport: {{$user->sport}}--}}
{{--                        <br/>--}}
{{--                        Position: {{$user->primary_position}}--}}
{{--                        <br/>--}}
{{--                    </p>--}}
{{--                    @if($user->commitment == null)--}}
{{--                        --}}{{--                                        provides space for commitment being null--}}
{{--                        <br>--}}
{{--                    @else--}}
{{--                        <p class="card-text">Commitment: {{$user->commitment}}</p>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}