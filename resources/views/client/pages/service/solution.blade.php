@extends('layouts.client')

@section('title')
Solution
@endsection

@section('content')
<section id="services-detail" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2 style="padding-top: 40px">SOLUTIONS</h2>
        </div>
        <div class="row">
            @foreach ($solutions as $item)
            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap-detail wow fadeInDown" style="height: auto; max-height: 100%">
                    <div style="display: flex">
                        <div class="pull-left">
                            <img style="object-fit: cover; object-position: center; height: 100px; width: 100px" class="img-responsive" src="{{$item->Image}}">
                        </div>
                        <div class="media-body" style="margin-left: 20px">
                            <p>{{ $item->Title }}</p>
                        </div></div>
                   
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="row">
            
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div  class="pull-left">
                            <img class="img-responsive" style="float: left;object-fit: cover; object-position: center" src="{{$item->Image}}">
    </div>
    <div class="media-body">
        <p>{{ $item->Title }}</p>
    </div>
    </div>
    </div>

    </div> --}}
    <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#services-->
@endsection

@section('js_after')

@endsection