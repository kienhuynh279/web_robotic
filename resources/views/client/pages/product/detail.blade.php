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
                <div class="col-md-4 pl-0"></div>
                {{-- <div class="col-md-4 pl-0">
                    <img class="w-100" height="400" style="width:100%; object-fit: cover"
                            src="{{$product->Image}}" alt="">
                </div> --}}
            </div>
            <div class="row mx-0" style="margin-bottom: 50px">
                <div class="col-12 px-0 mt-3">
                    {!!$product->Description!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_after')

@endsection