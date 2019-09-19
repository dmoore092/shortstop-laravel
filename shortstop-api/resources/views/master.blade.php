<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Athletic Prospects</title>
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--icon library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


        <link rel="stylesheet" type="text/css" href="assets/javascript/jqueryui-1.12.1/jquery-ui.css" />
        <script type="text/javascript" src="assets/javascript/jqueryui-1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="assets/javascript/jPaginate/src/jQuery.paginate.js"></script>
        <script src="assets/javascript/inputmask/dist/jquery.inputmask.js"></script>
        <meta http-equiv="content-type" content="text/php; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Dale Moore">
        <meta name="description" content="We strive to provide High School and JUCO athletes the tools to successfully promote themselves to college coaches by assisting athletes through the recruiting process."/>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        @include('includes.header')
        {{-- @include('includes.messages') --}}
        @yield('content')
            <hr />
            <footer>
                <div id="foot-wrapper">
                    <span id="follow">Follow Us!</span>
                    <div class="social-media" id="sm-footer">
                        <a href="http://www.facebook.com/Athletic-Prospects-191313784947225" target="_blank" class="fa fa-facebook"></a>
                        <a href="http://www.twitter.com/A_Prospects" target="_blank" class="fa fa-twitter"></a>
                        <a href="http://www.instagram.com/athleticprospects" target="_blank" class="fa fa-instagram"></a>
                        <a href="mailto:kprestano@athleticprospects.com" class="fa fa-envelope"></a>
                    </div> <!-- end of social-media -->
                </div> <!-- end of foot-wrapper -->
                <div>
                    <p id="copyright">&copy; 2018-2019 Athletic Prospects</p>
                </div>
            </footer>
        </div><!-- end of body-main -->
        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace( 'summary-ckeditor' );
        </script>
    </body>
</html>
