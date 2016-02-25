@extends('layouts.master')
@section('title')
    Club App | James Campbell | Web Developer
@stop
@section('content')
    @include('layouts.header')

    <header id="page-header">
        <h1> Keltrist </h1>
        <p class="project-type">PHP Web Application</p>
    </header>

    <article id="project-show">
        <div id="page-wrap">
            <section class="project-section">
                <img src="/images/keltrist-family.png" alt="club-app-device-showcase" class="screenshot">
                <p>
                    This web application was born out of the frustration my friends and I experienced whenever we
                    decided to go to a nightclub. We'd spend way too much time trying to find parties and even
                    more time trying to agree on which one to attend. So, I created this site to help
                    streamline the process.
                </p>
            </section>

            <section class="project-section">
                <img src="/images/keltrist-standing.png" alt="standing-mobile-device-showcase"
                     class="screenshot"/>
            </section>

            <section class="project-section">
                <img src="/images/keltrist-info.png" alt="event-page-breakdown" class="screenshot"/>
            </section>

            <section class="project-section">
                <h2>Some Markup...</h2>
                <p>
                    The site was built with Laravel. It uses the Eloquent ORM, which makes it easy to manage the
                    relationships between database tables. I also used the <a href="http://carbon.nesbot.com/">Carbon
                    </a> API to create a custom class to reformat dates for view presentation.
                </p>
                @include('partials.slideshow',
                 ['image_1' => '/images/keltrist-event-screenshot.png', 'alt_1' => 'event-screenshot'],
                 ['image_2' => '/images/keltrist-event-html.png', 'alt_2' => 'event-html']
                )
            </section>
        </div>

    </article>
    @include('layouts.footer')
@stop