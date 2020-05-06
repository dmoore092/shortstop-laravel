@extends('layouts.app')

@section('title', 'Athletic Prospects | Home')
@section('content')

<div class="bg-dark wrapper">
  <iframe allowfullscreen type='text/html' height="900px" frameBorder="0" src="https://www.youtube.com/embed/ImtZ5yENzgE"></iframe>
</div>

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://ree.us19.list-manage.com/subscribe/post?u=45926d2b59818d4eff683fd87&amp;id=3feaa35502" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<h2>Subscribe to our newsletter!</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
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
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[19]='MMERGE19';ftypes[19]='text';fnames[28]='MMERGE28';ftypes[28]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


<div class="jumbotron col-md-7 ml-auto mr-auto">
  <h1 class="display-4">{!! html_entity_decode($post->header) !!}</h1>
  <hr class="my-4">
  <p class="lead">{!! html_entity_decode($post->text)!!}</p>
  <hr class="my-4">
  <a href = "register.php"><img class="img-fluid" src = "/images/mainbanner.jpg" alt="main banner" /></a>
  <hr class="my-4">
  @include('includes.footer')
</div>

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