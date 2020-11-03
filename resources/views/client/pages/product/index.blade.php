@extends('layouts.client')

@section('title')
Trang sản phẩm
@endsection

@section('head')

@endsection

@section('content')
<div class="container px-0">
    <div class="py-5">
        @include('client.components.slider')

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
                <div class="col-md-4 pl-0 order-2">
                    <img class="w-100" height="400" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-md-8 order-1">
                    <div class="col-md-4">
                        <h4 class="mb-0">Specifications</h4>
                        <div class="block">
                            <p class="m-1">3 Standard compartments </p>
                            <p class="m-1">Multipoint delivery – up to 3 deliveries in one trip </p>
                            <p class="m-1">Payload: upto </p>
                            <p class="m-1">Speed: </p>
                            <p class="m-1">Autonomy: </p>
                            <p class="m-1">Automatic door open/close</p>
                            <p class="m-1">10.1 inch touch screen for user communication</p>
                            <p class="m-1">Lift/PABX/Auto door integrated </p>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <h4 class="mb-0">Dimensions (LxWxH)</h4>
                        <div class="block">
                            <p class="m-1">Product: 27.6” (L) x 23.6” (W) x 48.8” (H)</p>
                            <p class="m-1">Compartment x 3: 16.9” (L) x 12” (W) x 5.9” (H)</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-0">Applications</h4>
                        <div class="block">
                            <p class="m-1">Hotel room service</p>
                            <p class="m-1">Hospital Pharmacy delivery</p>
                            <p class="m-1">Office/Shopping Mall delivery needs</p>
                            <p class="m-1">High Rise Buildings</p>
                            <p class="m-1">Medication, Laboratory samples delivery</p>   
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0 mt-3 order-3">
                    <h4 class="mb-0">
                        Autonomouse and collaborative mobile platform
                    </h4>

                    <ul class="pl-4">
                        <li><a href="#" class="text-decoration-none">ARAR delivery helps your staff with secured meals, medications, and amenities delivery in hospitals and hotels making sure your patents/guests get the best care/services possible and staff have better job satisfaction</a></li>
                        <li><a href="#" class="text-decoration-none">Robots have maximized the time efficiency by taking your items off the shelves and delivering them where needed. </a></li>
                        <li><a href="#" class="text-decoration-none">They are a must-have for retailers and logistics firms for safe and quick delivery of items</a></li>
                        <li><a href="#" class="text-decoration-none">We make sure that your products are shipped at blazing speeds without any harm to the quality. Our Stack robot can handle repetitive tasks and all your delivery needs.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_after')

@endsection