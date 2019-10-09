@extends('layouts.app')

@section('title', 'Athletic Prospects | Players')

@section('content')

<div class="jumbotron col-md-7 ml-auto mr-auto">
    <h1 class="display-4">Players</h1>
        {!! Form::open() !!}
            {{{Form::label('football', 'Football')}}}
            {{Form::checkbox('football', 'football', false, array('id'=>'football'))}}
            {{-- {{Form::submit('DELETE PROFILE', ['class' => 'btn btn-danger'])}} --}}
        {!! Form::close() !!}
  <p class="lead"></p>
  <hr class="my-4">
    <div class="row d-flex justify-content-around">
        @if(count($users) > 0)
            @foreach($users as $user)
                @if($user->role == 'player')
                    <a href="/players/{{$user->id}}" style="text-decoration: none !important;">
                        <div class="card mb-3 {{$user->sport}} col-sm-12 col-md-6">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://shortstop-userimages.s3.amazonaws.com/{{$user->profile_image}}" class="card-img ml-3 mt-4" alt="Player Profile Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body ml-3">
                                        <h5 class="card-title">{{ $user->name }}</h5>
                                        <p class="card-text">
                                            Sport: {{$user->sport}}
                                            <br/>
                                            Position: {{$user->primary_position}}
                                            <br/>
                                        <p class="card-text">Commitment: {{$user->commitment}}</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
        @else
            <h1>No Players Found</h1>
        @endif
    </div>

  <hr class="my-4">
  {{$users->links()}}
  @include('includes.footer')

</div>
@endsection

