@extends('layouts.master')
@section('title')
    James Campbell | About Me
@stop
@include('layouts.header')
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
                Javascript (+ jQuery and AJAX), PHP, and Laravel. Learning is always an ongoing process for me. For instance, right now
                I'm digging into design patterns and some of Laravel's advanced features.
            </p>
        </section>
        <section class="about-section">
            <header class="centered">
                <h2>About this site</h2>
            </header>
            <p>
                This site was built with Laravel, jQuery, HTML5, CSS and a bit of Bootstrap.
                The mockups and icons were downloaded from <a href="http://pixeden.com">Pixeden</a> and
                <a href="http://flaticon.com">Flaticon</a>, respectively, and I customized them in photoshop.
                My contact form is powered by SwiftMailer and <a href="https://www.mandrill.com/">Mandrill</a> (side note: Mandrill is super awesome). All photos were taken by me.
            </p>
        </section>
    </div>
</article>
@include('layouts.footer')
@stop
