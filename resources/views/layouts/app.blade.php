<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- Authentication Links -->
@include('layouts.navbar')
<div id="main">
    @yield('content')
</div>
<!-- Scripts -->
</body>
<footer>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</footer>
</html>
