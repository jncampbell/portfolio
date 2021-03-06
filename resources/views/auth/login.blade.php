@extends('layouts.master')
@section('title')
    James Campbell | Login
@stop
@section('content')
    @include('layouts.header')
    <header id="page-header">
        <h1>Login</h1>
    </header>
    <div class="container-90">

        <form method="POST" action="{{ url('/auth/login') }}" id="login-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @if(count($errors) > 0)
                <div class="error login-error">
                    Incorrect email or password
                </div>
            @endif
            <div class="input-container">
                <label for="username">Username:</label>
                <input type="username" name="username" class="username" id="username" placeholder="Enter username" value="{{Input::old('username')}}">
            </div>
           <div class="input-container">
                <label for="password">Password:</label>
                <input type="password" name="password" class="password" id="password" placeholder="Enter password">
           </div>
            <div class="input-container checkbox-container">
                <input type="checkbox" name="remember">Remember Me
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

@stop