<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8"/>
    <title>Robotic | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    @yield('head-import')
</head>

<body class="sidebar-mini layout-fixed pace-success">
     @yield('main')
     @yield('js-import')
</body>

</html>
