@extends('layouts.app')

@section('title', 'Athletic Prospects | Players')

@section('content')

<div class="jumbotron col-md-7 ml-auto mr-auto">
  <h1 class="display-4">Players</h1>
  <p class="lead"></p>
  <hr class="my-4">
    
    <div class="row">
        @foreach($players as $player)
        <div class="card col-lg-2 col-md-3 col-sm-4 col-6" style="max-width: 20rem;">
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
        @endforeach
    </div>

  <hr class="my-4">
  {{$players->links()}}
  @include('includes.footer')
 
</div>
@endsection

