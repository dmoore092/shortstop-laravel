@extends('layouts.app')

@section('title', 'Athletic Prospects | Home')
@section('content')
<!-- YouTube video -->
<div class="wrapper ">
  <iframe allowfullscreen type='text/html' height="900px" frameBorder="0" src="https://www.youtube.com/embed/ImtZ5yENzgE?autoplay=1"></iframe>
</div>

<!-- mailchimp sign up form -->
<div class="bg-white">
  <div class="col-md-7 pt-5 ml-auto mr-auto">
    <div id="mc_embed_signup">
      <form action="https://ree.us19.list-manage.com/subscribe/post?u=45926d2b59818d4eff683fd87&amp;id=3feaa35502" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <h2>Subscribe to our newsletter!</h2>
          <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
          <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="mc-field-group">
            <label for="mce-FNAME">First Name </label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-LNAME">Last Name </label>
            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-MMERGE19">Player's Twitter Name </label>
            <input type="text" value="" name="MMERGE19" class="" id="mce-MMERGE19">
          </div>
          <div class="mc-field-group">
            <label for="mce-MMERGE28">Instagram </label>
            <input type="text" value="" name="MMERGE28" class="" id="mce-MMERGE28">
          </div>
          <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_45926d2b59818d4eff683fd87_3feaa35502" tabindex="-1" value=""></div>
        <div class="clear mx-auto d-block"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
    </form>
  </div>
  </div>
</div>


<!-- most recent blogs -->
<div class="bg-dark pb-5">
  <div class="container">
    <h2 class="text-white text-center pt-4">Latest from Athletic Prospects</h2>
    <div class="row bg-white">
      <div class="col-sm">
        <img class="w-75" src = "/images/black.JPG" alt="Athletic Prospects Logo"/>
      </div>
      <div class= "col-sm  ml-auto mr-auto pt-5">
        <div class="bg-white">
        @foreach($blogs as $blog)
          <div >
            <h4 class="text-center"><a href="/blog#{{ $blog->id }}" class="text-black">{{$blog->title}}</a></h4>
            @if($blog->podcast != null or $blog->podcast != "")
            <p>
              <audio controls class="mx-auto d-block">
                <source src="https://shortstop-userimages.s3.amazonaws.com/{{$blog->podcast}}" type="audio/mpeg" >
                Your browser does not support the audio element.
              </audio>
            </p>
            @endif
          </div>
          <hr class="my-4">
        @endforeach
        </div>
      <h5 class="text-right pb-4 pt-5"><a href="/blog">View more >></a></h5>
      </div>
    </div>
  </div>
</div>

<div class="bg-white">
<div class="container">
  <div class="row">
    <div class="col-sm">
      <img src="https://via.placeholder.com/555x350" alt="image of keith">
    </div>
    <div class="col-sm">
      <h4 class="text-center pt-5 profile-labels">About Keith Prestano</h4>
      <h5 class="text-center">Coach Prestano is...</h5>
      <p class="text-center">
        I am a former college baseball coach and now owner of the Interstate Collegiate Baseball League as well as partner in the high school baseball league, 
        Upstate Baseball League. I believe that your mindset shapes your future. 
        As someone that completely shifted my mindset from my early years, I know that this is the key to success. 
        I support athletes through player development, the college recruiting process, and creating a strong foundation in order to be a highly successful student athlete.
      </p>
      <!-- <p class="text-center">A former collegiate athlete and coach, a consultant, speaker, and student-athlete peak performance coach.</p>
      <h5 class="text-center profile-labels">Learn, Lead, Empower, Impact</h5>
      <p class="text-center">
        These four core aspects were developed over time through my own life experiences. 
        Growing up in New York City with three siblings and a single father, life was not always consistent or easy. 
        As a competitive athlete, all through high school and college, sports became my outlet- guiding me to the person I am today.<br /><br />
        I am a former college baseball coach and now owner of the Interstate Collegiate Baseball League as well as partner in the high school baseball league, 
        Upstate Baseball League. I believe that your mindset shapes your future. As someone that completely shifted my mindset from my early years, 
        I know that this is the key to success. I support athletes through player development, the college recruiting process, 
        and creating a strong foundation in order to be a highly successful student athlete.
      </p>
      <h6 class="text-center font-weight-bold">
        <i class="font-weight-bold profile-labels">
          My ultimate goal as your mentor is to push you to your highest potential as a student athlete by focusing on the four key pillars to your success 
          which will lead to substantial opportunities.
        </i>
      </h6> -->
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
    <h5 class="text-center pt-5">About Athletic Prospects</h5>
    <p class="text-center">
      Welcome to Athletic Prospects, where our mission is to provide you the tools and strategies to become a Next Level Athlete. 
      A Next Level athlete has the four key skills necessary to stand out as a player: a consistent <a href="/conditioning">strength training plan</a>, 
      a solid progression in their <a href="/recruiting">college recruiting</a>, 
      key practices for <a href="/drills">skill development</a> and ongoing work on their <a href="/performance">mental performance</a>.
      </p>
      <!-- <p >
        <span class="profile-labels">Welcome to Athletic Prospects,</span> where our mission is to provide you the tools and strategies to become a Next Level Athlete. 
        A Next Level athlete has the four key skills necessary to stand out as a player: a consistent strength training plan, 
        a solid progression in their college recruiting, key practices for skill development and ongoing work on their mental performance. <br />

        <span class="profile-labels">A consistent strength training plan</span> sets you up to be in the best possible shape for your sport. 
        Consistent training is imperative to your development as an athlete in order to progress as a player 
        and to be prepared for all of the physical demands that come from being a student athlete.<br />

        <span class="profile-labels">A solid progression in your college recruitment</span> will help to bridge the gap between you, as the player, 
        and the college coaches of your desired schools. The goal is to put you in the best possible position, ahead of time, 
        in order to increase your exposure and opportunities for your future as a collegiate athlete.<br />

        <span class="profile-labels">Your skill development</span> as an athlete shows your dedication to the sport and works to constantly challenge you and improve your skills as a player.<br /> 

        <span class="profile-labels">Mental performance</span> is often the piece that most athletes are missing. This elite mindset will keep you on track with your goals, 
        improve you as a player and teammate and will take you to that next level as a successful athlete. 
        Many athletes are missing the strong mindset that allows them to push through challenging games, brush off errors, 
        pull from your confidence when it’s needed and support and motivate your teammates to create a winning culture.<br />

        <span class="profile-labels">This platform</span> will give you the ultimate tools and key tips that you need to progress as a collegiate player. 
        We offer every athlete a FREE player profile in order to increase their exposure and provide them this vital 
        step in progressing in the college recruiting process. Here, you will also find key tips and posts created by 
        myself and other coaches to support you in your growth as an athlete. 
      </p> -->
    </div>
    <div class="col-sm">
    <img src="https://via.placeholder.com/555x350" alt="athletic prospects image">
    </div>
  </div>
</div>

<div class="bg-dark pb-5">
  <h3 class="text-center text-white pt-5">Athletic Prospects: Core Values</h3>
  <div class="row">
    <div class="mx-auto d-block">
      <img src="https://via.placeholder.com/350x150" alt="core value 1">
      <img src="https://via.placeholder.com/350x150" alt="core value 2">
      <img src="https://via.placeholder.com/350x150" alt="core value 3">
      <img src="https://via.placeholder.com/350x150" alt="core value 4">
      <img src="https://via.placeholder.com/350x150" alt="core value 5">
    </div>
  </div>
</div>
</div>


@include('includes.footer')
@endsection


{{--<div class="jumbotron col-md-7 ml-auto mr-auto">--}}
{{--    <h1 class="display-4">Athletic Prospects</h1>--}}
{{--    <hr class="my-4">--}}
{{--    <p class="lead">Our mission is to build a strong community between Athletes and Coaches to create positive outcomes in life and in the--}}
{{--        game for all involved. <br />--}}
{{--        <br />--}}
{{--        We strive to provide High School and JUCO athletes the tools to successfully promote themselves to college coaches by assisting--}}
{{--        athletes through the recruiting process. Our goal is to be a mentor-leader to student-athletes to teach them the importance of--}}
{{--        academics and athletics while showing strong leadership characteristics to be successful on and off the playing field--}}
{{--    </p>--}}
{{--    <hr class="my-4">--}}
{{--    <a href = "register.php"><img class="img-fluid" src = "/images/mainbanner.jpg" alt="main banner" /></a>--}}
{{--    <hr class="my-4">--}}