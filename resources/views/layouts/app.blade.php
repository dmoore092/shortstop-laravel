<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js" defer></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script> --}}

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    {{-- <script src="{{asset('js/inputmask/dist/jquery.inputmask.js') }}"></script> --}}
    <script src="/js/inputmask/dist/jquery.inputmask.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/r-2.2.3/datatables.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/r-2.2.3/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--icon library -->

    <meta name="author" content="Dale Moore">
    <meta name="description" content="We strive to provide High School and JUCO athletes the tools to successfully promote themselves to college coaches by assisting athletes through the recruiting process."/>
</head>
<body>
    <div id="app">
        <nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="social-media" >
                            <span id="followUS">Follow US </span>
                            <a href="http://www.facebook.com/Athletic-Prospects-191313784947225" target="_blank" class="fa fa-facebook"></a>
                            <a href="http://www.twitter.com/A_Prospects" target="_blank" class="fa fa-twitter"></a>
                            <a href="http://www.instagram.com/athleticprospects" target="_blank" class="fa fa-instagram"></a>
                            <a href="mailto:kprestano@athleticprospects.com" class="fa fa-envelope"></a>
                        </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="/players">Browse Athletes</a></li>
                                <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                        </ul>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/dashboard">My Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
{{--        <div class="header-search">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col"></div>--}}
{{--                    <div class="col"></div>--}}
{{--                    <div class="col-md-auto col-sm-8" style="height:45px;">--}}
{{--                        <form action='results.php' method='POST' id="search-form" class="form-inline">--}}
{{--                            <div class="form-row">--}}
{{--                                <div class="col-auto">--}}
{{--                                    <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="First or Last Name" name="search">--}}
{{--                                    <input class="btn btn-default" id="header-search-btn" type="submit" name="search-btn" value="Search">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <main>
            <div class="logo-home-home">
            <div class="logo-home ">
                    <!-- <a href = "/"><img class="img-fluid mx-auto d-block w-25 logo" src = "/images/newLogoCrop.png" alt="Athletic Prospects Logo"/></a> -->
                    <a href = "/"><img class="w-25 logo" src = "/images/newLogoCrop.png" alt="Athletic Prospects Logo"/></a>
                </div>
            </div>


            
            
            @yield('content')

        </main>
    </div>
    <script src="{{ asset('js/inputmasking.js')}}"></script>
</body>
</html>
