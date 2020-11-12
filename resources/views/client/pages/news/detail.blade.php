@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
 <section id="blog" class="container">
        <div class="center">
            <h2>TITLE...</h2>            
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="{{ asset('assets/client/images/blog/blog1.jpg') }}" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date">07  NOV</span>
                                        <span><i class="fa fa-user"></i> <a href="#"> John Doe</a></span>
                                        <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                                        <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2>5 Top Robotics Solutions Impacting Hospital Care During A Pandemi</h2>
                                    <p>StartUs Insight's Innovation Analysts recently looked into emerging technologies and up-and-coming startups working on emerging solutions that mitigate the effects of the Coronavirus pandemic. Take a look at some of the top robotics solutions impacting hospital care...</p>

                                    <p>StartUs Insight's Innovation Analysts recently looked into emerging technologies and up-and-coming startups working on emerging solutions that mitigate the effects of the Coronavirus pandemic. Take a look at some of the top robotics solutions impacting hospital care...</p>

                                    

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                       



                    </div><!--/.col-md-8-->

                <aside class="col-md-4">

    				
    				<div class="widget categories">
                        <h3>ANOTHER NEWS</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
    								<img src="{{ asset('assets/client/images/blog/avatar3.png') }}" alt=""  />
    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span </span>On <a href="#">Creative</a></span>
                                    </div>
    							</div>
    							<div class="single_comments">
    								<img src="{{ asset('assets/client/images/blog/avatar3.png') }}" alt=""  />
    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    								<div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                    </div>
    							</div>
    							<div class="single_comments">
    								<img src="{{ asset('asset/client/images/blog/avatar3.png') }}" alt=""  />
    								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    								<div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                    </div>
    							</div>
    							
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->	
                </aside>     

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
@endsection

@section('js_after')

@endsection