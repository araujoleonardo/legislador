<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/quill/dist/quill.snow.css') }}">


    <!-- Styles -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    
    @yield('css')
    
    <style>
        .dropdown-toggle::after {
            content: none;
        }
        .navbar {
            background-color: #141619;
        }
        @media (min-width: 767px) {
            .navbar {
                padding: 2px;
            }

            .user-dd {
                width: 300px;
            }
        }
        
    </style>
</head>
<body style="background-color: #eeeeee">
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper -->
    <div>
        <nav class="navbar navbar-expand-md navbar-dark pl-3">
            <a href="/" class="navbar-brand"><b>Legislador</b></a>  		
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        
                <ul class="navbar-nav ml-auto">
            
                    <li class="nav-item m-1">
                        <a class="nav-link waves-effect waves-dark" href="/" title="Home" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-home font-24"></i></a>
                    </li>

                    <li class="nav-item m-1">
                        <a class="nav-link waves-effect waves-dark" href="" title="Fórum" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-forum font-24"></i></a>
                    </li>

                    <li class="nav-item m-1">
                        <a class="nav-link waves-effect waves-dark" href="/home" title="Painel" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-dashboard font-24"></i></a>
                    </li>
            
                    <li class="nav-item dropdown m-1">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" title="Notificação" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
            
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item m-1">
                                <a class="nav-link waves-effect waves-dark" href="{{ route('login') }}" title="Login" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-login font-24"></i>
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown m-1">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

                                <a class="dropdown-item" href="javascript:void(0)">
                                    <img src="{{ asset('img/1.jpg') }}" alt="user" class="rounded-circle" width="31">
                                        {{ Auth::user()->name }} /
                                        {{ Auth::user()->perfil }}
                                </a>

                                <div class="dropdown-divider"></div>
                                
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>                                    

                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                </a>                                   

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest                
                    <!-- User profile and search -->                
                </ul>
            </nav>
        </nav>
    
    
        <div class="container-fluid mt-4">
        
            <main class="">
                @yield('content')
            </main>        
    
        </div>

    </div>

    <!-- All Jquery -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    @yield('js')
</body>
</html>
