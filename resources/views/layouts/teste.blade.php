<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
                <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
                    <a href="#" class="navbar-brand"><i class="fa fa-cube"></i><b>Legislador</b></a>  		
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Collection of nav links, forms, and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
                        <div class="navbar-nav ml-auto">
                            <a href="#" class="nav-item nav-link active"><i class="bi bi-house-fill" title="Home"></i></i><span>Home</span></a>
                            <a href="#" class="nav-item nav-link"><i class="bi bi-people-fill"  title="Fóruns"></i><span>Fóruns</span></a>
                            <a href="#" class="nav-item nav-link"><i class="bi bi-grid-1x2-fill"  title="Painel"></i><span>Painel</span></a>
                            <a href="#" class="nav-item nav-link"><i class="bi bi-info-square-fill"  title="Home"></i><span>Sobre</span></a>
                            <a href="#" class="nav-item nav-link"><i class="bi bi-bell-fill"  title="Home"></i><span>Notificações</span></a>
                            <div class="topbar-divider d-none d-sm-block"></div>

                            @guest
                                <!-- Nav Item - register or login -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">
                                        @if (Route::has('register'))
                                            <a class="dropdown-item" href="{{ route('register') }}">
                                                <i class="bi bi-person-plus-fill mr-2 text-gray-400"></i>
                                                Registre-se
                                            </a>
                                        @endif

                                        <div class="dropdown-divider"></div>

                                        @if (Route::has('login'))
                                            <a class="dropdown-item" href="{{ route('login') }}">
                                                <i class="bi bi-box-arrow-in-right mr-2 text-gray-400"></i>
                                                Faça login
                                            </a>
                                        @endif
                                    </div>
                                </li>
                            @else
                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span
                                            class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Settings
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
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
