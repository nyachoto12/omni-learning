<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Omni Learning Zimbabwe</title>
    <meta name="description"
        content="Zimbabwean’s First fully equipped and personalized online learning service provider with the sole aim of providing top quality full ZIMSEC and Cambridge syllabus education assistance to help students excel.">
    <meta name="keywords"
        content="OMNI Learning, Online Education Zimbabwe, Online Tutors, Online Tutors Zimbabwe, Zimsec, Online Skills Zimbabwe">
    <meta property="og:url" content="https://omni-learning.com" />
    <meta property="og:type" content="WebPage" />
    <meta property="og:site_name" content="Omni Learning Zimbabwe" />
    <meta property="og:image" content="img/og-images/home.jpg" />
    <meta property="og:image:height" content="900" />
    <meta property="og:image:width" content="1200" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        a:hover {
            color: #38c172 !important;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;
            font-size: 1rem;
            line-height: 1.5;
            color: #212529;
            background-color: #fff
        }

    </style>
</head>

<body class="antialiased">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light align-items-center justify-content-between fixed-top bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img height="60px" src="{{ asset('img/logo.png') }}" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="/"><i class="fas fa-home text-success"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Courses') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Find Tutor') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Library') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('News') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('About Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Contact Us') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item btn">
                            <a class="nav-link" href="#"><i class="fas fa-search text-success"></i></a>
                            {{-- <div class="togglesearch">
                                    <input type="text" placeholder=""/>
                                    <input type="button" value="Search"/>
                                </div> --}}
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('login') }}"><button
                                            class="btn btn-outline-success">Login</button></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link text-light " href="{{ route('register') }}"><button
                                            class="btn btn-success">Sign Up</button></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle mt-2" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- Banner Section ---START --}}

    <div class="shadow image-cover hero_banner " style="background:rgba(0,219,6,0.1); ">
        <div class="container">
            <!-- Type -->
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="banner-search-2 transparent animate__animated animate__zoomIn animate__delay-1">
                        <h1 class="big-header-capt cl_2 mb-0">Learn on your<br><span>schedule</span></h1>
                        <p class="text-justify">
                            Study any topic, anytime. Choose from thousands of expert-led courses now.
                        </p>
                        <div class="shadow_high">
                            <div class="search_hero_wrapping">
                                <div class="row d-flex justify-content-start">
                                    <div class="col-md-6">

                                        <a class="btn btn-modern green_dark" href="#">
                                            Register Now
                                            <span><i class="fa fa-chalkboard-teacher"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="circle_flixio">
                        <img class="rotate img-fluid" src="img/circle-rotate.png" alt="">
                    </div>

                    <div class="circle_flixio">
                        <img class="animate__animated animate__zoomIn img-fluid" src="img/circle.png" alt="">
                    </div>


                    <div class="flixio">
                        <img class=" hero-img animate__animated animate__pulse animate__delay-1s img-fluid"
                            src="img/hero.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- Banner Section ---END --}}
    {{-- Featured Courses----START --}}
    <section class="min-sec">
        <div class="container">

            <div class="wow animate__animated animate__zoomIn section-title">
                <h2>Most Popular Courses</h2>
                <div class="bar"></div>

                <ul class="nav nav-tabs side-cates justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-item nav-link" id="home-tab" data-toggle="tab" href="#content-tabs" role="tab"
                            aria-controls="home" onclick="showtab('16')" aria-selected="true">Professional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" id="home-tab" data-toggle="tab" href="#content-tabs" role="tab"
                            aria-controls="home" onclick="showtab('3')" aria-selected="true">O
                            Level</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" id="home-tab" data-toggle="tab" href="#content-tabs" role="tab"
                            aria-controls="home" onclick="showtab('6')" aria-selected="true">Skills
                            Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" id="home-tab" data-toggle="tab" href="#content-tabs" role="tab"
                            aria-controls="home" onclick="showtab('8')" aria-selected="true">Languages</a>
                    </li>
                </ul>
            </div>



        </div>
    </section>
    {{-- Featured Courses ---END --}}
    {{-- Category Start --}}
    <section class="bg-light">
        <div class="container">
            <div class="wow animate__animated animate__zoomIn section-title">
                <h2>Featured Courses</h2>
                <div class="bar"></div>
            </div>

            <div class="row">
                <div class="p-0 col-lg-6 col-md-6 col-sm-6">
                    <div class="arrow_slide three_slide-dots arrow_middle">
                        <div class="singles_items">
                            <div class="edu_cat">
                                <div class="pic">

                                    <a class="pic-main" href="course/141/entrepreneurship.html"><img
                                            src="storage/uploads/course/download.jfif-60f95bc77f12f.png"
                                            alt="Provider of business training and lessons. A logo of a consultancy firm."
                                            class="img-fluid"></a>
                                </div>
                                <div class="edu_data">
                                    <h4 class="title">
                                        <a href="course/141/entrepreneurship.html">
                                            Fundermentals of Entrepreneurs...
                                        </a>
                                    </h4>

                                    <p class="btm-10 pf-14">This course is designed to hel..</p>

                                    <div class="text-right rate">
                                        <ul>
                                            <li><a><b>Free</b></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="education_block_footer">
                                    <div class="education_block_author">
                                        <div class="path-img">
                                            <img src="img/logo-avator.jpg" class="img-fluid" alt="Omni Learning">
                                        </div>
                                        <h5>
                                            <a href="#">by M &amp; J Consultants</a>
                                        </h5>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="img-wishlist">
                                            <div class="protip-wishlist">
                                                <ul>
                                                    <li class="protip-wish-btn">
                                                        <a href="#" class="btn btn-success btn-sm" title="heart"><i
                                                                class="fa fa-heart "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="protip-btn">
                                            <a href="#" class="mx-1 btn btn-sm btn-success" title="Enroll Now">Enroll
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="p-0 col-lg-6 col-md-6 col-sm-6">
                    <div class="singles_items">
                        <div class="edu_cat">
                            <div class="pic">

                                <a class="pic-main" href="#"><img
                                        src="storage/uploads/course/coding-adults%20(2).jpg-60c75383cd3a7.png"
                                        width="700" height="500" alt="Student learning programming"
                                        class="img-fluid"></a>
                            </div>
                            <div class="edu_data">
                                <h4 class="title">
                                    <a href="#">
                                        Introduction to Programming (P...
                                    </a>
                                </h4>

                                <p class="btm-10 pf-14">This an introductory course to..</p>

                                <div>
                                    <ul>

                                        <li><a><b><i class="fa fa-dollar-sign"></i>10</b></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="education_block_footer">
                                <div class="education_block_author">
                                    <div class="path-img">
                                        <img src="img/logo-avator.jpg" class="img-fluid" alt="Omni Learning">
                                    </div>
                                    <h5>
                                        <a href="#">by Ellis Pax Mapakama</a>
                                    </h5>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="img-wishlist">
                                        <div class="protip-wishlist">
                                            <ul>
                                                <li class="protip-wish-btn">
                                                    <a href="#" class="btn btn-success btn-sm" title="heart"><i
                                                            class="fa fa-heart "></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="protip-btn">
                                        <a data-toggle="tooltip" title="Add to Cart" data-placement="top" href="#"
                                            class="mx-1 btn btn-sm btn-success">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Category End --}}
    {{-- Wht Join Us --}}
    <div class="image-cover hero_banner " style="background:rgba(0,219,6,0.1);">
        <div class="container">
            <div class="wow animate__animated animate__zoomIn section-title">
                <h2>Why Join Us</h2>
                <div class="bar"></div>
            </div>

            <!-- Type -->
            <div class="row ">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="mt-3 mb-3 wow animate__animated animate__backInLeft">
                        <h4>Expert tutors</h4>
                        <p>
                            Our expert tutors will help you excel in your studies through well-crafted and
                            personalized programs. Select your preferred expert, join live sessions, and get
                            assessed by the best.
                        </p>
                    </div>
                    <div class="mt-3 mb-3 wow animate__animated animate__backInLeft">
                        <h4>Virtual Classrooms</h4>
                        <p>
                            Join a community of other students, discuss, share information, and solve problems
                            together
                        </p>
                    </div>
                    <div class="mt-3 mb-3 wow animate__animated animate__backInLeft">
                        <h4>Track your results!</h4>
                        <p>
                            We provide a well-crafted step by step assessment process to help you track your
                            progress or the progress of your child.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="img-fluid wow animate__animated animate__backInRight " src="img/omni-why-join-us.png"
                        alt="Why Join Us">
                </div>
            </div>
        </div>
    </div>
    {{-- End Why Join Us --}}
    {{-- Articles Start --}}
    <section>
        <div class="container">
            <div class="wow animate__animated animate__zoomIn section-title">
                <h2> Recent Articles </h2>
                <div class="bar"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="singles_items wow animate__animated animate__zoomIn">
                        <div class="education_block_grid style_2">
                            <div class="education_block_thumb n-shadow">
                                <a href="#"><img src="storage/blogs/3/zhiO6eUxAw17qE.jpg" alt="course"
                                        class="card-img-top"></a>
                            </div>

                            <div class="education_block_body">
                                <h4 class="bl-title">
                                    <a href="#">
                                        A Pandemic and a solution for...
                                    </a>
                                </h4>
                            </div>

                            <div class="m-3">
                                <ul class="d-flex justify-content-between">
                                    <li>
                                        <i class="mr-2 fa fa-user"></i>by Omni Learn
                                    </li>
                                    <li>
                                        <i class="mr-2 ti-time"></i>8 months ago
                                    </li>
                                </ul>
                            </div>

                            <div class="education_block_footer">
                                <a href="#" class="btn btn-success">Continue Reading <i
                                        class="mdi mdi-chevron-double-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="singles_items wow animate__animated animate__zoomIn">
                        <div class="education_block_grid style_2">
                            <div class="education_block_thumb n-shadow">
                                <a href="#"><img src="storage/blogs/2/C3NpA5mG3H1A5O.png" alt="course"
                                        class="card-img-top"></a>
                            </div>

                            <div class="education_block_body">
                                <h4 class="bl-title">
                                    <a href="#">
                                        Great News for Teachers.
                                    </a>
                                </h4>
                            </div>

                            <div class="m-3">
                                <ul class="d-flex justify-content-between">
                                    <li>
                                        <i class="mr-2 fa fa-user"></i>by Omni Learn
                                    </li>
                                    <li>
                                        <i class="mr-2 ti-time"></i>8 months ago
                                    </li>
                                </ul>
                            </div>

                            <div class="education_block_footer">
                                <a href="#" class="btn btn-success">Continue Reading <i
                                        class="mdi mdi-chevron-double-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="singles_items wow animate__animated animate__zoomIn">
                        <div class="education_block_grid style_2">
                            <div class="education_block_thumb n-shadow">
                                <a href="#"><img src="storage/blogs/1/d42KKZEwCgLgT1.jpg" alt="course"
                                        class="card-img-top"></a>
                            </div>

                            <div class="education_block_body">
                                <h4 class="bl-title">
                                    <a href="#">
                                        Quality Education for all!
                                    </a>
                                </h4>
                            </div>

                            <div class="m-3">
                                <ul class="d-flex justify-content-between">
                                    <li>
                                        <i class="mr-2 fa fa-user"></i>by Omni Learn
                                    </li>
                                    <li>
                                        <i class="mr-2 ti-time"></i>8 months ago
                                    </li>
                                </ul>
                            </div>

                            <div class="education_block_footer">
                                <a href="#" class="btn btn-success">Continue Reading <i
                                        class="mdi mdi-chevron-double-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- End Articles --}}
    {{-- Newsletter Start --}}
    <section class="bg-cover newsletter inverse-theme " style="background:url(img/logo-decorated.jpg);"
        data-overlay="9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="text-center">
                        <div class="section-title wow animate__animated animate__zoomIn">
                            <h2>Join Thousands of Happy Students!</h2>
                            <div class="bar"></div>
                            <p>Subscribe our newsletter & get latest news and updation!</p>
                        </div>

                        <form class="sup-form wow animate__animated animate__zoomIn">
                            <input type="email" class="form-control sigmup-me" placeholder="Your Email Address"
                                required="required">
                            <input type="submit" class="btn btn-success" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End News --}}
    {{-- Footer Start --}}
    <footer class="theme-footer">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget text-center-sm">
                            <img src="img/footer_logo.png" class="img-footer" alt="" />
                            <p class="text-white">
                                24 Northampton Cres <br>
                                Eastlea <br>
                                Harare Zimbabwe
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <h3 class="widget-title text-center-sm">Quick Links</h3>
                            <ul class="text-center-sm">
                                <li><a href="#" title="Become an instructor">Become A
                                        Tutor</a></li>
                                <li><a href="#" title="About Us">About us</a></li>

                                <li><a href="#" title="Contact Us">Contact us</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget text-center-sm">
                            <h3 class="widget-title">Helpful Resources</h3>
                            <ul>
                                <li><a href="amazing-careers.html" title="Careers">Careers</a></li>
                                <li><a href="#" title="Blog">Blog</a></li>
                                <li>
                                    <a href="#">Tutor Handbook</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget text-center-sm">
                            <h3 class="widget-title">Help & Support</h3>
                            <ul>
                                <li><a href="#" title="Help">Help &amp; Support</a></li>

                                <li><a href="#" title="Refund Policy">Refund Policy</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="footer-widget text-center-sm">
                            <h4 class="widget-title">Download App</h4>
                            <a class="border-white other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-playstore "></i>
                                    </div>
                                    <div class="os-app-caps">
                                        Google Play
                                        <span>Coming Soon</span>
                                    </div>
                                </div>
                            </a>
                            <a class="other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-apple "></i>
                                    </div>
                                    <div class="os-app-caps">
                                        App Store
                                        <span>Coming Soon</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-4 col-md-6 text-center-sm">
                        <p class="mb-0">&copy; 2021 Omni Learning </p>
                    </div>

                    <div class="text-right col-lg-4 col-md-6 text-center-sm">
                        <ul class="footer-bottom-social">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/OmniLearningZW">
                                    <i class="fab fa-facebook "></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/omnilearning">
                                    <i class="fab fa-instagram "></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/OmniLearningZw">
                                    <i class="fab fa-twitter "></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/company/omni-learning">
                                    <i class="fab fa-linkedin "></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.youtube.com/channel/UCZGny2JQ5qw6oAKfxM772Dw">
                                    <i class="fab fa-youtube "></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="text-right col-lg-4 col-md-6 text-center-sm">
                        <div class="copyright-social">
                            <ul>
                                <li><a class="text-white" href="#" title="Terms">Terms &amp;
                                        Condition</a></li>
                                <li><a class="text-white" href="#" title="Policy">Privacy
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    {{-- Footer End --}}

    <div class="footer-spacer"></div>


    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa fa-arrow-up"></i></a>
    </div>
    {{-- ALL END HERE --}}

</body>

</html>
