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
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="">
                            <img class="img-responsive" style="object-fit: cover; object-position: center; height: 200px; width: 100%" src="{{$item->Image}}">
                        </div>
                        <div class="media-body">
                            <p>{{ $item->Title }}</p>
                        </div>
                    </div>
                </div>
                    
            @endforeach
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/#services-->
@endsection

@section('js_after')

@endsection