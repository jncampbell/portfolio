@extends('layouts.master')
@section('title')
    James Campbell | Login
@stop
@section('content')


    <div class="flex-container">
        <header id="login-header">
            <h1>Login</h1>
        </header>
        <form method="POST" action="{{ url('/auth/login') }}" id="login-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @if(count($errors) > 0)
                <div class="critical centered">
                    Incorrect email or password
                </div>
            @endif

            <label for="username">Username:</label>
            <input type="username" name="username" class="username" id="username" placeholder="Enter username" value="{{Input::old('username')}}">
            <label for="password">Password:</label>
            <input type="password" name="password" class="password" id="password" placeholder="Enter password">
            <button type="submit">Login</button>
        </form>
    </div>

@stop