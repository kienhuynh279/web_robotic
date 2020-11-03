<header class="header">
            <nav class="navbar" role="navigation">
                <div class="container">
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
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item">
                                    <a class="nav-item-child {{ activeMenu('') }}" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child {{ activeMenu('product') }}" href="#">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child {{ activeMenu('services') }}" href="#">Sevices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child {{ activeMenu('resoucres') }}" href="#">Resouces</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child {{ activeMenu('about-us') }}" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child {{ activeMenu('contact') }}" href="#">Contact</a>
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