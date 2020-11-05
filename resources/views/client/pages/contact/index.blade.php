@extends('layouts.client')

@section('title')
Trang tài liệu
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

<div class="container px-0">
   <div class="row">
        <div class="col-sm-4">
              <img class="w-100" height="700" style="object-fit: cover"
                src="{{asset("assets/client/img/robotic/contact.png")}}" alt="">
        </div>
        <div class="col-sm-8">
            <div class="row">
             <div class="col-sm-2"></div>
                <div  class="col-sm-6">
                    <h1 class="text-center">Headquarter</h1>
                        <p>Floor 11th, Viet A Building, No.9 Duy Tan, Dich Vong Hau Ward, Cau Giay District, Hanoi, Vietnam.</p> 
                        <p>Phone: </p>
                        <p>Email: </p>
                        <p>Website</p>
                </div>  
            </div>
            <div style="margin-top: 20rem" class="row">
             <div class="col-sm-2"></div>
                <div  class="col-sm-6">
                    <h1 class="text-center">Representative Office</h1>
                        <p>No. 94 Hien Vuong, Phu Thanh Ward, Tan Phu District, Ho Chi Minh City, Vietnam</p> 
                        <p>Phone: </p>
                        
                </div>  
            </div>
        </div>
   </div>
</div>
@endsection

@section('js_after')

@endsection