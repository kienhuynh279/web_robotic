    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                @for ($i = 0; $i < count($banners); $i++)
                <li data-target="#main-slider" data-slide-to="{{$i}}" class="@if($i === 1) active @endif"></li>
                @endfor
            </ol>
            <div class="carousel-inner" style="position: relative;">

                @foreach ($banners as $i => $banner)
                <div class="item @if($i === 0) active @endif" @if($banner->Background) style="background-image: url({{ $banner->Background }})" @endif>
                    @if ($banner->Video)
                        <div style="position: absolute;
                        right: 0;
                        bottom: 0;
                        min-width: 100%; 
                        min-height: 100%;">
                            <video id="video" width="100%" height="100%" style="object-fit: cover" controls autoplay loop>
                                <source src="{{$banner->Video}}" type="video/mp4">
                                <source src="{{$banner->Video}}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    @if (!isset($banner->Video))
                                    <h1 class="animation animated-item-1">{{$banner->Title}}</h1>
                                    <h2 class="animation animated-item-2">{{$banner->Description}}</h2>
                                    @endif
                                    {{-- <a class="btn-slide animation animated-item-3" href="{{$banner->Link}}">Read More</a> --}}
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="{{$banner->Object}}" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                @endforeach

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
