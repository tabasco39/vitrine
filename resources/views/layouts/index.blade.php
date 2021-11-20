<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


    <title>Tanora Web</title>
</head>
<body>
<!-- menu -->
<div class="container-fluid global-menu" style="padding: 0 !important; position: fixed; top:0; background-color:white; z-index:5" >
        <div>
            <img src="{{asset('img/logo_menu.png')}}" alt="logo" width="150px" style="margin: 20px 10px;">
        </div>
        <!-- burger menu -->
        <section class="p-menu1">
            <nav id="navbar" class="navigation" role="navigation">
                <input id="toggle1" type="checkbox" />
                <label class="hamburger1" for="toggle1">
                    <div class="top"></div>
                    <div class="meat"></div>
                    <div class="bottom"></div>
                </label>

                <nav class="menu1">
                    <a class="link1 text-uppercase" href="">accueil</a>
                    <a class="link1 text-uppercase" href="#presentation">présentation</a>
                    <a class="link1 text-uppercase" href="#stack">app mobile</a>
                    <a class="link1 text-uppercase" href="#stack">web</a>
                    <a class="link1 text-uppercase" href="#service">services</a>
                    <a class="link1 text-uppercase" href="#">projets</a>
                    <a class="link1 text-uppercase" href="#par">references</a>
                    <a class="link1 text-uppercase" href="#contact">contact</a>
                </nav>
            </nav>
        </section>
        <!--end burger menu-->
        <div class=" menu-list" >
            <ul style="position: absolute; top:5px; right:10px">
                <li><a href="#accueil">accueil</a></li>
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#stack"> mobile</a></li>
                <li><a href="#stack">web</a></li>
                <li><a href="#service">services</a></li>
                <li><a href="#">projets</a></li>
                <li><a href="#par">references</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </div>
</div>

<!-- menu -->
<div>
    @yield('content')
</div>
</body>
</html>
