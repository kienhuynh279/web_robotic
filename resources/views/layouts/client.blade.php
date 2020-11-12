<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME | ARAR</title>

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