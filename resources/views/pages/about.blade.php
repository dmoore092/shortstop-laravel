@extends('layouts.app')

@section('title', 'Athletic Prospects | About Us')

@section('content')
<div class="bg-dark">
  <div class="jumbotron col-md-7 ml-auto mr-auto mt-5">
    <h1 class="display-4">About Us</h1>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 class="display-5">{!! html_entity_decode($post->header) !!}</h2>
          <p class="lead">{!! html_entity_decode($post->text) !!}</p>
          <h2>Any Questions?</h2>
          <p>Email us at <a href="mailto:Kprestano@athleticprospects.com">Kprestano@athleticprospects.com</a></p>
        </div>
        <div class="col-4">
          <div class="card bg-dark text-white mt-4">
          <a href="/conditioning"><img class="card-img" src="/images/strengthConditioning.PNG" alt="Strength and Conditioning"></a>
          </div>
          <div class="card bg-dark text-white mt-4">
            <a href="/drills"><img class="card-img" src="/images/baseball-softball_drills.PNG" alt="Baseball/Softball Drills"></a>
          </div>
          <div class="card bg-dark text-white mt-4">
          <a href="/recruiting"><img class="card-img" src="/images/recruiting.PNG" alt="College Recruiting"></a>
          </div>
          <div class="card bg-dark text-white mt-4">
          <a href="/performance"><img class="card-img" src="/images/mentalPerformance.PNG" alt="Mental Performance"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    @include('includes.footer')
@endsection
