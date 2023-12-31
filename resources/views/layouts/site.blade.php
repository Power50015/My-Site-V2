<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/favicon_io/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('site/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('site/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('site/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site/favicon_io/site.webmanifest') }}">
    <meta content="Mohamed Ashamallah" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($MetaData)
        {{ $MetaData }}
    @endisset
    

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('site/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/responsive.css') }}">
</head>

<body>
    <!-- Cursor -->
    <div class="cursor js-cursor"></div>
    <!-- header -->
    <header class="header-area header-three">
        <div id="header-sticky" class="menu-area">
            <div class="container-fluid">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-lg-1 col-md-12">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ url('public/Image/'.$LogoImage) }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 text-center">

                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="{{ route('home') }}#parallax">Home</a>

                                        </li>
                                        <li><a href="{{ route('home') }}#video">About me</a></li>
                                        <li class="has-sub">
                                            <a href="{{ route('home') }}#services">Services</a>
                                        </li>
                                        <li><a href="{{ route('projects.all') }}">Portfolio</a></li>
                                        <li><a href="{{ route('home') }}#testimonial">Testimonial</a></li>
                                        <li><a href="{{ route('home') }}#awards">Awards</a></li>
                                        <li><a href="{{ route('home') }}#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block">
                            <div class="header-social">
                                <span>
                                    <a href="{{$WhatsApp}}" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                                    <a href="{{$Telegram}}" target="_blank" title="Telegram"><i class="fab fa-telegram"></i> Telegram</a>
                                </span>
                                <!--  /social media icon redux -->
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    {{ $slot }}

    <!-- footer -->
    <footer class="footer-bg footer-p">
        <div class="footer-top p-relative fix">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-6 col-sm-12 text-center">
                        <div class="section-title p-relative mb-50 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="f-logo">
                                <img src="{{ url('public/Image/'.$LogoImage) }}" alt="img">
                            </div>
                            {!! $FooterText !!}
                        </div>
                        <div class="footer-social mt-10 mb-120 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s">
                            <a href="{{$LinkedIn}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{$GitHub}}" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="{{$Bitbucket}}" target="_blank"><i class="fab fa-bitbucket"></i></a>
                            <a href="{{$CodePen}}" target="_blank"><i class="fab fa-codepen"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copy-text">
                            Copyright © Mohamed Ashamallah <script>
                                document.write(new Date().getFullYear())
                            </script> . All rights reserved.
                        </div>
                    </div>
                    <div class="col-lg-6 text-right text-xl-right">
                        <ul>
                            @if(!empty($Blog))
                            <li>
                                <a href="{{$Blog}}" target="_blank">Blog</a>
                            </li>
                            @endif
                            @if(!empty($YouTube))
                            <li>
                                <a href="{{$YouTube}}" target="_blank">Youtube</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    <!-- JS here -->
    <script src="{{ asset('site/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('site/js/vendor/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('site/js/popper.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/slick.min.js') }}"></script>
    <script src="{{ asset('site/js/ajax-form.js') }}"></script>
    <script src="{{ asset('site/js/paroller.js') }}"></script>
    <script src="{{ asset('site/js/wow.min.js') }}"></script>
    <script src="{{ asset('site/js/js_isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('site/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('site/js/parallax.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('site/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('site/js/element-in-view.js') }}"></script>
    <script src="{{ asset('site/js/main.js') }}"></script>
</body>

</html>