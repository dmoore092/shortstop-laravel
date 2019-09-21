@extends('layouts.app')

@section('title', 'Athletic Prospects | About Us')

@section('content')
<div class="jumbotron col-md-7 ml-auto mr-auto">
        <h1 class="display-4">About Us</h1>
        <hr>
        <h2 class="display-5">Our Mission</h2>
        <p class="lead">

            Our mission is to build a strong community between Athletes and Coaches to create positive outcomes in life and in the game for all involved.
            <br><br>
            We collaborate with positive coaches to provide young athletes the tools they need to be successful in both their way of living and in the game. 
            We believe Great Coaches transform average players into great players. We are here to serve you! The experiences and knowledge from great coaches 
            is priceless.
            <br>  <br>
            Athletes deserve a top-notch experience while growing within the sport and be able to promote themselves to college coaches. 
            College coaches are looking for the commitment of the player and that's where we come into play. Our goal is to guide each 
            player in bridging the gap between high school and collegiate athletics.
            <br>  
            Our focus is on the student-athletes success to see them grow and pass down their experiences to future generations. 
            This is not a one-way street; we are here to go above and beyond for YOU!
            <br><br>
            The Athletic Prospects team teaches you to grow into responsible and hardworking adults by giving you the skills you need to achieve your dreams. 
        </p>
        <h2>Any Questions?</h2>
        <p>Email us at <a href="mailto:Kprestano@athleticprospects.com">Kprestano@athleticprospects.com</a></p>
        {{-- <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p> --}}
<div>
    <hr class="my-4">
    @include('includes.footer')
@endsection
