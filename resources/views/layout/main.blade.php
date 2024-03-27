<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Blossom</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font.awesome.min.css') }}">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/linearicons.min.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

    <!-- Header Area Start Here -->
    <header class="main-header-area">
        <!-- Main Header Area Start -->
        <div class="main-header header-transparent header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                        <div class="header-logo d-flex align-items-center">
                            <a href="index.html">
                                <img class="img-full" src="{{ asset('assets/images/logo/logo.png') }}" alt="Header Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                        <nav class="main-nav d-none d-lg-flex">
                            <ul class="nav">

                                <?php if (Auth::user()) { ?>
                                <li>
                                    <a class="active" href="{{route('indexmitra')}}">
                                        <span class="menu-text"> Home</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="{{route('katalogmitra')}}">
                                        <span class="menu-text"> Katalog</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="/myaccount">
                                        <span class="menu-text"> Account</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <?php } else { ?>
                                <li>
                                    <a class="active" href="/">
                                        <span class="menu-text"> Home</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="/toko">
                                        <span class="menu-text"> Toko</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="{{route('login')}}">
                                        <span class="menu-text"> Login</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        <aside class="off-canvas-menu-wrapper" id="sideMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="off-canvas-inner">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
    </header>
    <!-- Header Area End Here -->


    @yield('content')
<!--Footer Area Start-->
<footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                    <div class="single-footer-widget m-0">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <p class="desc-content">Lorem Khaled Ipsum is a major key to success. To be successful you’ve got to work hard you’ve got to make it.</p>
                        <div class="social-links">
                            <ul class="d-flex">
                                <li>
                                    <a class="rounded-circle" href="#" title="Facebook">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="rounded-circle" href="#" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="rounded-circle" href="#" title="Linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="rounded-circle" href="#" title="Youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="rounded-circle" href="#" title="Vimeo">
                                        <i class="fa fa-vimeo"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">Quicklink</h2>
                        <ul class="widget-list">
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="blog.html">Toko</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">OUR TEAM</h2>
                        <ul class="widget-list">
                            <li><a href="contact-us.html">angggota 1</a></li>
                            <li><a href="contact-us.html">angggota 2</a></li>
                            <li><a href="contact-us.html">angggota 3</a></li>
                            <li><a href="contact-us.html">angggota 4</a></li>
                            <li><a href="contact-us.html">angggota 5</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">See Information</h2>
                        <div class="widget-body">
                            <address>123, ABC, Road ##, Main City, Your address goes here.<br>Phone: 01234 567 890<br>Email: https://example.com</address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container custom-area">
            <div class="row">
                <div class="col-12 text-center col-custom">
                    <div class="copyright-content">
                        <p>Copyright © 2021 <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a> | Built with&nbsp;<strong>FloSun</strong>&nbsp;by <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer Area End-->


<!-- Scroll to Top Start -->
<a class="scroll-to-top" href="#">
    <i class="lnr lnr-arrow-up"></i>
</a>
<!-- Scroll to Top End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->

<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<!-- jQuery Migrate JS -->
<script src="{{ asset('assets/js/vendor/jQuery-migrate-3.3.2.min.js') }}"></script>
<!-- Modernizer JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Swiper Slider JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<!-- nice select JS -->
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<!-- Ajaxchimpt js -->
<script src="{{ asset('assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<!-- Jquery Ui js -->
<script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
<!-- Jquery Countdown js -->
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<!-- jquery magnific popup js -->
<script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>


<!-- Mirrored from htmldemo.net/flosun/flosun/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:14 GMT -->
</html>
