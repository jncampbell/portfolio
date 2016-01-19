@extends('layouts.master')
@section('title')
    James Campbell | Projects
@stop
@section('content')
    @include('layouts.header')
    <header id="page-header">
        <h1>Projects</h1>
    </header>
    <article id='project-index'>

        <section class="container-90">
            <section class="project-container">

                <h2>Productivity Timer</h2>

                <p class="project-type">Mac OS X Application</p>
                <p class="project-description">
                    An app I created to keep an eye on my productivity when working from home.
                    It tracks how much time I've worked, how many breaks I've taken, and the
                    amount of time I spent on those breaks. It also logs the data to a
                    report so I can have a bird's eye view of my productivity.
                </p>

                <a class="btn btn-project-link" href="https://github.com/jncampbell/timer">
                Github Repo
                </a>

                <a class="btn btn-project-link" href="{{ URL::to('projects/timer') }}">
                Project Overview
                </a>

            </section>
            <section class="project-container">

                <h2>Scaffolder</h2>

                <p class="project-type">PHP Package</p>
                <p class="project-description">
                    A command line tool to generate the boilerplate for a php package. Running the
                    terminal command creates a directory, a nested src directory, a nested tests
                    directory, a prefilled composer.json file, and a prefilled phpunit.xml file.
                </p>


                <a class="btn btn-project-link" href="https://github.com/jncampbell/scaffolder">
                    Github Repo
                </a>


            </section>
            <section class="project-container">

                <h2>Portfolio</h2>

                <p class="project-type">Personal Website</p>
                <p class="project-description">
                    This is the site you're viewing right now but, you probably already knew that.
                </p>

                <a class="btn btn-project-link" href="https://github.com/jncampbell/portfolio">
                    Github Repo
                </a>

            </section>
            <section class="project-container">

                <h2>Nightlife Club App</h2>

                <p class="project-type">PHP Web Application</p>
                <p class="project-description">
                    This app in currently in development. My goal is to radically simplify the process
                    of attending nightclubs with your friends.
                </p>

                <a class="btn btn-project-link" href="{{ URL::to('projects/club-app') }}">
                    Project Overview
                </a>

            </section>
            {{--<section class='project-container'>--}}
                {{--<a class="project-link" href="{{ URL::to('projects/timer') }}">--}}
                    {{--<div class="showcase-overlay">--}}
                        {{--<h3>Productivity Timer</h3>--}}

                        {{--<div class="separator"></div>--}}
                        {{--<p>Mac OS X Application</p>--}}
                    {{--</div>--}}
                    {{--<img src='images/timer-screen2.jpg' alt="club-app-showcase">--}}
                {{--</a>--}}
            {{--</section>--}}
            {{--<section class='project-container'>--}}
                {{--<a class="project-link" href="{{ URL::to('projects/club-app') }}">--}}
                    {{--<div class="showcase-overlay">--}}
                        {{--<h3>Nightlife</h3>--}}

                        {{--<div class="separator"></div>--}}
                        {{--<p>Web Application</p>--}}
                    {{--</div>--}}
                    {{--<img src='images/club-app-showcase-phone.jpg' alt="club-app-showcase">--}}
                {{--</a>--}}
            {{--</section>--}}
        </section>
    </article>
    @include('layouts.footer')
@stop