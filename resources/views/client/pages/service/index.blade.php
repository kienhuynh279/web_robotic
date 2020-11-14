@extends('layouts.client')

@section('title')
    Trang Dịch Vụ
@endsection

@section('content')
<section id="services-detail" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>SOLUTIONS</h2>
            </div>
            <div class="row">
                @foreach($types as $type)
                    @foreach($services as $service)
                        @if($service->TypeId === 4)
                        <div class="col-sm-6 col-md-4">
                            <div class="media services-wrap-detail wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="{{ asset('assets/client/images/services/s1.png') }}">
                                </div>
                                <div class="media-body">
                                    <p>{{ $service->Title }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endforeach	
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->
	
    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>TRAINING</h2>
                
            </div>           

            <div class="row">
                <div class="col-md-3 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="{{ asset('assets/client/images/services/t1.png') }}"  alt="">
                        <h3>Intro to Robot Programming – ROS</h3>
                       
                    </div>
                </div>
                <div class="col-md-3 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="{{ asset('assets/client/images/services/t2.png') }}"  alt="">
                        <h3>Robot Navigation</h3>
                        
                    </div>
                </div>
                <div class="col-md-3 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="{{ asset('assets/client/images/services/t3.png') }}"  alt="">
                        <h3>Machine Learning for Robots</h3>
                      
                    </div>
                </div>
				<div class="col-md-3 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="{{ asset('assets/client/images/services/t4.png') }}"  alt="">
                        <h3>ROS Projects & Robotics Products</h3>
                        
                    </div>
                </div>
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->
@endsection

@section('js_after')

@endsection