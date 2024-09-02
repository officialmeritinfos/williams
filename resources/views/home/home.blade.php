@extends('home.base')
@section('content')

    @push('css')
        <style>
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #e40013;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #e40013;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #e40013;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #e40013;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#e40013;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
            small {
                font-size: 12px;
                text-transform: initial;
            }
        </style>
    @endpush


    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
             data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider__slide-1">
                <div class="main-slider__bg"
                     style="background-image: url({{asset('home/images/backgrounds/slider-1-1.jpg')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider__shape-2 img-bounce">
                    <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="{{asset('home/images/shapes/main-slider-shape-4.png')}}" alt="">
                </div>
                <div class="main-slider__shape-5 float-bob-x">
                    <img src="{{asset('home/images/shapes/main-slider-shape-5.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">Grow your Finance</p>
                        <h2 class="main-slider__title">Solve complex Financial <br>
                            problems with Experts</h2>
                        <div class="main-slider__btn-box">
                            <a href="{{route('register')}}" class="main-slider__btn thm-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg"
                     style="background-image: url({{asset('home/serv/1.jpg')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider__shape-2 img-bounce">
                    <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="{{asset('home/images/shapes/main-slider-shape-4.png')}}" alt="">
                </div>
                <div class="main-slider__shape-5 float-bob-x">
                    <img src="{{asset('home/images/shapes/main-slider-shape-5.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">Sustainable Solutions for you</p>
                        <h2 class="main-slider__title">Retirement <br>
                            Planning made easy</h2>
                        <div class="main-slider__btn-box">
                            <a href="{{route('register')}}" class="main-slider__btn thm-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-3">
                <div class="main-slider__bg"
                     style="background-image: url({{asset('home/serv/stock.jpg')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider__shape-2 img-bounce">
                    <img src="{{asset('home/images/shapes/main-slider-shape-2.png')}}" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="{{asset('home/images/shapes/main-slider-shape-4.png')}}" alt="">
                </div>
                <div class="main-slider__shape-5 float-bob-x">
                    <img src="{{asset('home/images/shapes/main-slider-shape-5.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">Invest in Stocks</p>
                        <h2 class="main-slider__title">Invest <br>
                            in stocks with confidence</h2>
                        <div class="main-slider__btn-box">
                            <a href="{{route('register')}}" class="main-slider__btn thm-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Main Sllider Start -->

    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{asset('home/images/resources/about-one-img-1.jpg')}}" alt="">
                                <div class="about-one__shape-1 float-bob-x">
                                    <img src="{{asset('home/images/shapes/about-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="about-one__shape-2 img-bounce">
                                    <img src="{{asset('home/images/shapes/about-one-shape-2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="about-one__img-2">
                                <img src="{{asset('home/images/resources/about-one-img-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">About {{$siteName}}</span>
                            </div>
                            <h2 class="section-title__title">We are dedicated to give
                                you the  <span>Best</span></h2>
                        </div>
                        <p class="about-one__text">
                            With {{$siteName}}, harness the potential of
                            artificial intelligence to elevate your cryptocurrency
                            investments, mining operations, and trading
                            endeavors to new
                            heights. Experience x10 of revenue earning in hours.
                        </p>
                        <div class="about-one__points-and-experience">
                            <div class="about-one__points-box">
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Best Financial Analysis</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Creative & Ideal Planning</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Financial Trust</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Timely Returns</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__experience-box">
                                <div class="about-one__experience-icon">
                                    <span class="icon-certificate"></span>
                                </div>
                                <div class="about-one__experience-text">
                                    <p>10 Years of Financial Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-one__btn-box">
                            <div class="about-one__shape-3 float-bob-x">
                                <img src="{{asset('home/images/shapes/about-one-shape-3.png')}}" alt="">
                            </div>
                            <a href="{{url('about')}}" class="about-one__btn thm-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Packages</span>
                <h2>Specialized Investment Packages</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                    <li>Contract Duration: {{$package->Duration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!--Services Page Start-->
    <section class="services-page">
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">what we offer</span>
                                </div>
                                <h2 class="section-title__title">Offering the Best Asset
                                    <br> & Finance <span>Services</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__right">
                            <p class="services-one__text">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <!--Services Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="services-page__single">
                            <div class="services-page__img-box">
                                <div class="services-page__img">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                                </div>
                                <div class="services-page__icon">
                                    <span class="icon-pie-chart"></span>
                                </div>
                            </div>
                            <div class="services-page__content">
                                <h3 class="services-page__title"><a href="{{route('service.details',['id'=>$service->id])}}">
                                        {{$service->title}}
                                    </a></h3>
                                <p class="services-page__text">
                                    {{$service->short}}
                                </p>
                                <a href="{{route('service.details',['id'=>$service->id])}}" class="services-page__read-more">Read More</a>
                            </div>
                            <div class="services-page__hover-single">
                                <div class="services-page__hover-img"
                                     style="background-image: url({{asset('home/serv/'.$service->photo)}});">
                                </div>
                                <div class="services-page__hover-content-box">
                                    <div class="services-page__hover-icon">
                                        <span class="icon-pie-chart"></span>
                                    </div>
                                    <div class="services-page__hover-content">
                                        <h3 class="services-page__hover-title"><a href="{{route('service.details',['id'=>$service->id])}}">
                                                {{$service->title}}
                                            </a></h3>
                                        <p class="services-page__hover-text">
                                            {{$service->short}}
                                        </p>
                                        <a href="{{route('service.details',['id'=>$service->id])}}" class="services-page__hover-read-more">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Services Page Single End-->
                @endforeach

            </div>
        </div>
    </section>

    <!--Grow Business Start-->
    <section class="grow-business" style="margin-top: 3rem;">
        <div class="container">
            <div class="grow-business__inner">
                <div class="grow-business__bg"
                     style="background-image: url({{asset('home/images/backgrounds/grow-business-bg.jpg')}});"></div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="grow-business__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Human resources</span>
                                </div>
                                <h2 class="section-title__title">We draw on our global
                                    ability to<span> grow</span></h2>
                            </div>
                            <p class="grow-business__text">
                                Powered by advanced artificial intelligence (AI) algorithms, {{$siteName}} provides
                                cutting-edge solutions to help clients earn from the dynamic world of cryptocurrencies with confidence and success.
                            </p>
                            <ul class="grow-business__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Business growth</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Financial Management</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Asset Management</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="grow-business__progress">
                                <h4 class="grow-business__progress-title">Financial Expertise</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="97%">
                                        <div class="count-text">97%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="grow-business__right">
                            <div class="grow-business__shape-1 float-bob-x">
                                <img src="{{asset('home/images/shapes/grow-business-shape-1.png')}}" alt="">
                            </div>
                            <ul class="grow-business__right-points list-unstyled">
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-experience"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">Prudent Invetment
                                        <br> Policy</h3>
                                    <p class="grow-business__right-points-text">
                                        At {{$siteName}} is where AI meets Human kmowledge for efficient policies that provide for
                                        the best result.
                                    </p>
                                </li>
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-consumer-behavior"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">Financial
                                        <br> Advice</h3>
                                    <p class="grow-business__right-points-text">
                                        We engage our clients on their financial need and guide them properly to it.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Grow Business End-->

    <!--Video One Start-->
    <section class="video-one">
        <div class="video-one__bg" style="background-image: url({{asset('home/images/backgrounds/video-one-bg.jpg')}});"></div>
        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=XV_s5U0fvdU" class="video-popup">
                        <div class="video-one__video-icon">
                            <img src="{{asset('home/images/icon/video-one-icon.png')}}" alt="">
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
                <h3 class="video-one__title">Financial & Asset
                    <br> Management</h3>
                <div class="video-one__btn-box">
                    <a href="{{route('register')}}" class="video-one__btn thm-btn">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__bg"
             style="background-image: url({{asset('home/images/backgrounds/testimonial-one-bg.jpg')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">our feedbacks</span>
                            </div>
                            <h2 class="section-title__title">Clients are
                                <span>Talking</span></h2>
                        </div>
                        <p class="testimonial-one__left-text">

                        </p>
                        <div class="testimonial-one__rounded-text">
                            <a href="#" class="testimonial-one__curved-circle-box">
                                <div class="curved-circle">
                                        <span class="curved-circle--item">
                                            42k+ satisfied clients
                                        </span>
                                </div><!-- /.curved-circle -->
                                <div class="testimonial-one__icon">
                                    <img src="{{asset('home/images/icon/main-slider-two-rounded-icon.png')}}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                             data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="https://ui-avatars.com/api/?name=Aleesha+B.&rounded=true" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">
                                        "{{$siteName}} has been a game-changer for my investments. The combination of AI
                                            precision and a diverse portfolio has not only safeguarded my wealth but propelled
                                            it to new heights. Trustworthy, innovative, and truly a partner in financial success."
                                        </p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Aleesha B</a></h3>
                                        <p>Happy Client</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="https://ui-avatars.com/api/?name=Mike+H.&rounded=true" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">
                                            "As someone new to investing, {{$siteName}} provided the guidance I needed. The team's dedication to educating
                                            clients sets them apart. From understanding Forex to exploring green investments, they made the
                                            complex seem simple. Grateful for their expertise!"
                                        </p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Mike H.</a></h3>
                                        <p>Happy Client</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+A.&rounded=true" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">
                                            "I never thought investing could be this personalized and rewarding. {{$siteName}}'s tailored strategies aligned perfectly with my retirement goals."
                                        </p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Sarah A.</a></h3>
                                        <p>Happy Client</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__inner">
            <div class="counter-one__shadow"></div>
            <div class="counter-one__bg"
                 style="background-image: url({{asset('home/images/backgrounds/counter-one-bg.jpg')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="counter-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">fun facts</span>
                                </div>
                                <h2 class="section-title__title">Consultancy Funfacts
                                    <br> in Great <span>Numbers</span></h2>
                            </div>
                            <p class="counter-one__text">Leverage agile frameworks to provide a robust synopsis for
                                high level overviews. Iterative approaches to corporate strategy data foster to
                                collaborative thinking.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="counter-one__right">
                            <ul class="counter-one__count-box list-unstyled">
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-checking"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="886" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Projects Completed</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-recommend"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="600" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Satisfied Customers</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-consulting"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="960" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Expert Consultants</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="counter-one__bottom">
            <div class="container">
                <div class="counter-one__bottom-inner">
                    <p class="counter-one__bottom-text">Need best business consultation solutions & services? <a
                            href="#">Send a Request</a></p>
                    <div class="counter-one__call-box">
                        <p>Call Free <a href="tel:9200009850">+92 (0000)-9850</a></p>
                        <div class="counter-one__call-icon">
                            <span class="icon-telephone-1"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->


    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our News Updates</span>
                </div>
                <h2 class="section-title__title">Latest Articles &
                    <br> News from the <span>Blogs</span></h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">

                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
                <!--News One Single End-->

            </div>
        </div>
    </section>
    <!--News One End-->


@endsection
