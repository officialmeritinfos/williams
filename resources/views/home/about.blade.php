@extends('home.base')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('home/images/backgrounds/page-header-bg.jpg')}}');">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{asset('home/images/shapes/page-header-shape-2.png')}}" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{asset('home/images/shapes/page-header-shape-1.png')}}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{asset('home/images/shapes/page-header-shape-3.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{$pageName}}</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>{{$pageName}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Start About Area -->
    <div class="about-area ptb-100 mt-5">
        <div class="container">
            <div class="row m-0">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box">
                            <div class="about-four__img">
                                <img src="{{asset('home/images/resources/about-four-img-1.jpg')}}" alt="">
                            </div>
                            <div class="about-four__img-two">
                                <img src="{{asset('home/images/resources/about-four-img-2.jpg')}}" alt="">
                            </div>
                            <div class="about-four__shape-1 img-bounce"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-text">
                        <span class="sub-title">ABOUT US</span>
                        <h2>Your Pathway to Financial Freedom</h2>
                        <p>
                           Founded in 2012, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                        </p>
                        <p class="about-one__text-2">{{$siteName}} stands as one of the largest and most seasoned international private equity firms. Our accomplished team of investment professionals is primarily dedicated to strategic investments.</p>
                        <p class="about-one__text-2">
                            {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                        </p>
                        <p class="about-one__text-2">
                            The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                        </p>
                        <p class="about-one__text-2">
                            Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <h3>Consistency</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-settings-2-line"></i>
                                    </div>
                                    <h3>Strategy</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <h3>Investment</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 p-0">
                   <img src="{{asset('home/images/certificate.jpeg')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

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

@endsection
