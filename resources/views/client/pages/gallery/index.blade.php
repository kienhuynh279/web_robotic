@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')

<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Gallrey</h2>
               
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                {{-- <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li> --}}
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    @forelse ($images as $image)
                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" style="height: 300px; object-fit: cover; object-position: center;" src="{{$image->Src}}" alt="{{$image->Alt}}">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">{{$image->Alt}}</a></h3>
                                    {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority</p> --}}
                                    <a class="preview" href="{{$image->Src}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    @empty
                        <h1>Chưa có dữ liệu</h1>
                    @endforelse
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
@endsection

@section('js_after')

@endsection