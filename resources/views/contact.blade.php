@extends('layouts.master')
@section('title')
    James Campbell | Contact
@stop
@section('content')
<article id='contact'>
    <div id='contact-banner'>
        <img src='images/desktop.jpg'>
    </div>
    <header id="page-header" class="centered">
        <h1>contact me</h1>
    </header>

    <div class='section-broadcast'>
        @if (Session::has('success'))
            <p class="submission-success">{{ Session::get('success') }}</p>
        @elseif($errors->all())
            @if ($errors->count() > 1)
                <p class="error"> Oops! There were some errors.</p>
            @elseif ($errors->count())
                <p class="error"> Oops! There was an error.</p>
            @endif
        @else
            <p class='light'>I check my messages pretty often so I'll usually respond within 24 hours.</p>
        @endif
    </div>
    <form id='contact-form' method='POST' action='' novalidate>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @if($errors->first('email'))
            <span class="error font-small">{{ ucfirst($errors->first('email')) }}</span>
        @endif
        <label for='email'>Email</label>
        <input type='email' name='email' value="<?php if (Input::old('email')) { print Input::old('email'); } ?>" placeholder='Your Email'>

        @if($errors->first('subject'))
            <span class="error font-small">{{ ucfirst($errors->first('subject')) }}</span>
        @endif
        <label for='subject'>Subject</label>
        <input type='text' name='subject' value="<?php if (Input::old('subject')) { print Input::old('subject'); } ?>"placeholder='Subject'>

        @if($errors->first('message'))
            <span class='error font-small'> {{ ucfirst($errors->first('message')) }} </span>
        @endif
        <label for='message'>Message</label>
        <textarea rows='8' name='message' placeholder="What's up?"><?php if (Input::old('message')) { print Input::old('message'); } ?></textarea>

        <button type='submit'>Send Message</button>
    </form>
</article>
@stop