<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="width=devicewidth, initialscale=1.0, maximumscale=1.0, userscalable=0" name="viewport" />
  	<meta http-equiv="XUACompatible" content="IE=edge,chrome=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!--     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
<!--     <link href="{{ asset('css/admin.css') }}" rel="stylesheet"> -->
<!--     <link href="{{ asset('css/home.css') }}" rel="stylesheet"> -->
  	<link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
</head>
<body>
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
