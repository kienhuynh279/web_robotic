<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <title>Robotic | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Link - Meta - Common -->
    @include('client.inc.head-import')

    <!-- Custom header -->
    @yield('head')
</head>

<body class="sidebar-mini layout-fixed pace-success">

    @include('client.components.header')

    <div class="app">
        @yield('content')
    </div>

    @include('client.components.footer')

    <!-- JS Bundle -->
    @include('client.inc.js-import')

    <!-- JS Dynamic -->
    @yield('js_after')
</body>

</html>