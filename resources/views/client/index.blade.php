@extends('layouts.client')

@section('title')
    Trang chủ
@endsection

@section('content')
@include('client.components.banner')

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>ARAR’S FAMILY OF AUTONOMOUS MOBILE ROBOTS (ARARBOT) WORK IN</h2>
                <p class="lead">------</p>
            </div>				
				
            <div class="row">			
				
                <div class="features">				
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
							<i class='fa fa-heartbeat' style='color:red'></i>
                            <h2>Hospital</h2>
                            <p>Autonomous Mobile robot solutions to transport and deliver lab samples, medication, hospital supplies and much more enabling the staff to focus on ‘caring’</p>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-hospital-o" style='color:#fc7c02'></i>
                            <h2>Hospitality</h2>
                            <p>Dynamic autonomous navigation with round the clock delivery of linen, food supplies and anything a customer could request from the room. Our Multi-point delivery robots are a perfect solution for ...</p>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-city"></i>
                            <h2>Office</h2>
                            <p>Requires no facility modifications and available with many customization options. Create an efficiency work environment by automating delivery of documents, office facilities,…</p>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-shopping-cart" style='color:green'></i>
                            <h2>Retail</h2>
                            <p>An innovative way to attract customers to sell tickets, directory information, and vouchers. All this made possible even with less staff. Our robots are a boost to your business</p>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-shipping-fast" style='color:#000'></i>
                            <h2>Logistics</h2>
                            <p>AMR has the capability of moving materials and clinical supplies almost anywhere you need. High payload, cart automatic pickup, inventory tracking, etc.</p>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fas fa-users" style='color:orange'></i>
                            <h2>Events</h2>
                            <p>From transporting high-value chips, serving drinks and food, to being an attraction in itself, our robot solutions are a perfect investment for events</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

   
    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>WORKING SCENARIOS</h2>
                <p class="lead">---------------</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/hospital.jpg') }}">
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                          <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/hotel.jpg') }}">
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/office.jpg') }}">
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/retaurant.jpg') }}">
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/factory.jpg') }}">
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <img class="img-responsive" src="{{ asset('assets/client/images/WORKING-SCENARIOS/coffeehouse.jpg') }}">
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

   

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
				<img class="img-responsive" src="{{ asset('assets/client/images/techmetics-advantage_.png') }}">
                  </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{ asset('assets/client/images/partners/partner1.png') }}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{ asset('assets/client/images/partners/partner2.png') }}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{ asset('assets/client/images/partners/partner3.png') }}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{ asset('assets/client/images/partners/partner4.png') }}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{ asset('assets/client/images/partners/partner5.png') }}"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
@endsection