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
            .masthead{
                min-height: 30rem;
                position: relative;
                background: url("{{URL::asset('storage/images/bg1.jpg')}}");
                background-repeat: no-repeat;
                background-size: cover;
                height:auto;
                width:100%;
            }
            .welcome{
                padding: 200px 0;
                text-align: center;
                background-color: #ffffff1a;
            }
            .welcome-message{
                text-shadow: 7px 7px #ffffff60;
            }
            a.btn-lg{
                width: 15%;
                padding: 10px;
            }
        </style>
    </head>
    <body id="app">
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
        {{-- @include('inc.footer') --}}
    </body>
</html>