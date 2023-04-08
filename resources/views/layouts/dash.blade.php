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
    
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

    <style>
        .image-rounded {
            width: 40px; /* width of container */
            height: 40px; /* height of container */
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
    
    @yield('css')

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
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            
                    <!-- Logo -->            
                    <a class="navbar-brand" href="/home">
                        <h1>Legislador</h1>
                    </a>         
            
                    <!-- Toggle which is visible on mobile only -->            
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
        
                <!-- End Logo -->
        
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            
                    <!-- toggle and nav items -->
            
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- Search -->
                    </ul>
            
                    <!-- Right side toggle and nav items -->
            
                    <ul class="navbar-nav float-right">
                
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="/" title="Home" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-home font-24"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="" title="Fórum" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-forum font-24"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="/home" title="Painel" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-dashboard font-24"></i>
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
                
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route('login') }}" title="Login" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-login font-24"></i>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if (Auth::user()->image)
                                        <img src="{{ asset('img/users/' . Auth::user()->image) }}" alt="user" class="image-rounded" width="31">
                                    @else
                                        <img src="{{ asset('img/users/avatar.png') }}" alt="user" class="image-rounded" width="31">
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">

                                    <a class="dropdown-item" href="javascript:void(0)">
                                        @if (Auth::user()->image)
                                            <img src="{{ asset('img/users/' . Auth::user()->image) }}" alt="user" class="image-rounded" width="31">
                                        @else
                                            <img src="{{ asset('img/users/avatar.png') }}" alt="user" class="image-rounded" width="31">
                                        @endif
                                        {{ Auth::user()->name }} |
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
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->

        <!-- Sidebar -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Usuário </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('user-list') }}" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Listar </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('user-create') }}" class="sidebar-link"><i class="fas fa-edit"></i><span class="hide-menu"> Cadastrar </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-map"></i><span class="hide-menu">Região </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('regiao-list') }}" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Listar </span></a></li>
                                <li class="sidebar-item"><a href="{{ route('regiao-create') }}" class="sidebar-link"><i class="fas fa-edit"></i><span class="hide-menu"> Cadastrar </span></a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        
        <!-- Page wrapper  -->
        <div class="page-wrapper">    
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

    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>

    @yield('js')
</body>
</html>
