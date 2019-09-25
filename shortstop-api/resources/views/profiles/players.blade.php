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
        @if(count($players) > 0)
            @foreach($players as $player)
                @if($player->role == 'player')
                    <div class="card col-lg-3 mb-4 {{$player->sport}}"  style="max-width: 15rem;">
                        <img src="/images/{{$player->profile_image}}" class="card-img" alt="Player Profile Image">
                        <div class="card-body">
                        <h5 class="card-title"><a href="/players/{{$player->id}}">{{ $player->name }}</a></h5>
                            <p class="card-text">
                                Sport: {{$player->sport}}
                                <br>
                                Position: {{$player->primary_position}}
                                <br>
                                <p class="card-text">{{$player->commitment}}</p>
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <h1>No Players Found</h1>
        @endif
    </div>

  <hr class="my-4">
  {{$players->links()}}
  @include('includes.footer')

</div>
@endsection

