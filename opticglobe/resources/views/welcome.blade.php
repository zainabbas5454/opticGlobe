<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="{{asset('css/main.css')}}" rel="stylesheet"/>
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-expand-lg navbar-light guest-navbar">
            
            <a href="/" class="navbar-brand ml-2">
                <span style=" font-weight: bold; ">OpticGlobe</span>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40px"/>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarText">
                @if(Auth::guard()->check())
                    <div class="navbar-nav ml-auto">
                        <a href="{{ route('home') }}" class="btn custom-btn mr-sm-2 mt-2" >Home</a>
                    </div>
                @else
                    <div class="navbar-nav ml-auto">
                        <a href="{{ route('login') }}" class="btn custom-btn mr-sm-2 mt-2" >Login</a>
                        <a href="{{ route('register') }}" class="btn custom-btn mr-sm-2 mt-2" >Register</a>
                        <a href="{{ route('about') }}" class="btn custom-btn mr-sm-2 mt-2" >About Us</a>
                    </div>
                @endif
            </div>
        </nav>

        <div class="container text-center ">
            <h1 class="mt-5" style=" font-weight: bold; ">START YOUR FREE ONLINE HOLIDAY JOUNRAL TODAY </h1>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center mt-5">
                        <img class="w-100" src="{{ asset('images/photo.jfif') }}" style="max-width: 640px; max-height: 400px" alt="First slide">
                    </div>
                </div>
            </div>

            <br>

            <div class="text-center">
                <a href="{{ route('login') }}" class="btn custom-btn big">START PLAN</a>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>
