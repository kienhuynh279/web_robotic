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
                                <a href="#"><img class="img-responsive img-blog" src="{{ $new->Image}}" width="100%" alt="" /></a>
                            <h2><a href="{{ route('detailNew', $new->NewId) }}">{{ $new->title }}</a></h2>
                                <h3>{!! substr($new->Description,0,400) !!}</h3>
                            <a class="btn btn-primary readmore" href="{{ route('detailNew', $new->NewId) }}">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                    @endforeach 
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
@endsection

@section('js_after')

@endsection