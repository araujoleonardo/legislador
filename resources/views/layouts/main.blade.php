<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    @yield('css')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Links externos -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body, h1, h2, h3, h4, h5 {
            font-family: "Open Sans", sans-serif
        }
    </style>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body class="w3-theme-l5">
        <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">
                <i class="fa fa-home w3-margin-right"></i>
                Logo
            </a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News">
                <i class="fa fa-globe"></i>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings">
                <i class="fa fa-user"></i>
            </a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages">
                <i class="fa fa-envelope"></i>
            </a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-padding-large" title="Notifications">
                    <i class="fa fa-bell"></i>
                    <span class="w3-badge w3-right w3-small w3-green">3</span>
                </button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                    <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                    <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
                    <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
                </div>
            </div>
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
                <img src="/img/avatar.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
            </a>
        </div>
    </div>

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        @yield('js')
    </body>
</html>