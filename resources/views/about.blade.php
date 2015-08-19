@extends('layouts.master')
@section('title')
    James Campbell | About Me
@stop
@section('content')

<article id='about'>
    <div id='about-banner'>
        <img src='images/about-code.jpg'>
    </div>
    <div class='container-90'>
        <header id="page-header" class='centered'>
            <h1>about me</h1>
        </header>
        <section class='about-section'>
            <p>
                Hi! I'm James Campbell, a web developer from Brooklyn, NY. I kind of wandered into
                the development world as a senior at Baruch College when I registered for a C++
                course and fell absolutely in love with coding. It was all I wanted to do -
                all day, every day. After graduating with a degree in Entrepreneurship &
                Management I continued coding and discovered a passion for web
                development. I'm also equally passionate about business and
                love opportunities to combine the two. If I'm not coding,
                I'm probably reading, working out, or at home with my
                girlfriend watching something with a high IMDB
                rating.
            </p>
            <p>
                I love creating elegant, user-friendly websites. I'm comfortable using HTML, CSS,
                Javascript (+ jQuery and AJAX), PHP, and Laravel. Learning is always an ongoing process for me. Right now
                I'm learning design patterns and some of Laravel's advanced features.
            </p>
        </section>
        <section class="about-section">
            <header class="centered">
                <h2>About this site</h2>
            </header>
            <p>
                This site was built with Laravel, jQuery, HTML5, CSS and a little bit of Bootstrap.
                I downloaded the mockups from <a href="http://pixeden.com">pixeden.com</a> and
                the icons from <a href="http://flaticon.com">flaticon.com</a>, which I
                customized with photoshop. Laravel comes bundled with SwiftMailer so,
                that's what I used to run my contact form.
            </p>
        </section>
    </div>
</article>

@stop