@extends('layouts.master')
@section('title')
    Projects | Create New
@stop
@section('content')
    @include('layouts.header')
    <article id="add-project">
        <div>
            <header class="centered border-bottom lg-cushion">
                <h1>
                    Add Project
                </h1>
            </header>
            <form method="POST" action="{{ url('/media/photos') }}" class="dropzone xl-claustrophobia">
                {{ csrf_field() }}
            </form>

            <form method="POST" action="{{ url('/projects/create') }}" id="create-project-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class='input-container'>
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="{{ Input::old('title') }}">
                </div>
                <div class='input-container'>
                    <label for="category">Category:</label>
                    <input type="text" name="category" id="category" value="{{ Input::old('category') }}">
                </div>
                <div class="input-container">
                    <label for="image-1">Summary:</label>
                    <textarea rows="10" cols="100" name="summary" id="summary">
                        {{ Input::old('summary') }}
                    </textarea>
                </div>
                {{--<div class="input-container">--}}
                    {{--<label for="showcase">Showcase Image:</label>--}}
                    {{--<div id="showcaseImage" class="image-upload"></div>--}}
                {{--</div>--}}
                {{--<div class="input-container">--}}
                    {{--<label for="image-1"> Image:</label>--}}
                    {{--<div id="showcaseImage" class="image-upload"></div>--}}
                {{--</div>--}}

                {{--<div class='input-container'>--}}
                    {{--<label for="body">Body:</label>--}}
                    {{--<textarea rows="20" cols="100" name="body" id="body">--}}
                        {{--{{ Input::old('body') }}--}}
                    {{--</textarea>--}}
                {{--</div>--}}
                <button type="submit">Submit</button>
            </form>
        </div>
    </article>
@stop