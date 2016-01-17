<!DOCTYPE html>
<html lang='en' class="no-js">
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
    <meta name="description" content="Web developer from Brooklyn, NY.">
    <meta name="keywords" content="web developer, web development, new york web developer, php developer, laravel developer">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="images/x-icon">
    <link rel='stylesheet' href='/css/app.css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>