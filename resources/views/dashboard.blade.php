@extends('layouts.master')
@section('title')
    James Campbell | Dashboard
@stop
@section('content')
    @include('layouts.header')
    <div class="container-90">
        <article id="dashboard">
            <header class="centered border-bottom lg-cushion">
                <h1>Dashboard</h1>
            </header>
            <section id="visitors" class="xl-cushion">
                <header><h2>Visitors</h2></header>
                <p class="xl-font sm-cushion">
                    10
                </p>
            </section>
            <section id="projects" class="xl-cushion">
                <header><h2>Projects</h2></header>
                <ul class="option-container lg-cushion">
                    <li class="option new-option">
                        <a href="{{ url('projects/new') }}">
                            <header class="top-heavy-cushion">New</header>
                            <img class='lg-icon' src="/images/add-icon.png">
                        </a>
                    </li>
                    <li class="option edit-option">
                        <a href="{{ url('projects/edit') }}">
                            <header class="top-heavy-cushion">Edit</header>
                            <img class='lg-icon' src="/images/edit-icon.png">
                        </a>
                    </li>
                    <li class="option delete-option">
                        <a href="{{ url('projects/delete') }}">
                            <header class="top-heavy-cushion">Delete</header>
                            <img class='lg-icon' src="/images/delete-icon.png">
                        </a>
                    </li>
                </ul>
            </section>
            <section id="contact" class="xl-cushion">
                <header><h2>Contact Information</h2></header>

                <form method="POST" action="{{ url('/contact-info') }}" id="contact-info-form" class="lg-cushion">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-container">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" value="">
                    </div>
                    <div class="input-container">
                        <label>Github:</label>
                        <input type="text" name="github" id="github" value="">
                    </div>
                    <div class="input-container">
                        <label>LinkedIn:</label>
                        <input type="text" name="linkedin" id="linkedin" value="">
                    </div>
                    <div id="add-contact-info" class='sm-cushion'>
                        <img class="lg-icon" src="/images/add-icon.png">
                        <div class="xs-cushion">Add New</div>
                    </div>
                </form>
            </section>
        </article>
    </div>
@stop