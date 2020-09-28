<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>@yield('title')</title>
        <script>window._wca = window._wca || [];</script>

	    <link rel='stylesheet' id='sb_instagram_styles-css'  href='https://athleticprospects.com/wp-content/plugins/instagram-feed/css/sb-instagram-2-2.min.css?ver=2.4.7' type='text/css' media='all' />
        <link rel='stylesheet' id='wp-block-library-css'  href='https://athleticprospects.com/wp-includes/css/dist/block-library/style.min.css?ver=5.5.1' type='text/css' media='all' />
        <style id='wp-block-library-inline-css' type='text/css'>.has-text-align-justify{text-align:justify;}</style>

        <link rel='stylesheet' id='advance-fitness-gym-font-css'  href='//fonts.googleapis.com/css?family=Ubuntu%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%7CPT+Sans%3A300%2C400%2C600%2C700%2C800%2C900%7CRoboto%3A400%2C700%7CRoboto+Condensed%3A400%2C700%7COpen+Sans%7COverpass%7CMontserrat%3A300%2C400%2C600%2C700%2C800%2C900%7CPlayball%3A300%2C400%2C600%2C700%2C800%2C900%7CAlegreya%3A300%2C400%2C600%2C700%2C800%2C900%7CJulius+Sans+One%7CArsenal%7CSlabo%7CLato%7COverpass+Mono%7CSource+Sans+Pro%7CRaleway%7CMerriweather%7CDroid+Sans%7CRubik%7CLora%7CUbuntu%7CCabin%7CArimo%7CPlayfair+Display%7CQuicksand%7CPadauk%7CMuli%7CInconsolata%7CBitter%7CPacifico%7CIndie+Flower%7CVT323%7CDosis%7CFrank+Ruhl+Libre%7CFjalla+One%7COxygen%7CArvo%7CNoto+Serif%7CLobster%7CCrimson+Text%7CYanone+Kaffeesatz%7CAnton%7CLibre+Baskerville%7CBree+Serif%7CGloria+Hallelujah%7CJosefin+Sans%7CAbril+Fatface%7CVarela+Round%7CVampiro+One%7CShadows+Into+Light%7CCuprum%7CRokkitt%7CVollkorn%7CFrancois+One%7COrbitron%7CPatua+One%7CAcme%7CSatisfy%7CJosefin+Slab%7CQuattrocento+Sans%7CArchitects+Daughter%7CRusso+One%7CMonda%7CRighteous%7CLobster+Two%7CHammersmith+One%7CCourgette%7CPermanent+Marker%7CCherry+Swash%7CCormorant+Garamond%7CPoiret+One%7CBenchNine%7CEconomica%7CHandlee%7CCardo%7CAlfa+Slab+One%7CAveria+Serif+Libre%7CCookie%7CChewy%7CGreat+Vibes%7CComing+Soon%7CPhilosopher%7CDays+One%7CKanit%7CShrikhand%7CTangerine%7CIM+Fell+English+SC%7CBoogaloo%7CBangers%7CFredoka+One%7CBad+Script%7CVolkhov%7CShadows+Into+Light+Two%7CMarck+Script%7CSacramento%7CUnica+One%7CKarla%3A400%2C400i%2C700&#038;ver=5.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='bootstrap-css'  href='https://athleticprospects.com/wp-content/themes/advance-fitness-gym/css/bootstrap.css?ver=5.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='advance-fitness-gym-basic-style-css'  href='https://athleticprospects.com/wp-content/themes/advance-fitness-gym/style.css?ver=5.5.1' type='text/css' media='all' />
        <style id='advance-fitness-gym-basic-style-inline-css' type='text/css'>
            a.button, .account a i, .categry-title, .product-category::-webkit-scrollbar-thumb:hover, #fitness-togym .wlcm-hr, .second-border a:hover,
            .copyright, #footer .tagcloud a:hover, #sidebar h3, #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, .meta-nav:hover,
            .tags p a:hover,#fitness-togym .know-btn a.blogbutton-small:hover,.read-moresec a.button{background-color: #181e96;} #footer h3, h1.entry-title,
            h1.page-title, #slider .inner_carousel h1,#header .top-contact i, #footer h3.widget-title a, #footer li a:hover, .primary-navigation a:hover, 
            .primary-navigation ul ul a, h2.entry-title, h2.page-title, .primary-navigation ul ul li:hover > a, .primary-navigation ul li a:hover,
            .metabox a:hover, #sidebar ul li a:hover,.tags i{color: #181e96;}.page-box{border-bottom-color: #181e96;}.primary-navigation ul ul{border-top-color: #181e96;}
            .second-border a:hover,.tags p a:hover,
            @media screen and (max-width:1000px) {#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a, #contact-info {
                background-image: linear-gradient(-90deg, #000 0%, #181e96 120%);
                    }}body{max-width: 100%;}.page-template-custom-home-page .middle-header{width: 97.3%}.fitnes-post{margin-top: 0%; padding:0;}#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{text-align:center; left:25%; right:25%;}#slider img{opacity:0.7}.new-text .second-border a, #comments .form-submit input[type="submit"], #fitness-togym .know-btn a.blogbutton-small{padding-top: px; padding-bottom: px; padding-left: px; padding-right: px; display:inline-block;}.new-text .second-border a, #comments .form-submit input[type="submit"], #fitness-togym .know-btn a.blogbutton-small{border-radius: px;}@media screen and (max-width:575px) {.fixed-header{position:static;} }@media screen and (max-width:575px) {#slider{display:none;} }@media screen and (max-width:575px) {#scroll-top{display:block !important;} }@media screen and (max-width:575px) {#sidebar{display:block;} }@media screen and (max-width:575px) {#loader-wrapper{display:block;} }.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin,.fitness-single-post{background-color: #fff;}.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce div.product form.cart .button{padding-top: 10px; padding-bottom: 10px;}.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce div.product form.cart .button{padding-left: 16px; padding-right: 16px;}.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{border-radius: 0px;}.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{padding-top: 0px !important; padding-bottom: 0px !important;}.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{padding-left: 0px !important; padding-right: 0px !important;}.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{border-radius: 0px;}.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{box-shadow: 0px 0px 0px #eee;}.copyright p{font-size: 15px;}.copyright{padding-top: 15px; padding-bottom: 15px;}#footer{background-color: #162b53;}#scroll-top .fas{font-size: 22px;}#slider img{height: px;}
        </style>
        <style>.custom-logo {height: 133px;max-height: 250px;max-width: 250px;width: 174px;}</style>
        <link rel='stylesheet' id='advance-fitness-gym-customcss-css'  href='https://athleticprospects.com/wp-content/themes/advance-fitness-gym/css/custom.css?ver=5.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='font-awesome-css'  href='https://athleticprospects.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
        <!--[if IE]>
        <link rel='stylesheet' id='advance-fitness-gym-ie-css'  href='https://athleticprospects.com/wp-content/themes/advance-fitness-gym/css/ie.css?ver=5.5.1' type='text/css' media='all' />
        <![endif]-->
        <script type='text/javascript' src='https://athleticprospects.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
        <script type='text/javascript' src='https://athleticprospects.com/wp-content/themes/advance-fitness-gym/js/SmoothScroll.js?ver=5.5.1' id='SmoothScroll-jquery-js'></script>
        <script type='text/javascript' src='https://athleticprospects.com/wp-content/themes/advance-fitness-gym/js/custom.js?ver=5.5.1' id='advance-fitness-gym-customscripts-jquery-js'></script>
        <script type='text/javascript' src='https://athleticprospects.com/wp-content/themes/advance-fitness-gym/js/bootstrap.js?ver=5.5.1' id='bootstrap-js'></script>
        
        <link rel="https://api.w.org/" href="https://athleticprospects.com/wp-json/" /><link rel="alternate" type="application/json" href="https://athleticprospects.com/wp-json/wp/v2/pages/155" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://athleticprospects.com/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://athleticprospects.com/wp-includes/wlwmanifest.xml" /> 
        <link rel="canonical" href="https://athleticprospects.com/fitness-programs/" />
    </head>
<body>
    <div id="app">
        <header role="banner">
            <a class="screen-reader-text skip-link" href="#maincontent">Skip to content</a>
            <div id="header"> 
                <div class="middle-header close-sticky ">
                    <div class="container">
                        <div class="row">
                            <div class="logo col-lg-3 col-md-9 col-9">
                                <div class="site-logo">
                                    <a href="https://athleticprospects.com/" class="custom-logo-link" rel="home">
                                        <img width="2560" height="1952" 
                                            src="https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?fit=2560%2C1952&amp;ssl=1" 
                                            class="custom-logo" alt="" 
                                            srcset="https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?w=2560&amp;ssl=1 2560w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?resize=300%2C229&amp;ssl=1 300w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?resize=1024%2C781&amp;ssl=1 1024w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?resize=768%2C586&amp;ssl=1 768w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?resize=1536%2C1171&amp;ssl=1 1536w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?resize=2048%2C1562&amp;ssl=1 2048w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?resize=600%2C458&amp;ssl=1 600w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?w=1280&amp;ssl=1 1280w, https://i1.wp.com/athleticprospects.com/wp-content/uploads/2020/07/cropped-8009ECF7-D404-4366-B9DC-A5D5CD972CF2.png?w=1920&amp;ssl=1 1920w" sizes="(max-width: 2560px) 100vw, 2560px" />
                                    </a>
                                </div>
                                <p class="site-description">Strength and conditioning for next level athletes</p>
                            </div><!-- logo -->
                            <div class="col-lg-9 col-md-3 col-3 ">
                                <div class="main-menu">
                                    <div class="toggle-menu responsive-menu">
                                        <button role="tab" class="mobiletoggle"><i class="fas fa-bars"></i><span class="screen-reader-text">Open Menu</span></button>
                                    </div><!-- toggle-menu -->
                                <div id="menu-sidebar" class="nav sidebar">
                                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="Top Menu">
                                    <div class="main-menu-navigation clearfix">
                                        <ul id="menu-main-menu" class="clearfix mobile_nav">
                                            <li id="menu-item-99" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-99">
                                                <a href="https://athleticprospects.com">Home</a>
                                            </li>
                                            <li id="menu-item-165" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-165">
                                                <a href="https://athleticprospects.com/training/">Training</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169"><a href="https://athleticprospects.com/middle-school-training-programs/">Middle School Training Programs</a></li>
                                                    <li id="menu-item-168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168"><a href="https://athleticprospects.com/hs-college-pro-training-programs-for-baseball-softball/">HS | College | Pro Training Programs for Baseball &#038; Softball</a></li>
                                                    <li id="menu-item-167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a href="https://athleticprospects.com/high-school-training-programs-for-multi-sport-athletes/">High School Training Programs for Multi-Sport Athletes</a></li>
                                                    <li id="menu-item-198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a href="https://athleticprospects.com/team-training/">Team Training</a></li>
                                                    <li id="menu-item-166" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-155 current_page_item menu-item-166"><a href="https://athleticprospects.com/fitness-programs/" aria-current="page">PresTheLimit Fitness</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100">
                                                <a href="https://athleticprospects.com/about-us/">About Us</a>
                                            </li>
                                            <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101">
                                                <a href="https://athleticprospects.com/get-in-touch/">Get In Touch</a>
                                            </li>
                                            <li id="menu-item-102" class="nav-item"><a class="nav-link" href="/players">BROWSE ATHLETES</a></li> 
                                            <!-- Authentication Links -->
                                            @guest
                                                <li id="menu-item-103" class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li id="menu-item-104" class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li id="menu-item-105" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-165">
                                                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="/dashboard">My Dashboard</a></li>
                                                        <li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                        </li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </li>                
                                            </div>
                                        </li>
                                             @endguest
                                        </ul>
                                    </div><!-- main-menu-navigation -->                             
                                    <div id="contact-info">
                                        <div class="contact"></div>
                                        <div class="mail"></div>
                                        <div class="socialbox">
                                            <a href="https://www.instagram.com/coachprestano/"><i class="fab fa-instagram"></i><span class="screen-reader-text">Instagram</span></a>
                                        </div>
                                    </div><!-- social-box -->
                                    <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text">Close Menu</span></a>
                                </nav>
                            </div><!-- div after logo -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- middle-header -->
            </div><!-- header -->
        </header>
        <main class="bg-dark">
            @yield('content')
        </main>
    </div><!-- app -->
    <script src="{{ asset('js/inputmasking.js')}}"></script>
</body>
</html>
