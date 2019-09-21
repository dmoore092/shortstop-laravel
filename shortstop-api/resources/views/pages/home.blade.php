@extends('layouts.app')

@section('title', 'Athletic Prospects | Home')
@section('content')
<div class="jumbotron col-md-7 ml-auto mr-auto">
        <h1 class="display-4">Athletic Prospects</h1>
        <p class="lead">Our mission is to build a strong community between Athletes and Coaches to create positive outcomes in life and in the 
                        game for all involved. <br />
                <br />
                We strive to provide High School and JUCO athletes the tools to successfully promote themselves to college coaches by assisting 
                athletes through the recruiting process. Our goal is to be a mentor-leader to student-athletes to teach them the importance of 
                academics and athletics while showing strong leadership characteristics to be successful on and off the playing field
        </p>
        <hr class="my-4">
        <a href = "register.php"><img class="img-fluid" src = "/images/mainbanner.jpg" alt="main banner" /></a>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        {{-- <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p> --}}
      </div>
</div>
@endsection
