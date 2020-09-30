@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <h1>Home</h1>
@endsection


=======
    <div class="home-body">
        <div class="container text-light welcome">
            <h1 class="display-3 mb-4 font-weight-bold welcome-message">Welcome to Hangout</h1>
            @if (Auth::guest())
                <a class="text-light btn btn-lg btn-info mr-5 border" role="button" href="{{ route('login') }}">Login</a>
                <a class="text-light btn btn-lg btn-info ml-5 border" role="button" href="{{ route('register') }}">Register</a>
            @else
                <a href="dashboard" class="btn-get-started text-light btn btn-lg btn-info ml-5 border" role="button">Get Started</a>
            @endif
        </div>
    </div>
@endsection
>>>>>>> a423e430... To Do:
