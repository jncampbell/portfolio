@extends('layouts.master')
@section('title')
    James Campbell | Web Developer
@stop
@section('content')
<article id='home'>
    <div class='looking-glass'>
        <section class='intro'>
            <img class='avatar' src='images/avatar.jpg'>
            <div>
                <h1>
                    James Campbell
                    <br>
                    <span class='hightlight'>Web Developer</span>
                    <br>
                    Brooklyn, NY
                </h1>
            </div>
        </section>
    </div>
    <section class='container-1100'>
        <header id="page-header" class='centered'>
            <h2>Recent Projects</h2>
        </header>
        <div class='project-container'>
            <a href="{{ URL::to('projects/club-app') }}">
                <div class='row'>
                    <div class="showcase-overlay">
                        <h3>Nightlife</h3>
                        <div class="separator"></div>
                        <p>Web Application</p>
                    </div>
                    <img src='images/club-app-showcase-phone.jpg'>
                </div>
            </a>
        </div>
        <div class='project-container'>
            <a href="{{ URL::to('projects/wheresmyspaceship') }}">
                <div class='row'>
                    <div class="showcase-overlay">
                        <h3>WheresMySpaceship</h3>
                        <p>Personal Blog</p>
                    </div>
                    <img src='images/wheresmyspaceship-showcase-phone.jpg'>

                </div>
            </a>
        </div>
    </section>
</article>
@stop