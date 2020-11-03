@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')

<style>
    img {
        width: 100%;
        vertical-align: middle;
        margin: 10px;
    }
</style>

<div class="container px-0">
    <div class="row py-5">
        <div class="col-12">
            <h2 class="text-left">Techmetics launches fleet of autonomous navigation robots for service industries</h2>
            <p class="text-left">by Admin | create at: </p>
              <img class="w-100" height="400" style="object-fit: cover"
                src="{{asset("assets/client/img/595x240/02.jpg")}}" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. 
            Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, 
            tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. 
            Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales 
            nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. 
            Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. 
            Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>
            <a href="#">Click Here More</a>
        </div>
    </div>
</div>
@endsection

@section('js_after')

@endsection