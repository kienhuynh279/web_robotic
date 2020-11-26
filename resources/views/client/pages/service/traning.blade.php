@extends('layouts.client')

@section('title')
    Traning
@endsection

@section('content')

<section id="feature" class="transparent-bg">
    <div class="container">
       <div class="center wow fadeInDown">
            <h2 style="padding-top: 40px">TRAINING</h2>
            
        </div>           

        <div class="row">
            
            @foreach($trainings as $item)

            <div class="col-md-3 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img style="object-fit: cover; object-position: center" src="{{ $item->Image }}"  alt="">
                    <h3>{{$item->Title}}</h3>
                </div>
            </div>
            @endforeach
       </div>

    </div><!--/.container-->
</section><!--/#feature-->


@endsection

@section('js_after')

@endsection