<header id='site-header' class="major-section-header" role='banner'>
    <div class='container-90'>
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
                <img src='/images/mobile-menu.png'>
            </div>
        </nav>
        <nav id='mobile-nav' role='navigation'>
            <ul>
                <li class='container-90'><a href='{{ URL::to("projects") }}'>projects</a></li>
                <li class='container-90'><a href='{{ URL::to("about") }}'>about</a></li>
                <li class='container-90'><a href='{{ URL::to("contact") }}'>contact</a></li>
            </ul>
        </nav>
    </div>
</header>