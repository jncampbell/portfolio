@extends('layouts.master')
@section('title')
    James Campbell | About Me
@stop
@section('content')
    @include('layouts.header')
    <article id='about'>
        <div id='about-banner'>
            <img src='images/about-code.jpg' alt="code-photo">
        </div>
        <header id="page-header">
            <h1>About Me</h1>
        </header>
        <div id='page-wrap'>

            <section class="about-section">
                <p>
                I'm James Campbell, a web developer from Brooklyn, NY. My interest in software
                started as a senior at Baruch College when I registered for a C++ course and
                fell absolutely in love with coding. It was all I wanted to do - all day,
                every day. After graduating with a B.B.A in Entrepreneurship &
                Management (another area I'm passionate about), I continued
                coding and discovered a passion for web development. My
                plan is to deepen my knowledge of software, build my
                network and eventually launch a startup of my own.
                Along the way I'm hoping to connect with talented
                people who really want to make an impact on the world.
            </p>
            </section>

            <section class="about-section">

                <h2>About this site</h2>

                <p>
                    This site was built with Laravel, jQuery, HTML5, CSS and a bit of Bootstrap.
                    The mockups and icons were downloaded from <a class="hightlight" href="http://pixeden.com">Pixeden</a> and
                    <a class="hightlight" href="http://flaticon.com">Flaticon</a>, respectively, and I customized them in Photoshop.
                    My contact form is powered by SwiftMailer and <a class="hightlight" href="https://www.mandrill.com/">Mandrill</a>.
                    All photos were taken by me.
                </p>
            </section>

        </div>
    </article>
    @include('layouts.footer')
@stop
