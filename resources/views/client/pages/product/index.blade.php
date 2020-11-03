@extends('layouts.client')

@section('title')
Trang sản phẩm
@endsection

@section('head')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
<div class="container px-0">
    <div class="py-5">
        <style>
            .swiper-container {
                width: 100%;
                height: 350px;
            }
        </style>
        <div class="swiper-container mb-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img class="w-100 h-100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="profile">
            <h1 class="text-center">ARARBOT BASE</h1>

            <div class="row mx-0" style="margin-bottom: 50px">
                <div class="col-md-6 pl-0">
                    <img class="w-100" height="400" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-md-6">
                    <h4 class="mb-0">Specifications</h4>

                    <div class="block">
                        <p class="m-1">Dimensions: </p>
                        <p class="m-1">Weight: </p>
                        <p class="m-1">Payload: </p>
                        <p class="m-1">Speed: </p>
                        <p class="m-1">Autonomy: </p>
                        <p class="m-1">Temperature range:</p>
                        <p class="m-1">Maximum slope:</p>
                        <p class="m-1">Batteries: </p>
                        <p class="m-1">Wifi: </p>
                        <p class="m-1">Connectivity: </p>
                        <p class="m-1">Docking station:</p>
                    </div>
                </div>

                <div class="col-12 px-0 mt-3">
                    <h4 class="mb-0">
                        Autonomouse and collaborative mobile platform
                    </h4>

                    <ul class="pl-4">
                        <li><a href="#" class="text-decoration-none">Designed for indoor applications</a></li>
                        <li><a href="#" class="text-decoration-none">applications Ipsum</a></li>
                        <li><a href="#" class="text-decoration-none">Robots in retail and shopping bring the intelligence of big-data knowledge of consumers and offer smart customer service in physical outlets and stores. Our retail service robots can best handle customer queries and complex product recommendations altogether</a></li>
                        <li><a href="#" class="text-decoration-none">Robots in retail and shopping bring the intelligence of big-data knowledge of consumers and offer smart customer service in physical outlets and stores. Our retail service robots can best handle customer queries and complex product recommendations altogether</a></li>
                        <li><a href="#" class="text-decoration-none">applications Ipsum</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mx-0 mb-5" style="margin-bottom: 50px">
                <div class="col-md-6 pl-0 order-2">
                    <img class="w-100" height="400" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-md-6 order-1">
                    <h4 class="mb-0">Specifications</h4>

                    <div class="block">
                        <p class="m-1">Dimensions: </p>
                        <p class="m-1">Weight: </p>
                        <p class="m-1">Payload: </p>
                        <p class="m-1">Speed: </p>
                        <p class="m-1">Autonomy: </p>
                        <p class="m-1">Temperature range:</p>
                        <p class="m-1">Maximum slope:</p>
                        <p class="m-1">Batteries: </p>
                        <p class="m-1">Wifi: </p>
                        <p class="m-1">Connectivity: </p>
                        <p class="m-1">Docking station:</p>
                    </div>
                </div>

                <div class="col-12 px-0 mt-3 order-3">
                    <h4 class="mb-0">
                        Autonomouse and collaborative mobile platform
                    </h4>

                    <ul class="pl-4">
                        <li><a href="#" class="text-decoration-none">Designed for indoor applications</a></li>
                        <li><a href="#" class="text-decoration-none">applications Ipsum</a></li>
                        <li><a href="#" class="text-decoration-none">Robots in retail and shopping bring the intelligence of big-data knowledge of consumers and offer smart customer service in physical outlets and stores. Our retail service robots can best handle customer queries and complex product recommendations altogether</a></li>
                        <li><a href="#" class="text-decoration-none">Robots in retail and shopping bring the intelligence of big-data knowledge of consumers and offer smart customer service in physical outlets and stores. Our retail service robots can best handle customer queries and complex product recommendations altogether</a></li>
                        <li><a href="#" class="text-decoration-none">applications Ipsum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_after')
<script type="module">
    import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'
  
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
@endsection