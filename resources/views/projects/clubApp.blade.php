@extends('layouts.master')
@section('title')
    Club App | James Campbell | Web Developer
@stop
@section('content')
    @include('layouts.header')
    <header id="page-header">
        <h1> Club App </h1>

        <p class="light">Web Application</p>
    </header>
    <article id="project-show">

        <section class="project-section">
            <img src="/images/club-app-device-showcase.jpg" alt="club-app-device-showcase" class="screenshot">
            <p>
                This web application was born out of the frustration my friends and I experienced whenever we
                decided to go to
                a nightclub. We'd spend way too much time trying to find parties and even more time trying to agree
                on which
                one to attend. So, I created this site to help streamline the process.
            </p>
        </section>

        <section class="project-section">
            <img src="/images/standing-mobile-device-club-app.jpg" alt="standing-mobile-device-showcase" class="screenshot lg-cushion"/>
        </section>
        <section class="project-section">
            <img src="/images/event-page-breakdown.jpg" alt="event-page-breakdown" class="screenshot lg-cushion"/>
        </section>

        <section class="project-secion">
            <h2 class="centered">Some Markup...</h2>
            <p>
                The site was built with Laravel. It uses the Eloquent ORM, which makes it easy to manage the
                relationships
                between database tables. I also used the <a href="http://carbon.nesbot.com/">Carbon</a> API to
                create
                a custom class to reformat dates for view presentation.
            </p>
        </section>
        <section class="project-section">
            @include('partials.slideshow',
             ['image_1' => '/images/event-show-screenshot.jpg', 'alt_1' => 'event-show-screenshot'],
             ['image_2' => '/images/event-show-code.jpg', 'alt_2' => 'event-show-code']
            )
        </section>
    </article>
    @include('layouts.footer')
@stop