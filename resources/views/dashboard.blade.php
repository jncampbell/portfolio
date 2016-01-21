@extends('layouts.master')
@section('title')
    James Campbell | Dashboard
@stop
@section('content')
    @include('layouts.header')
    <div class="container-90">
        <article id="dashboard">
            <header id="page-header">
                <h1>Dashboard</h1>
            </header>
            <section id="visitors" class="dashboard-section">
                <header><h2>Visitors</h2></header>
                <p class="xl-font">
                     {{ $recentVisitors }}
                </p>
            </section>
            <section id="projects" class="dashboard-section">
                <header><h2>Projects</h2></header>
                <ul class="option-container">
                    <li class="option new-option">
                        <a href="{{ url('/projects/new') }}">
                            <header>New</header>
                            <img class='lg-icon' src="/images/add-icon.png">
                        </a>
                    </li>
                    <li class="option edit-option">
                        <a href="{{ url('/projects/edit') }}">
                            <header>Edit</header>
                            <img class='lg-icon' src="/images/edit-icon.png">
                        </a>
                    </li>
                    <li class="option delete-option">
                        <a href="{{ url('/projects/delete') }}">
                            <header>Delete</header>
                            <img class='lg-icon' src="/images/delete-icon.png">
                        </a>
                    </li>
                </ul>
            </section>
            <section id="contact" class="dashboard-section">
                <header><h2>Contact Information</h2></header>

                <form method="POST" action="{{ url('/contact-info') }}" id="contact-info-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-container">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" value="{{ $user->email }}">
                    </div>
                    <div class="input-container">
                        <label>Github:</label>
                        <input type="text" name="github" id="github" value="{{ $user->github }}">
                    </div>
                    <div class="input-container">
                        <label>LinkedIn:</label>
                        <input type="text" name="linkedin" id="linkedin" value="{{ $user->linkedin }}">
                    </div>
                    <div id="add-contact-info">
                        <img class="lg-icon" src="/images/add-icon.png">
                        <div>Add New</div>
                    </div>
                </form>
            </section>
        </article>
    </div>
@stop