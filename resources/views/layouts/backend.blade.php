@php
    // you can make nested children attribute max: 6 times
    /**
     * 
     * * * You can make nested children attribute max: 6 times
     * 
     * */

    function module($name = "", $req = "", $href = "", $icon = "fa fa-cog", $children = [], $section = null, $isParent = false) {
        return [
            "name" => $name, // name module
            "request" => request()->is($req) || request()->is($req."/*") ? $isParent ? ' open' : ' active' : '',
            "href" => $href, // Write Route(web.php) here
            "icon" => $icon, // fontawesome
            "children" => $children, // children module
            "section" => $section // auto null if not add value for this param
        ];
    }

    $modules = [
        module(
            "Tổng quan",
            'admin/dashboard/*',
            "dashboard",
            "fa fa-edit",
            [],
            "Dashboard",
            true
        ),
        module(
            "Quản trị tài khoản",
            'admin/users',
            "#",
            "fa fa-users",
            [
                module(
                    "Danh sách tài khoản",
                    'admin/users/',
                    route("admin.users.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm tài khoản",
                    'admin/accounts/users',
                    route("admin.users.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "Hệ thống",
            true
        ),
        module(
            "Quản trị tin tức",
            'admin/news',
            "#",
            "fa fa-book",
            [
                module(
                    "Danh sách tin tức",
                    'admin/users/',
                    route("admin.news.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm tin tức",
                    'admin/accounts/users',
                    route("admin.news.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "",
            true
        ),
        module(
            "Quản trị thể loại",
            'admin/categories',
            "#",
            "fa fa-bookmark",
            [
                module(
                    "Danh sách thể loại",
                    'admin/users/',
                    route("admin.categories.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm thể thoại",
                    'admin/accounts/users',
                    route("admin.categories.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "",
            true
        ),

        module(
            "Quản trị ứng dụng",
            'admin/application',
            "#",
            "fa fa-info-circle",
            [
                module(
                    "Danh sách ứng dụng",
                    'admin/users/',
                    route("admin.application.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm ứng dụng",
                    'admin/accounts/users',
                    route("admin.application.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "",
            true
        ),

        module(
            "Quản trị hình ảnh",
            'admin/docs',
            "#",
            "fa fa-image",
            [
                module(
                    "Danh sách hình ảnh",
                    'admin/image/',
                    route("admin.image.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm tin tức",
                    'admin/image/create',
                    route("admin.image.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "",
            true
        ),
        
        module(
            "Quản trị sản phẩm",
            'admin/product',
            "#",
            "fa fa-cube",
            [
                module(
                    "Danh sách sản phẩm",
                    'admin/product/',
                    route("admin.product.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm tin tức",
                    'admin/product/create',
                    route("admin.product.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "",
            true
        ),

        module(
            "Quản trị dịch vụ",
            'admin/service',
            "#",
            "fa fa-check",
            [
                module(
                    "Danh sách dịch vụ",
                    'admin/service/',
                    route("admin.service.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm dịch vụ",
                    'admin/service/create',
                    route("admin.service.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "", 
            true
        ),

        module(
            "Quản trị tin tức",
            'admin/docs',
            "#",
            "fa fa-newspaper",
            [
                module(
                    "Danh sách tin tức",
                    'admin/docs/',
                    route("admin.docs.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm tin tức",
                    'admin/docs/create',
                    route("admin.docs.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "",
            true
        ),

        module(
            "Quản trị loại dịch vụ",
            'admin/type',
            "#",
            "fa fa-bookmark",
            [
                module(
                    "Danh sách loại dịch vụ",
                    'admin/type/',
                    route("admin.type.index"),
                    "fa fa-list",
                    [
                        
                    ] ,
                    null,
                    true
                ),
                module(
                    "Tạo thêm loại dịch vụ",
                    'admin/type/create',
                    route("admin.type.create"),
                    "fa fa-edit",
                    [
                        
                    ] ,
                    null,
                    true
                ),
            ],
            "",
            true
        ),
    ];
@endphp

<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title', config("APP_NAME"))</title>

    <meta name="description"
        content="Laravel Kit - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
    @yield('css_after')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
    </script>
</head>

<body>
    <div id="page-container"
        class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="bg-image"
                style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}');">
                <div class="bg-primary-op">
                    <div class="content-header">
                        <!-- User Avatar -->
                        <a class="img-link mr-1" href="javascript:void(0)">
                            <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                        </a>
                        <!-- END User Avatar -->

                        <!-- User Info -->
                        <div class="ml-2">
                            <a class="text-white font-w600" href="javascript:void(0)">George Taylor</a>
                            <div class="text-white-75 font-size-sm">Full Stack Developer</div>
                        </div>
                        <!-- END User Info -->

                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout"
                            data-action="side_overlay_close">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Side Overlay -->
                    </div>
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <div class="block pull-x mb-0">
                    <!-- Color Themes -->
                    <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase font-size-sm font-w700">Color Themes</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny text-center">
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-default" data-toggle="theme"
                                    data-theme="default" href="#">
                                    Default
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xwork" data-toggle="theme"
                                    data-theme="{{ mix('css/themes/xwork.css') }}" href="#">
                                    xWork
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xmodern" data-toggle="theme"
                                    data-theme="{{ mix('css/themes/xmodern.css') }}" href="#">
                                    xModern
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xeco" data-toggle="theme"
                                    data-theme="{{ mix('css/themes/xeco.css') }}" href="#">
                                    xEco
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xsmooth" data-toggle="theme"
                                    data-theme="{{ mix('css/themes/xsmooth.css') }}" href="#">
                                    xSmooth
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xinspire"
                                    data-toggle="theme" data-theme="{{ mix('css/themes/xinspire.css') }}" href="#">
                                    xInspire
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xdream" data-toggle="theme"
                                    data-theme="{{ mix('css/themes/xdream.css') }}" href="#">
                                    xDream
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xpro" data-toggle="theme"
                                    data-theme="{{ mix('css/themes/xpro.css') }}" href="#">
                                    xPro
                                </a>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="d-block py-3 text-white font-size-sm font-w600 bg-xplay" data-toggle="theme"
                                    data-theme="{{ mix('css/themes/xplay.css') }}" href="#">
                                    xPlay
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Color Themes -->

                    <!-- Sidebar -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase font-size-sm font-w700">Sidebar</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny text-center">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Sidebar -->

                    <!-- Header -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase font-size-sm font-w700">Header</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny text-center mb-2">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="header_style_light" href="javascript:void(0)">Light</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="header_mode_static" href="javascript:void(0)">Static</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Header -->

                    <!-- Content -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase font-size-sm font-w700">Content</span>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny text-center">
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                            </div>
                            <div class="col-6 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                            </div>
                            <div class="col-12 mb-1">
                                <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout"
                                    data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Content -->
                </div>
                <div class="block pull-x mb-0">
                    <!-- Content -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                        <span class="text-uppercase font-size-sm font-w700">Heading</span>
                    </div>
                    <div class="block-content">
                        <p>
                            Content..
                        </p>
                    </div>
                    <!-- END Content -->
                </div>
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="bg-header-dark">
                <div class="content-header bg-white-10 justify-content-lg-center">
                    <!-- Logo -->
                    <a class="font-w600 text-white tracking-wide" href="/">
                        <span class="smini-visible">
                            D<span class="opacity-75">x</span>
                        </span>
                        <span class="smini-hidden">
                            Laravel<span class="opacity-75">Kit</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Toggle Sidebar Style -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->

                        <!-- <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler"
                            data-class="fa-toggle-off fa-toggle-on"
                            onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');"
                            href="javascript:void(0)">
                            <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                        </a> -->
                        
                        <!-- END Toggle Sidebar Style -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close"
                            href="javascript:void(0)">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        @foreach ($modules as $module)
                        @if ($module["section"] ?? false)
                        <li class="nav-main-heading">{{$module["section"]}}</li>
                        @endif
                        <li class="nav-main-item {{$module["request"]}}">
                            <a class="nav-main-link {{count($module["children"]) !== 0 ? "nav-main-link-submenu" : ""}}" 
                                @if (count($module["children"]) !== 0)
                                    data-toggle="submenu" 
                                    aria-haspopup="true"    
                                    aria-expanded="true" 
                                @endif
                                href="{{$module['href']}}">
                                <i class="nav-main-link-icon {{$module["icon"] !== null ? $module["icon"] : "fa fa-cog"}}"></i>
                                <span class="nav-main-link-name">{{$module["name"]}}</span>
                            </a>
                            {{-- Sub 1 --}}
                            @if (count($module["children"]) !== 0)
                            <ul class="nav-main-submenu">

                                {{-- Show Sub 1 --}}
                                @foreach ($module["children"] as $_module)
                                <li class="nav-main-item {{$_module["request"]}}">
                                    <a class="nav-main-link {{count($_module["children"]) !== 0 ? "nav-main-link-submenu" : ""}}" 
                                        @if (count($_module["children"]) !== 0)
                                            data-toggle="submenu" 
                                            aria-haspopup="true"    
                                            aria-expanded="true" 
                                        @endif    
                                        href="{{$_module['href']}}">
                                        <i class="nav-main-link-icon {{$_module["icon"] !== null ? $_module["icon"] : "fa fa-cog"}}"></i>
                                        <span class="nav-main-link-name">{{$_module["name"]}}</span>
                                    </a>
                                    {{-- Sub 2 --}}
                                    @if (count($_module["children"]) !== 0)
                                    <ul class="nav-main-submenu">
                                        
                                        {{-- Show Sub 2 --}}
                                        @foreach ($_module["children"] as $__module)
                                        <li class="nav-main-item {{$__module["request"]}}">
                                            <a class="nav-main-link {{count($__module["children"]) !== 0 ? "nav-main-link-submenu" : ""}}" 
                                                @if (count($__module["children"]) !== 0)
                                                    data-toggle="submenu" 
                                                    aria-haspopup="true"    
                                                    aria-expanded="true" 
                                                @endif     
                                                href="{{$__module['href']}}">
                                                <i class="nav-main-link-icon {{$__module["icon"] !== null ? $__module["icon"] : "fa fa-cog"}}"></i>
                                                <span class="nav-main-link-name">{{$__module["name"]}}</span>
                                            </a>
                                            {{-- Sub 3 --}}
                                            @if (count($__module["children"]) !== 0)
                                            <ul class="nav-main-submenu">
                                                
                                                {{-- Show sub 3 --}}
                                                @foreach ($__module["children"] as $___module)
                                                <li class="nav-main-item {{$___module["request"]}}">
                                                    <a class="nav-main-link {{count($___module["children"]) !== 0 ? "nav-main-link-submenu" : ""}}"  
                                                        @if (count($___module["children"]) !== 0)
                                                            data-toggle="submenu" 
                                                            aria-haspopup="true"    
                                                            aria-expanded="true" 
                                                        @endif    
                                                        href="{{$___module['href']}}">
                                                        <i class="nav-main-link-icon {{$___module["icon"] !== null ? $___module["icon"] : "fa fa-cog"}}"></i>
                                                        <span class="nav-main-link-name">{{$___module["name"]}}</span>
                                                    </a>
                                                    {{-- Sub 4 --}}
                                                    @if (count($___module["children"]) !== 0)
                                                    <ul class="nav-main-submenu">
                                                        
                                                        {{-- Show Sub 4 --}}
                                                        @foreach ($___module["children"] as $____module)
                                                        <li class="nav-main-item {{$____module["request"]}}">
                                                            <a class="nav-main-link {{count($____module["children"]) !== 0 ? "nav-main-link-submenu" : ""}}" 
                                                                @if (count($____module["children"]) !== 0)
                                                                    data-toggle="submenu" 
                                                                    aria-haspopup="true"    
                                                                    aria-expanded="true" 
                                                                @endif    
                                                                href="{{$____module['href']}}">
                                                                <i class="nav-main-link-icon {{$____module["icon"] !== null ? $____module["icon"] : "fa fa-cog"}}"></i>
                                                                <span class="nav-main-link-name">{{$____module["name"]}}</span>
                                                            </a>
                                                            {{-- Sub 5 --}}
                                                            @if (count($____module["children"]) !== 0)
                                                            <ul class="nav-main-submenu {{$_____module["request"]}}">
                                                                
                                                                {{-- Show sub 5 --}}
                                                                @foreach ($____module["children"] as $_____module)
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link {{count($_____module["children"]) !== 0 ? "nav-main-link-submenu" : ""}}" 
                                                                        @if (count($_____module["children"]) !== 0)
                                                                            data-toggle="submenu" 
                                                                            aria-haspopup="true"    
                                                                            aria-expanded="true" 
                                                                        @endif    
                                                                        href="{{$_____module['href']}}">
                                                                        <i class="nav-main-link-icon {{$_____module["icon"] !== null ? $_____module["icon"] : "fa fa-cog"}}"></i>
                                                                        <span class="nav-main-link-name">{{$_____module["name"]}}</span>
                                                                    </a>

                                                                    {{-- @if (count($____module["children"]) !== 0)
                                                                    <ul class="nav-main-submenu">
                                                                        
                                                                        @foreach ($____module["children"] as $_____module)
                                                                            
                                                                        @endforeach
                                                                    </ul>
                                                                    @endif --}}
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>    
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div>
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search</span>
                    </button>
                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div>
                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="badge badge-secondary badge-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                                Notifications
                            </div>
                            <ul class="nav-items my-2">
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-check-circle text-success"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">App was updated to v5.6!</div>
                                            <div class="text-muted font-italic">3 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-user-plus text-info"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">New Subscriber was added! You now have 2580!</div>
                                            <div class="text-muted font-italic">10 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-times-circle text-danger"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">Server backup failed to complete!</div>
                                            <div class="text-muted font-italic">30 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">You are running out of space. Please consider
                                                upgrading your plan.</div>
                                            <div class="text-muted font-italic">1 hour ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-dark media py-2" href="javascript:void(0)">
                                        <div class="mx-3">
                                            <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                        </div>
                                        <div class="media-body font-size-sm pr-2">
                                            <div class="font-w600">New Sale! + $30</div>
                                            <div class="text-muted font-italic">2 hours ago</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="p-2 border-top">
                                <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-eye mr-1"></i> View All
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Notifications Dropdown -->

                    {{-- API Toggle Side bar data-toggle="layout" data-action="side_overlay_toggle" --}}

                    <!-- User Dropdown V2 -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-dual dropdown-toggle" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-avatar img-avatar32 img-avatar-thumb" src="{{asset('media/avatars/avatar1.jpg')}}" alt="">
                            <span class="d-none d-sm-inline ml-1">
                                @auth
                                    {{Auth::user()->firstname. " " . Auth::user()->lastname}}
                                @else
                                    Guest
                                @endauth
                            </span>
                            <span class="badge badge-pill badge-warning ml-1">.genius</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0" aria-labelledby="page-header-user-dropdown" style="">
                            <div class="rounded-top font-w600 text-white text-center bg-image" style="background-image: url('{{asset('media/photos/photo13.jpg')}}');">
                                <div class="p-3">
                                    <img class="img-avatar img-avatar-thumb" src="{{Auth::check() ? Auth::user()->avatar : asset('media/avatars/avatar1.jpg')}}" alt="">
                                </div>
                                <div class="p-3 bg-black-75">
                                    <a class="text-white font-w600" href="be_pages_generic_profile.html">
                                        @auth
                                            {{Auth::user()->firstname. " " . Auth::user()->lastname}}
                                        @else
                                            Guest
                                        @endauth
                                    </a>
                                    <div class="text-white-75">
                                        @auth
                                            {{Auth::user()->email}}
                                        @else
                                            Email@laravelkit.com
                                        @endauth
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                    Profile
                                    <i class="fa fa-fw fa-user text-black-50 ml-1"></i>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                    Bookings
                                    <div>
                                        <span class="badge badge-pill badge-primary">3</span>
                                        <i class="fa fa-fw fa-pencil-alt text-black-50 ml-1"></i>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                    Travel Guides
                                    <i class="fa fa-fw fa-plane text-black-50 ml-1"></i>
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                    Billing
                                    <div>
                                        <span class="badge badge-pill badge-primary">1</span>
                                        <i class="fa fa-fw fa-money-bill-wave-alt text-black-50 ml-1"></i>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                    Settings
                                    <i class="fa fa-fw fa-cog text-black-50 ml-1"></i>
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                
                                <!-- Logout -->
                                <form id="logout-js" action="{{route("auth.handle_logout")}}" method="POST"> {{-- route("auth.handle_logout") --}}
                                    @csrf
                                </form>
                                <a onclick="document.querySelector('#logout-js').submit()" class="dropdown-item d-flex justify-content-between align-items-center" href="javascript:void(0)">
                                    Đăng xuất
                                    <i class="fa fa-fw fa-sign-out-alt text-danger ml-1"></i>
                                </a>
                                <!-- End Logout -->
                            </div>
                        </div>
                    </div>
                    <!-- End User Dropdown V2 -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-primary">
                <div class="content-header">
                    <form class="w-100" action="/dashboard" method="POST">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-primary" data-toggle="layout"
                                    data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary-darker">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <div class="content">
                @yield('content')
            </div>
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600"
                            href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                        <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Dashmix</a> &copy; <span
                            data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Dashmix Core JS -->
    <script src="{{ mix('js/dashmix.app.js') }}"></script>

    <!-- Laravel Scaffolding JS -->
    <!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->

    <!-- Modules -->

    <!-- CKEditor -->
    <script src="{{asset("/js/modules/ckeditor/ckeditor.js")}}"></script>
    <script src="{{asset("/js/functions/main.js")}}"></script>
    <script>
        ckeditorConfig("editor");
    </script>

    @include('ckfinder::setup')

    <script type="text/javascript" src="{{asset("js/ckfinder/ckfinder.js")}}"></script>
    <script>CKFinder.config( { connectorPath: '/ckfinder/connector' } );</script>

    <script>
        function selectFileCKFinder( elementId ) {
            CKFinder.popup( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( elementId );
                        output.value = file.getUrl();
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( elementId );
                        output.value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
    </script>

    @yield('js_after')
</body>

</html>