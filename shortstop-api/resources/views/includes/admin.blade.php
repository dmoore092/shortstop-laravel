<h1 class="display-4">Admin Dashboard</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="/images/{{$player->profile_image}}" class="card-img" alt="Player Profile Image">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Admin Panel</h5>
                <p class="card-text">
                    {{$user->name}} <br>
                    <a href="/players/{{$player->id}}/edit">Edit My Profile</a>
                    <br>
                    <a href="/players/{{$player->id}}">View My Profile</a>
                </p>
            </div>
            </div>
        </div>
    </div>
