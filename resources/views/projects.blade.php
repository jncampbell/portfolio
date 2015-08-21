@extends('layouts.master')
@section('title')
    James Campbell | Projects
@stop
@include('layouts.header')
@section('content')
<article id='project'>
    <header id="page-header" class='centered'>
        <h1>Projects</h1>
    </header>
    <section class="container-90">
        <section class='project-container'>
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
        </section>
        <section class='project-container'>
            <div class='row'>
                <div class="coming-soon-overlay">
                    <h3>WheresMySpaceship</h3>
                    <p>Personal Blog</p>
                    <span class="coming-soon-notice">
                        Coming Soon
                    </span>
                </div>
                <img src='images/wheresmyspaceship-showcase-phone.jpg'>
            </div>
        </section>
    </section>
</article>
@include('layouts.footer')
@stop