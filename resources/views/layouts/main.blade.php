<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">    

    <!-- Styles -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper -->
    <div id="main-wrapper">

        <!-- Topbar header -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">            
                    <!-- Logo -->            
                    <a class="navbar-brand" href="/">
                        <!-- Logo icon -->
                        <h1>Legislador</h1>
                    </a>    
                </div>
        
                <!-- End Logo -->
        
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            
                    <!-- toggle and nav items -->
            
                    <ul class="navbar-nav float-left mr-auto"></ul>
            
                    <!-- Right side toggle and nav items -->
            
                    <ul class="navbar-nav float-right">
                
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="" title="Home" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-home font-24"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="" title="Fórum" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-forum font-24"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="" title="Painel" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-dashboard font-24"></i>
                            </a>
                        </li>
                
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" title="Notificação" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                
                        <!-- User profile and search -->
                        <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route('login') }}" title="Login" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-login font-24"></i>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">

                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> {{ Auth::user()->name }} </a>
                                    
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>

                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>

                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> {{ route('logout') }}
                                    </a>                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <div class="dropdown-divider"></div>

                                    <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                                </div>
                            </li>
                        @endguest                
                        <!-- User profile and search -->                
                    </ul>
                </div>
            </nav>
        </header>

        <!-- End Topbar header -->
        
        <!-- Page wrapper  -->

        <div class="">   
    
            <!-- Container fluid  -->
    
            <div class="container-fluid">
        
                <!-- Start Page Content -->
        
                <main class="">
                    @yield('content')
                </main>
                    
                <!-- End PAge Content -->
        
            </div>
    
        </div>

        <!-- End Page wrapper  -->
    </div>

    <!-- All Jquery -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>
</html>
