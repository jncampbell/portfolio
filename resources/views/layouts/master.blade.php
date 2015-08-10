<!DOCTYPE>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width' initial-scale='1' maximum-scale='1' user-scalable='no'>
    <link rel='stylesheet' href='css/app.css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>
<div class='wrap'>
    <header id='site-header' role='banner'>
        <div class='container-1100'>
            <nav id='site-nav' role='navigation'>
                <div id='site-logo'>
                    <a href='/'>jnc</a>
                </div>
                <ul>
                    <li><a href='{{ URL::to("projects") }}'>projects</a></li>
                    <li><a href='{{ URL::to("about") }}'>about</a></li>
                    <li><a href='{{ URL::to("contact") }}'>contact</a></li>
                </ul>
                <div id='mobile-nav-toggle'>
                    <img src='images/mobile-menu3.png'>
                </div>
            </nav>
            <nav id='mobile-nav' role='navigation'>
                <ul>
                    <li class='container-1100'><a href='{{ URL::to("projects") }}'>projects</a></li>
                    <li class='container-1100'><a href='{{ URL::to("about") }}'>about</a></li>
                    <li class='container-1100'><a href='{{ URL::to("contact") }}'>contact</a></li>
                </ul>
            </nav>

        </div>
    </header>
    @yield('content')
    <footer role='contentinfo'>
        <ul class='social-media'>
            <li><a href='http://www.linkedin.com/'><img src='/images/linkedin-icon.png'></a></li>
            <li><a href='http://www.instagram.com/wheresmyspaceship'><img src='/images/instagram-icon.png'></a></li>
        </ul>
        <div class='copyright'> &copy 2015 &middot J.N. Campbell &middot All Rights Reserved</div>
    </footer>
</div>
</body>
<script src="javascript/scripts.js"></script>
</html>