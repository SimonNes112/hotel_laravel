<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HotelBodemijer') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css%22%3E">



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                 <a class="nav-link" href="{{url("")}}">
                    <p class="navbar-brand">Hotel Bodemijer</p>
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <a class="nav" href="{{url("")}}"><img class="foto-hotel" src="{{ asset("\img\Nyumbani_Hotel_Logo.png") }}"></a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Authentication Links -->
                        @guest
                                <li class="nav-brand">
                                    <a class="nav-link" href="{{ url('klant') }}">Onze Kamers</a>
                                </li>


                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="Height: 100%">
            @yield('content')
        </main>
    </div>
    <footer class="">
        <div class="kleur">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UCRC_dXFUK3vnRYWemo0QO-g">Youtbe</a></li>
                            <li><a href="https://www.youtube.com/channel/UCRC_dXFUK3vnRYWemo0QO-g">Youtbe</a></li>
                            <li><a href="https://www.youtube.com/channel/UCRC_dXFUK3vnRYWemo0QO-g">Youtbe</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="{{url("https://instagram.com/henry_bodemeijer?igshid=YmMyMTA2M2Y=")}}">Instagram</a></li>
                            <li><a href="https://instagram.com/henry_bodemeijer?igshid=YmMyMTA2M2Y=">Insta</a></li>
                            <li><a href="https://instagram.com/henry_bodemeijer?igshid=YmMyMTA2M2Y=">Snap</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Hotel Bodemijer</h3>
                        <p>Henry Bodemijer Bedacht in 2002 dit hotel en is sinds toen De baas van het hotel. Hij is een hardwerkende man en heeft deze kamers zelf onderworpen. Henry is een erg bijzonder meneer en heel aardig </p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Henry Bodemijer Hotel © 2022</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
