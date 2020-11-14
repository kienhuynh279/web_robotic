@extends('layouts.client')

@section('title')
    Traning
@endsection

@section('content')

<section id="feature" class="transparent-bg">
    <div class="container">
       <div class="center wow fadeInDown">
            <h2>TRAINING</h2>
            
        </div>           

        <div class="row">
            <div class="col-md-3 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/services/t1.png"  alt="">
                    <h3>Intro to Robot Programming – ROS</h3>
                   
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/services/t2.png"  alt="">
                    <h3>Robot Navigation</h3>
                    
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/services/t3.png"  alt="">
                    <h3>Machine Learning for Robots</h3>
                  
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="images/services/t4.png"  alt="">
                    <h3>ROS Projects & Robotics Products</h3>
                    
                </div>
            </div>
       </div>

    </div><!--/.container-->
</section><!--/#feature-->


@endsection

@section('js_after')

@endsection