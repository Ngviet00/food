<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link id="theme-style" rel="stylesheet" href="/assets/css/portal.css">
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="app">
    <header class="app-header fixed-top">
        @include('admin.layouts.header_top')
        @include('admin.layouts.sidebar')
    </header>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <script src="/assets/jquery.min.js"></script>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script defer src="/assets/plugins/fontawesome/js/all.min.js"></script>
    <script src="/assets/plugins/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/chart.js/chart.min.js"></script>
    <script src="/assets/js/index-charts.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/js/admin.js"></script>
</body>
</html>
