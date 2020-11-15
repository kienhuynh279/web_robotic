@extends('layouts.client')

@section('title')
Trang sản phẩm
@endsection

@section('head')

@endsection

@section('content')
<div class="container px-0">
    <div class="py-5">
        {{-- @include('client.components.slider') --}}

        <div class="profile">
            <h1 class="text-center" style="color: black">{{$product->Title}}</h1>

            <div class="row mx-0" style="margin-bottom: 50px">
                <div class="col-md-4 pl-0">
                    <img class="w-100" height="400" style="width:100%; object-fit: cover"
                            src="{{$product->Image}}" alt="">
                </div>
                <div class="col-md-8">
                    {!!$product->Specification!!}
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
        </div>
    </div>
</div>
@endsection

@section('js_after')

@endsection