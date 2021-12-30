<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Food</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen leading-none font-sans">
    @include('include.navbar')
    <div id="content">
        <script src="/assets/jquery.min.js"></script>
        @yield('content')
    </div>
    <script type="text/javascript" src="/js/flowbite.bundle.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>