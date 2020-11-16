@extends('layouts.client')

@section('title')
    Traning
@endsection

@section('content')

<section id="feature" class="transparent-bg">
    <div class="container">
       <div class="center wow fadeInDown">
            <h2>TRAINING</h2>
            
        </div>           

        <div class="row">
            
            @foreach($trainings as $item)

            @if($type->TypeId === $item->TypeId)
            <div class="col-md-3 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="{{ $item->Image }}"  alt="">
                    <h3>{{$item->Title}}</h3>
                </div>
            </div>
            @endif
            
            @endforeach
       </div>

    </div><!--/.container-->
</section><!--/#feature-->


@endsection

@section('js_after')

@endsection