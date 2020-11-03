@extends('layouts.client')

@section('title')
    Trang Dịch Vụ
@endsection

@section('content')
@include('client.components.banner')

<style>
    img {
        width: 100%;
        vertical-align: middle;
        margin: 10px;
    }
</style>

<div style="margin-top: 5rem" class="container px-0">
    <div class="profile">
        <h1 class="text-center">Solutions</h1>
        <div class="row mx-0">
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img class="w-100" height="100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>An innovative way to attract customers to sell tickets, directory information, and vouchers.
                     All this made possible even with less staff. Our robots are a boost to your business</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img class="w-100" height="100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>An innovative way to attract customers to sell tickets, directory information, and vouchers.
                     All this made possible even with less staff. Our robots are a boost to your business</p>
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img class="w-100" height="100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>An innovative way to attract customers to sell tickets, directory information, and vouchers.
                     All this made possible even with less staff. Our robots are a boost to your business</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img class="w-100" height="100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>An innovative way to attract customers to sell tickets, directory information, and vouchers.
                     All this made possible even with less staff. Our robots are a boost to your business</p>
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img class="w-100" height="100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>An innovative way to attract customers to sell tickets, directory information, and vouchers.
                     All this made possible even with less staff. Our robots are a boost to your business</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img class="w-80" height="100" style="object-fit: cover"
                            src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
                </div>
                <div class="col-sm-8">
                    <p>An innovative way to attract customers to sell tickets, directory information, and vouchers.
                     All this made possible even with less staff. Our robots are a boost to your business</p>
                </div>
            </div>
        </div>
    </div> 
</div>

<div style="margin-top: 5rem" class="profile">
    <h1 class="text-center">TRANNING</h1>
    <div class="row mx-0">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-4">
                <img class="w-75" height="100" style="object-fit: cover"
                    src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
            </div>
                <div style='margin-top: 4rem' class="col-sm-8">
                   <h3>Intro to Robot Programming – ROS</h3>
                </div>
            </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row mx-0">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-4">
                <img class="w-75" height="100" style="object-fit: cover"
                    src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
            </div>
                <div style='margin-top: 4rem' class="col-sm-8">
                   <h3>Intro to Robot Programming – ROS</h3>
                </div>
            </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row mx-0">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-4">
                <img class="w-75" height="100" style="object-fit: cover"
                    src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
            </div>
                <div style='margin-top: 4rem' class="col-sm-8">
                   <h3>Intro to Robot Programming – ROS</h3>
                </div>
            </div>
        <div class="col-sm-3"></div>
    </div>
    <div class="row mx-0">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="col-sm-4">
                <img class="w-75" height="100" style="object-fit: cover"
                    src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
            </div>
                <div style='margin-top: 4rem' class="col-sm-8">
                   <h3>Intro to Robot Programming – ROS</h3>
                </div>
            </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</div>
@endsection

@section('js_after')

@endsection