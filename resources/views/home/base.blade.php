<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/sinace-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('home/css/sinace.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/sinace-responsive.css')}}" />
    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 25rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 40px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }

    </style>
</head>

<body class="custom-cursor">
@inject('injected','App\Defaults\Custom')

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>





<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header">
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__logo">
                        <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt=""></a>
                    </div>
                    @if(!empty($web->phone))
                        <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <div class="main-menu__call-content">
                                <p class="main-menu__call-sub-title">Call Anytime</p>
                                <h5 class="main-menu__call-number"><a href="tel:{{$web->phone}}">{{$web->phone}}</a></h5>
                            </div>
                        </div>
                    @endif
                    <div class="main-menu__wrapper-inner-content">
                        <div class="main-menu__top">
                            <div class="main-menu__top-inner">
                                <div class="main-menu__top-left">
                                    <ul class="list-unstyled main-menu__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:{{$web->email}}">{{$web->email}}</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker"></i>
                                            </div>
                                            <div class="text">
                                                <p>{!! $web->address !!}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__top-right">
                                    <ul class="list-unstyled main-menu__top-menu">
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li><a href="{{url('faq')}}">Help</a></li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                    <div class="main-menu__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__bottom">
                            <div class="main-menu__bottom-inner">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown">
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{url('about')}}">About</a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('plans')}}" class="nav-link">Plans</a></li>
                                                <li><a href="{{url('faqs')}}" class="nav-link">Frequently Asked Questions</a></li>
                                                <li><a href="{{url('terms')}}" class="nav-link">Terms & Conditions</a></li>
                                                <li><a href="{{url('privacy')}}" class="nav-link">Privacy policy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Services</a>
                                            <ul class="sub-menu">
                                                @foreach($injected->getServices() as $service)
                                                    <li><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>

                                                <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__right">
                                    <div class="main-menu__btn-box">
                                        <a href="{{route('register')}}" class="thm-btn main-menu__btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    @yield('content')

    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer__shape-1 float-bob-x">
            <img src="{{asset('home/images/shapes/site-footer-shape-1.png')}}" alt="">
        </div>
        <div class="site-footer__bg" style="background-image: url({{asset('home/images/backgrounds/site-footer-bg.png')}});">
        </div>
        <div class="site-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">
                                {{$siteName}} is a trailblazing company that leverages the power of AI to provide unparalleled
                                cryptocurrency investment, mining, and trading solutions.
                            </p>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Explore</h3>
                            </div>
                            <ul class="footer-widget__link-list list-unstyled">
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© Copyright 2014 -  {{date('Y')}} by <a href="#">{{$siteName}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{url('/')}}" aria-label="logo image"><img src="{{asset('home/images/'.$web->logo)}}" width="135"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">{{$web->email}}</a>
            </li>
            @if(!empty($web->phone))
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:{{$web->phone}}">{{$web->phone}}</a>
                </li>
            @endif
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="telegram-float-widget">
    <a href="https://wa.me/{{$web->phone}}" target="_blank">
        <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png" alt="" width="50">
    </a>
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


<script src="{{asset('home/vendors/jquery/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('home/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('home/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('home/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('home/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('home/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('home/vendors/wow/wow.js')}}"></script>
<script src="{{asset('home/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('home/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('home/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('home/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('home/vendors/timepicker/timePicker.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script src="{{asset('home/vendors/highcharts/highcharts.min.js')}}"></script>
<script src="{{asset('home/vendors/touch/touch-paid-min.js')}}"></script>
<script src="{{asset('home/js/sip-calculator.js')}}"></script>
<script src="{{asset('home/js/lumpsum-calculator.js')}}"></script>
<script src="{{asset('home/js/inflation.js')}}"></script>
<script src="{{asset('home/js/target-amount-calculator.js')}}"></script>
<script src="{{asset('home/js/tab.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- template js -->
<script src="{{asset('home/js/sinace.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')
</body>
</html>
