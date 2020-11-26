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
                <div class="media services-wrap-detail wow fadeInDown" style="height: auto; max-height: 100%; padding: 15px">
                    <div class="" style="display: flex">
                        <img class="img-responsive"
                            style="object-fit: cover; object-position: center; height: 100px; width: 100px"
                            src="{{$item->Image}}">
                        <div class="media-body" style="margin-left: 20px">
                            <p>{{ $item->Title }}</p>
                        </div>
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