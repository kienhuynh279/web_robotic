@extends('layouts.client')

@section('title')
Trang chủ
@endsection

@section('content')
@include('client.components.banner')

<section id="feature">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2 style="padding-top: 40px">ARAR’S FAMILY OF AUTONOMOUS MOBILE ROBOTS (ARARBOT) WORK IN</h2>
        </div>

        <div class="row">

            <div class="features">
                @forelse ($applications as $app)
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class='{{$app->Icon ?? "fa fa-globe"}}' style='color:{{$app->Color ?? "#000000"}}'></i>
                        {{-- <i class='{{$app->Icon}}' style='color:{{$app->Color}}'></i> --}}
                        {{-- <img src="{{$app->Image}}" style="width: 200px; height: 200px; object-fit: cover;
                        object-position: center; border-radius: 50%;" alt=""> --}}
                        <h2>{{$app->Title}}</h2>
                        <p>{!!$app->Description!!}</p>
                    </div>
                </div>
                <!--/.col-md-4-->
                @empty
                <h4 class="text-center">Phần này chưa có dữ liệu</h4>
                @endforelse

            </div>
            <!--/.services-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#feature-->


<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2 style="padding-top: 40px">WORKING SCENARIOS</h2>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <img class="img-responsive"
                        src="{{ asset('assets/client/images/WORKING-SCENARIOS/hospital.jpg') }}">
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/hotel.jpg') }}">
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/office.jpg') }}">
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <img class="img-responsive"
                        src="{{ asset('assets/client/images/WORKING-SCENARIOS/retaurant.jpg') }}">
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/factory.jpg') }}">
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <img class="img-responsive"
                        src="{{ asset('assets/client/images/WORKING-SCENARIOS/coffeehouse.jpg') }}">
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#services-->



<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 wow fadeInDown">
                <img class="img-responsive" src=" https://arar.vn//userfiles/images/home/home_product.png">
            </div>

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#content-->

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Partners</h2>
            {{-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> --}}
        </div>
        <div class="partners">
            <ul>
                <li> <a href="#"><img style="height: 100px;" class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="300ms" src="https://arar.vn//userfiles/images/home/2_.png"/></a></li>
                <li> <a href="#"><img style="height: 100px;" class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="600ms" src="https://arar.vn//userfiles/images/home/3.png"/></a></li>
                <li> <a href="#"><img style="height: 100px;" class="img-responsive wow fadeInDown" data-wow-duration="1000ms"
                            data-wow-delay="900ms" src="https://arar.vn//userfiles/images/home/4.png"/></a></li>
            </ul>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#partner-->

{{-- <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info--> --}}
@endsection