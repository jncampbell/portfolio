@extends('layouts.master')
@section('title')
    James Campbell | Web Developer
@stop
@section('content')
<article id='home'>
        <section class='intro'>
            <img class='avatar' src='images/avatar.jpg'>
            <h1>
                <div>
                    James Campbell | <span class='hightlight'>Web Developer</span>
                </div>
            </h1>
        </section>
    <nav id="main-nav">
        <ul>
            <div class="row">
                <li onclick="">
                    <a href="{{ URL::to('/projects') }}">
                        <img src="/images/work-icon.png" alt="work-icon">
                        <p>Work</p>
                    </a>
                </li>
                <li onclick="">
                    <a href="{{ URL::to('/images/resume.pdf') }}">
                        <img src="/images/resume-icon.png" alt="resume-icon">
                        <p>Resume</p>
                    </a>
                </li>
            </div>
            <div class="row">
                <li>
                    <a href="{{ URL::to('/about') }}">
                        <img src="/images/about-icon.png" alt="about-icon">
                        <p>About</p>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/contact') }}">
                        <img src="/images/contact-icon.png" alt="work-icon">
                        <p>Contact</p>
                    </a>
                </li>
            </div>
        </uL>
    </nav>
</article>
@stop