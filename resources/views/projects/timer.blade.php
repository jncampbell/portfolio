@extends('layouts.master')
@section('title')
    Projects | Timer
@stop
@section('content')
    @include('layouts.header')

    <header id="page-header">
        <h1>Productivity Timer</h1>
        <p class="project-type">Mac OS X Application</p>
    </header>

    <article id="project-show">

        <section class="project-section">
            <p class="project-description">
                I created this application because I wanted to track some basic productivity measures
                when I'm working from home. For each session, it records how long I've worked, how many
                breaks I've taken, and the cumulative time spent on those breaks. It then logs the
                data to a file, which is used to generate a report I can view anytime.
            </p>
            <img src="/images/timer-1.jpg" alt="Mac OS X Timer" class="screenshot">
        </section>

        <section class="project-section">
            <h2>How Does it Work?</h2>
            <p class="project-description">
                It's a very simple app that includes a timer that I use to start, pause, and end a session. When a
                session ends, the data is saved to a file and the timer is reset in preparation for the next
                session.
            </p>
            <img src="/images/timer-2.jpg" alt="Mac OS X Timer" class="screenshot">
            <p class="project-description">
                Generating a report is as easy as Menu &#10141; View &#10141; Show Report.
            </p>
            <img src="/images/timer-4.jpg" alt="Mac OS X Timer" class="screenshot">
            <p class="project-description">
                The report contains four columns including the date and each of the metrics.
            </p>
            <img src="/images/timer-3.jpg" alt="Mac OS X Timer" class="screenshot">
        </section>

        <section class="project-section">
            <h2>Takeaways</h2>
            <p class="project-description">
                This was my first time building a Mac application or using the Swift programming language so, a lot
                of this process was familiarizing myself with some aspects of Mac development including Storyboards,
                autolayout and Swift.
            </p>
            <p class="project-description">
                There are several things I want to add to the app including reminders to take stretch and water breaks
                and the ability to set the data file's save location in the app's preferences pane.
            </p>
        </section>

    </article>
    @include('layouts.footer')
@stop