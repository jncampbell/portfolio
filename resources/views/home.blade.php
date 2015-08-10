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
        <header class='centered'><h2>Recent Projects</h2></header>
        <div class='project-container'>
            <div class='row'>
                <img src='images/tweetmap.jpg'>
            </div>
        </div>
        <div class='project-container'>
            <div class='row'>
                <img src='images/tweetmap.jpg'>
            </div>
        </div>
    </section>
</article>
@stop