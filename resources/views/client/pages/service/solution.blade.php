@extends('layouts.client')

@section('title')
Solution
@endsection

@section('content')
<section id="services-detail" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>SOLUTIONS</h2>

        </div>
        <div class="row">
            @foreach ($solutions as $item)
                @if ($item->TypeId === $type->TypeId)

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap-detail wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="{{$item->Image}}">
                        </div>
                        <div class="media-body">
                            <p>{{ $item->Title }}</p>
                        </div>
                    </div>
                </div>
                    
                @endif
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