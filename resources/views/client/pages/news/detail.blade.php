@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
<section id="blog" class="container">
    <div class="center">
        <h2></h2>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="{{ $news->Image }}" width="100%" alt="" />
                    <div class="row">

                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h2>{{$news->Title}}</h2>
                            <p>{!!$news->Description!!}</p>
                        </div>
                    </div>
                </div>
                <!--/.blog-item-->





            </div>
            <!--/.col-md-8-->

            <aside class="col-md-4">


                <div class="widget categories">
                    <h3>ANOTHER NEWS</h3>

                    @foreach($all as $i)
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="single_comments">
                                <a href="{{ route('detailNew', $i->NewId) }}') }}">
                                    <img width="90px" src="{{ $i->Image }}" alt="" />
                                    <p>{{$i->Title}} </p>
                                    <div class="entry-meta small muted">
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--/.recent comments-->
            </aside>

        </div>
        <!--/.row-->

    </div>
    <!--/.blog-->


</section>
<!--/#blog-->
@endsection

@section('js_after')

@endsection