@extends('layouts.master')
@section('title')
    James Campbell | Projects
@stop
@section('content')
<article id='projects'>
    <header id="page-header" class='centered'>
        <h1>Projects</h1>
    </header>
    <section class='project-container'>
        <header class="centered">
            <h2>
                <a href="{{ URL::to('/projects/club-app') }}">Club Web Application</a>
            </h2>
        </header>
        <div class="screenshot">
            <img src="/images/club-app-showcase-phone.jpg" alt="club-app-showcase-laptop"/>
        </div>
        <div class="summary">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad aliquam
                cumque debitis deserunt iusto magnam molestiae obcaecati praesentium, quis sit
                soluta ullam velit, voluptatum? Blanditiis nulla optio sit.
            </p>
        </div>
    </section>
    <section class='project-container'>
        <header class="centered">
            <h2>
                <a href="{{ URL::to('/projects/wheresmyspaceship') }}">WheresMySpaceship</a>
            </h2>
        </header>
        <div class="screenshot">
            <img src="/images/wheresmyspaceship-showcase-phone.jpg" alt="club-app-showcase-laptop"/>
        </div>
        <div class="summary">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium ad aliquam
                cumque debitis deserunt iusto magnam molestiae obcaecati praesentium, quis sit
                soluta ullam velit, voluptatum? Blanditiis nulla optio sit.
            </p>
        </div>
    </section>
</article>


@stop