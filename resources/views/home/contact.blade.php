@extends('home.base')
@section('content')
    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">{{$pageName}}</div>
                        <div class="page-title">
                            <h1>{{$pageName}}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="{{asset('home/img/page-banner/page-banner-start.svg')}}" class="img-fluid start" alt="">
                        <img src="{{asset('home/img/page-banner/page-banner.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

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
