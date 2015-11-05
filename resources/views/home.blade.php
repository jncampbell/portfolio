@extends('layouts.master')
@section('title')
    James Campbell | Web Developer
@stop
@section('content')
    <article id='home'>
        <section class='intro'>
            <img class='avatar' src='images/avatar.jpg' alt="avatar">

            <h1>
                James Campbell | <span class='hightlight'>Web Developer</span>
            </h1>
        </section>
        <nav class="main-nav lg-head-claustrophobia grow-on-hover">
            <ul>
                <li>
                    <a href="{{ URL::to('/projects') }}">
                        <img src="/images/work-icon.png" alt="work-icon">
                        <span>Work</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/images/resume.pdf') }}">
                        <img src="/images/resume-icon.png" alt="resume-icon">
                        <span>Resume</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/about') }}">
                        <img src="/images/about-icon.png" alt="about-icon">
                        <span>About</span>
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="social grow-on-hover">
            <ul>
                <li>
                    <a href="https://www.github.com/jncampbell">
                        <img src="/images/github-icon.png" alt="github-icon">
                        <span>Github</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/contact') }}">
                        <img src="/images/contact-icon.png" alt="work-icon">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </nav>
    </article>
@stop