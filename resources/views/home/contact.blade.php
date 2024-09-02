@extends('home.base')
@section('content')
    <!-- Start Page-title Area -->
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
    <!-- End Page-title Area -->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-page__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">contact us</span>
                            </div>
                            <h2 class="section-title__title">Have Questions? Contact
                                <br> with us <span>Anytime</span></h2>
                        </div>
                        <ul class="contact-page__points list-unstyled">
                            @if(!empty($web->phone))
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone-1"></span>
                                    </div>
                                    <div class="text">
                                        <p>Have any question?</p>
                                        <h3>Free <a href="tel:{!! $web->phone !!}">{!! $web->phone !!}</a></h3>
                                    </div>
                                </li>
                            @endif
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Send Email</p>
                                    <h3><a href="mailto:{!! $web->email !!}">{!! $web->email !!}</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Visit anytime</p>
                                    <h3>
                                        {!! $web->address !!}
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->



@endsection
