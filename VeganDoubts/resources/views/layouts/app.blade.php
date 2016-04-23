<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VeganDoubts</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"-->
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <header>
        <div class="media">
            <div class="video">
                <!--video autoplay="true" loop="true" class="fillWidth" muted="" controls width=”720″ height=”480″>
                    <source src="/media/video.mp4" type="video/mp4">
                    <source src="/media/video.mp4" type="video/ogg">
                    </video-->
                    <div class="img650"><img src="/media/frutas-1280x650.jpg"></div>
                    <div class="degradado"></div><section class="cover"></section>
                    <div class="cont_media row">
                        <div id="logo"><a href="http://localhost:8000/3"><img src="/media/logo.png"></a></div>
                    </div>
                    <div class="container">
                        <div class="navbar-header">
                            <nav class="nav">
                                <ul class="hide-on-med-and-down">
                                    <li><a href="/home">Home</a></li>
                                    @if(Auth::check())
                                    <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Categories<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                                    <ul id='dropdown2' class='dropdown-content'>
                                        @foreach($categorias as $cat)
                                        <li><a id="{{$cat->id}}" href="">{{$cat->categoria}}</a></li>
                                        @endforeach
                                    </ul>
                                    <li><a href="/Pregunta/create">Make a question</a></li>
                                    <li><a href="/Pregunta">My Questions</a></li>
                                    <li><a href="/logout">Log out</a></li>
                                    @endif
                                </ul>
                                <ul id="slide-out" class="side-nav">
                                    <li><a href="/home">Home</a></li>
                                    @if(Auth::check())
                                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categories<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                                    <ul id='dropdown1' class='dropdown-content'>
                                        @foreach($categorias as $cat)
                                        <li><a id="{{$cat->id}}" href="">{{$cat->categoria}}</a></li>
                                        @endforeach
                                    </ul>
                                    <li><a href="/Pregunta/create">Make a question</a></li>
                                    <li><a href="/Pregunta">My Questions</a></li>
                                    <li><a href="/logout">Log out</a></li>
                                    @endif
                                </ul>
                                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container content_all">
            @yield('content')
        </div>
        <footer class="container z-depth-1">
            <section>&copy; VeganDoubts . All rights Reserved.</section>
            <!-- JavaScripts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script src="<?php echo asset('js/materialize.min')?>.js"></script>
            <script src="<?php echo asset('js/app')?>.js"></script>
            {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
        </footer>
        
    </body>
    </html>
