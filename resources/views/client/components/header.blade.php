<header class="header">
    <nav class="navbar" role="navigation">
        <div class="container flex-nowrap">
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>
                <div class="navbar-logo">
                    <a class="navbar-logo-wrap" href="{{ route('home') }}">
                        <img class="navbar-logo-img" src="{{ asset('assets/client/img/logo.png') }}" alt="Acidus Logo">
                    </a>
                </div>
            </div>
            <!-- Menu -->
            <div class="collapse navbar-collapse nav-collapse ml-auto text-right">
                <div class="menu-container d-flex justify-content-end w-100">
                    <ul class="navbar-nav navbar-nav-right d-flex flex-row float-none">
                        <li class="nav-item">
                            <a class="nav-item-child {{ activeMenu('') }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child {{ activeMenu('product') }}" href="{{ route('product') }}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child {{ activeMenu('service') }}" href="{{ route('service') }}">Sevices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child {{ activeMenu('resource') }}" href="{{ route('docs') }}">Resoucre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child {{ activeMenu('about') }}" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child {{ activeMenu('contact') }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
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