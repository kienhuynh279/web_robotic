<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number">
                        <p><i class="fa fa-phone-square"></i> 0913 681353 – 0778 805 117 - (+84) 366 818 469 | <i
                                class="fas fa-envelope"></i> minh.do@arra.vn </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube fa-lg"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin fa-lg"></i></a></li>

                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('assets/client/images/logo_.ico') }}" alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="{{ activeMenu('') }}"><a href="{{ route('home') }}">Home</a></li>

                    <li class="dropdown {{ activeMenu('product') }}">
                        <a href="{{route("product")}}" class="dropdown-toggle" data-toggle="dropdown">Products <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            @foreach($menuProduct as $i)
                            <li><a href="{{route("productDetail", $i->ProductId)}}">{{$i->Title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="dropdown ">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Services <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="{{ route('solution') }}">Solutions</a></li>
                            <li><a href="{{ route('traning') }}">Training</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">RESOURCES <i
                                class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('news') }}">News</a></li>
                            {{-- <li><a href="{{ route('gallery') }}">GALLERY</a></li> --}}
                            {{-- <li><a href="{{ route('news') }}">DOCUMENTS</a></li> --}}
                        </ul>
                    </li>

                    <li class=""><a class="{{ activeMenu('/about') }}" href="{{ route('about') }}">ABOUT US</a></li>
                    <li class="{{activeMenu('/contact')}}"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->

</header>
<?php 
    function activeMenu($uri = '') {
        $active = '';
        if (Request::segment(1) == $uri) {
            $active = 'active';
        }
        return $active;
    }
?>