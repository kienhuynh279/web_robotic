<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-logo">
                <a href="{{ route('home') }}"><h2 class="navbar-logo-img">Logo</h2></a>
                {{-- <a class="navbar-logo-wrap" href="{{ route('home') }}">
                    <img class="navbar-logo-img" src="{{ asset('assets/client/img/logo.png') }}" alt="Acidus Logo">
                </a> --}}
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-item-child {{ activeMenu('') }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-child {{ activeMenu('product') }}" href="{{ route('product') }}">Product</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-item-child {{ activeMenu('service') }}" href="{{ route('service') }}">Sevices</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-item-child" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item nav-item" href="{{ route('service') }}">News</a>
                            <a class="dropdown-item nav-item" href="{{ route('service') }}">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-child" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resource</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item nav-item" href="{{ route('news') }}">News</a>
                            <a class="dropdown-item nav-item" href="{{ route('gallery') }}">Gallery</a>
                            <a class="dropdown-item nav-item" href="{{ route('docs') }}">Documents</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-child {{ activeMenu('about') }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-child {{ activeMenu('contact') }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
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