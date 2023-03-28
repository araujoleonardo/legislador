<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="vendor/fontawesome/css/brands.css" rel="stylesheet">
    <link href="vendor/fontawesome/css/solid.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand-xl navbar-dark bg-dark shadow mb-4">
                    <a href="#" class="navbar-brand"><i class="fa-solid fa-cube"></i><b>Legislador</b></a>  		
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <!-- Collection of nav links, forms, and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                        
                        <div class="navbar-nav ml-auto">
                            <a href="#" class="nav-item nav-link active"><i class="fa-solid fa-house"></i><span>Home</span></a>
                            <a href="#" class="nav-item nav-link"><i class="fa-regular fa-object-group"></i><span>Painel</span></a>
                            <a href="#" class="nav-item nav-link"><i class="fa-solid fa-users"></i><span>Fóruns</span></a>		
                            <a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i><span>Notifications</span></a>
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="nav-item nav-link"><i class="fa-solid fa-right-to-bracket"></i><span>Login</span></a>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action">
                                    <img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"> 
                                    {{ Auth::user()->name }} <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item"><i class="fa-solid fa-user"></i> Perfil</a>
                                    <a href="#" class="dropdown-item"><i class="fa-solid fa-sliders"></i> Configurar</a>
                                    <div class="divider dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                        </div>                        
                    </div>
                </nav>
                <!-- End of Topbar -->

                @yield('content')

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    </div>


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>
