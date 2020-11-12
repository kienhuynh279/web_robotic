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

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/client/images/services/s1.png') }}">
                        </div>
                        <div class="media-body">
                            
                            <p>2D, 3D laser, Visual SLAM (simultaneous localization and mapping) and navigation for automated mobile robot</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/client/images/services/s2.png') }}">
                        </div>
                        <div class="media-body">
                           
                            <p>AI and computer vision  application for cleaning and logistic robot</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/client/images/services/s3.png') }}">
                        </div>
                        <div class="media-body">
                        
                            <p>Design of  multiple robot system</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/client/images/services/s4.png') }}">
                        </div>
                        <div class="media-body">
                            
                            <p>IOT based Robot Operation System (ROS)</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/client/images/services/s5.png') }}">
                        </div>
                        <div class="media-body">
                            
                            <p>2D and 3D laser based object detection applied in docking and charging and obstacle avoidance, SLAM  of robot</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/client/images/services/s6.png') }}">
                        </div>
                        <div class="media-body">
                            
                            <p>Adaptive generating morphology and path planning strategies while deployment in new environments</p>
                        </div>
                    </div>
                </div>
				<div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{ asset('assets/client/images/services/s7.png') }}">
                        </div>
                        <div class="media-body">
                            
                            <p>Adaptive control of  robot network</p>
                        </div>
                    </div>
                </div>  				
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