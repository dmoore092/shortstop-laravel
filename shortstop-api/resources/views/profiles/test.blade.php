<div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>


    <div class="card mb-3 col-sm-6" style="max-width: 540px;">
        @if(count($players) > 0)
            @foreach($players as $player)
                <div class="row ">
                    <div class="col-md-4">
                        <img src="/images/{{$player->profile_image}}" class="card-img" alt="Player Profile Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            {{-- <h5 class="card-title">My Profile</h5> --}}
                            <p class="card-text">
                                <h3><a href="/players/{{$player->id}}">{{ $player->name }}</a></h3>
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
            @endforeach
        {{$players->links()}}
        @else 
        <p>No Players Found</p>
    @endif
    </div>