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
                <h2>Keltrist</h2>

                <p class="project-type">PHP Web Application</p>
                <p class="project-description">
                    This app in currently in development. My goal is to simplify the process
                    of attending nightclubs with your friends.
                </p>

                <a href="https://keltrist.com" class="btn btn-project-link">
                    Link To Site
                </a>
                <a class="btn btn-project-link" href="{{ URL::to('projects/keltrist') }}">
                    Project Overview
                </a>
            </section>

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
                    terminal command creates a directory that includes an src directory, a
                    tests directory, a prefilled composer.json file, and a prefilled phpunit.xml file.
                </p>


                <a class="btn btn-project-link" href="https://github.com/jncampbell/scaffolder">
                    Github Repo
                </a>
            </section>

            <section class="project-container">
                <h2>Portfolio</h2>

                <p class="project-type">Personal Website</p>
                <p class="project-description">
                    This is the site you're viewing right now but...you probably already knew that.
                </p>

                <a class="btn btn-project-link" href="https://github.com/jncampbell/portfolio">
                    Github Repo
                </a>
            </section>

        </section>
    </article>
    @include('layouts.footer')
@stop