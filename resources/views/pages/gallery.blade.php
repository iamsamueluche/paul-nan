<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from duruthemes.com/demo/html/pwe/multipage//gallery by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2024 10:26:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paul &amp; Nankam Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.webp') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status"><div class="preloader-position loader"> <span></span> </div></div>
    </div>
    <!-- Content -->
    <div id="pwe-page"> 
        <a href="#" class="js-pwe-nav-toggle pwe-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="pwe-aside">
            <!-- Logo -->
            <h1 id="pwe-logo">
                <a href="{{ url('/') }}">PN<span>Paul <small>&amp;</small> Nankam</span></a>
            </h1>
            <!-- Menu -->
            <nav id="pwe-main-menu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('ourstory') }}">Our Story</a></li>
                    <li><a href="{{ url('programme') }}">Programme</a></li>
                    <li class="pwe-active"><a href="{{ url('gallery') }}">Gallery</a></li>
                    <li><a href="{{ url('weddingdetails') }}">Wedding Details</a></li>
                    <li><a href="{{ url('rsvp') }}">RSVP</a></li>
                </ul>
            </nav>
            <!-- Sidebar Footer -->
            <div class="pwe-footer">
                <div class="separator"></div>
                <p>Wedding Day Celebration
                    <br />Paulkoloboi@yahoo.com<br>nankamabu12@gmail.com
                </p>
                <div class="social"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>
            </div>
        </aside>
        <!-- Main Section -->
        <div id="pwe-main">
            <!-- Banner Title -->
            <div class="banner-container">
                <div class="banner-img"> <img class="banner-img-width" src="{{ asset('images/topbanner-2.webp') }}" alt=""> </div>
                <div class="banner-head">
                    <div class="banner-head-padding banner-head-margin">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12"> <span class="heading-meta">.gallery</span>
                                    <h2 class="pwe-heading animate-box" data-animate-effect="fadeInLeft">Our Wedding Gallery</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio -->
            <div class="portfolio-section portfolio pt-0 pb-60">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item animate-box" data-animate-effect="fadeInLeft">
                                <div class="portfolio-img">
                                    <a href="{{ url('gallerydetail') }}?type=pre"><img src="{{ asset('images/portfolio/c1.webp') }}" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5><a href="{{ url('gallerydetail') }}?type=pre">Pre-wedding Photos</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item animate-box" data-animate-effect="fadeInLeft">
                                <div class="portfolio-img">
                                    <a href="{{ url('gallerydetail') }}?type=trad"><img src="{{ asset('images/portfolio/c2.webp') }}" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5><a href="{{ url('gallerydetail') }}?type=trad">Trad Wedding Photos</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item animate-box" data-animate-effect="fadeInLeft">
                                <div class="portfolio-img">
                                    <a href="{{ url('gallerydetail') }}?type=court"><img src="{{ asset('images/portfolio/c3.webp') }}" alt=""></a>
                                </div>
                                <div class="content">
                                    <h5><a href="{{ url('gallerydetail') }}?type=court">Court Wedding Photos</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Clients -->
            <div class="clients-section clients">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 owl-carousel owl-theme">
                            <div class="client-logo">
                                <a href="#"><img src="{{ asset('images/clients/1.webp') }}" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="{{ asset('images/clients/2.webp') }}" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="{{ asset('images/clients/3.webp') }}" alt=""></a>
                            </div></div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="pwe-footer2">
                <div class="pwe-narrow-content">
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <h2>
                                <a href="{{ url('/') }}">PN<span>Paul <small>&amp;</small> Nankam</span></a>
                            </h2>
                            <div class="social"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter-alt"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <h6>Celebrate</h6>
                            <p>Wedding Day Celebration</p>
                            <h6>Email</h6>
                            <p>Paulkoloboi@yahoo.com<br>nankamabu12@gmail.com</p>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <h6>Address</h6>
                            <p>Special Appreciation
                                <br />Thank you for celebrating with us
                            </p>
                            <p class="copyright">&copy; 2026. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/pwe/multipage//gallery by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2024 10:26:58 GMT -->
</html>



