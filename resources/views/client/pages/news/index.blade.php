@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
    <section id="blog" class="container">
        <div class="center">
            <h2>NEWS</h2>            
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-12">
                     @foreach($news as $new)
                     
                    <div class="blog-item">
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <h2><a href="{{ route('detailNew', $new->NewId) }}">{{ $new->Title }}</a></h2>
                                <a href="#"><img class="img-responsive img-blog" src="{{ $new->Image}}" width="100%" alt="" /></a>
                           
                                <h3>{!! substr($new->Description,0,400) !!}</h3>
                            <a class="btn btn-primary readmore" href="{{ route('detailNew', $new->NewId) }}">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                    @endforeach 
                </div><!--/.col-md-8-->

                
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
@endsection

@section('js_after')

@endsection