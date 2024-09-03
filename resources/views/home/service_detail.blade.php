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

    <!--Services Details Start-->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="services-details__right">
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->short}}</p>
                        <div class="services-details__img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                            <div class="services-details__icon">
                                <span class="icon-insurance"></span>
                            </div>
                        </div>
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>


@endsection
