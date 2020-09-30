<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .home-body{
                background-image: url("{{URL::asset('storage/images/bg1.jpg')}}");
                background-repeat: no-repeat;
                background-size: cover;
            }
            .welcome{
                padding: 200px 0;
                text-align: center; 
            }
            .welcome-message{
                text-shadow: 2px 2px #000000;
            }
            a.btn-lg{
                width: 15%;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            @include('inc.navbar')
            <div class="container main">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>
        {{-- @include('inc.footer') --}}
    </body>
</html>
