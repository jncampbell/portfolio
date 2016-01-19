@extends('layouts.master')
@section('title')
    James Campbell | Contact
@stop
@section('content')
    @include('layouts.header')
    <article id='contact'>
        <div id='contact-banner'>
            <img src='images/desktop.jpg' alt="desktop-photo">
        </div>
        <header id="page-header">
            <h1>contact me</h1>
        </header>

        <div class='section-broadcast'>
            @if (Session::has('success'))
                <p class="submission-success">{{ Session::get('success') }}</p>
            @elseif($errors->all())
                @if ($errors->count() > 1)
                    <p class="error"> Oops! There were some errors.</p>
                @else
                    <p class="error"> Oops! There was an error.</p>
                @endif
            @else
                <p class='light'>I check my messages pretty often, so I'll usually respond within 24 hours.</p>
            @endif
        </div>
        <form id='contact-form' method='POST' action='#' novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label for='email'>Email</label>
            @if($errors->first('email'))
                <span class="error font-small">{{ ucfirst($errors->first('email')) }}</span>
            @endif
            <input type='email' name='email' id='email' value="{{ Input::old('email') }}">


            <label for='subject'>Subject</label>
            @if($errors->first('subject'))
                <span class="error font-small">{{ ucfirst($errors->first('subject')) }}</span>
            @endif
            <input type='text' name='subject' id='subject' value="{{ Input::old('subject') }}">


            <label for='message'>Message</label>
            @if($errors->first('message'))
                <span class='error font-small'> {{ ucfirst($errors->first('message')) }} </span>
            @endif
            <textarea rows='8' name='message' id='message'>{{ Input::old('message') }}</textarea>

            <button type='submit'>Send Message</button>
        </form>
    </article>
    @include('layouts.footer')
@stop