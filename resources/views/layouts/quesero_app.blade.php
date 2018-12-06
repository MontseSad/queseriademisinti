<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/metisMenu/metisMenu.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js') }}"></script>
    <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('assets/scripts/common.js') }}"></script>
    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}" defer></script-->

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/metisMenu/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{  asset('assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
                </div>
                <!-- logo -->
                <div class="navbar-brand">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="DiffDash Logo" class="img-responsive logo"></a>
                </div>
                <!-- end logo -->
                <div class="navbar-right">
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- LEFT SIDEBAR -->
        <div id="left-sidebar" class="sidebar">
            <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
                <span class="sr-only">Toggle Fullwidth</span>
                <i class="fa fa-angle-left"></i>
            </button>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <img src="{{ asset('assets/img/user.png') }}" class="img-responsive img-circle user-photo" alt="User Profile Picture">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">Hola, <strong>{{ Auth::user()->name }} </strong> <i
                                class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="/Quesero">My Profile</a></li>
                            <li><a href="#">Messages</a></li>
                            <!--li><a href="#">Settings</a></li-->
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form></li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                            <li><a href="#/Quesero/elaboracion" aria-expanded="false"><i class="lnr lnr-diamond"></i> <span>Elaboración</span></a></li>
                            <li><a href="#/Quesero/inventario" aria-expanded="false"><i class="lnr lnr-inbox"></i> <span>Inventario</span></a></li>
                        <!--li class="active"><a href="/Quesero"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li class="">
                                <a href="#subPages" class="has-arrow" aria-expanded="false"><i class="lnr lnr-layers"></i> <span>Productos</span></a>
                                <ul aria-expanded="true">
                                    <li class=""><a href="/lotes">Producción por lotes</a></li>
                                    <li class=""><a href="/productos">Productos específicos</a></li>
                                </ul>
                            </li>
                        <li class="">
                            <a href="#subPages" class="has-arrow" aria-expanded="false"><i class="lnr lnr-user"></i> <span>Usuarios</span></a>
                            <ul aria-expanded="true">
                                <li class=""><a href="{!--{ route('list.queseros') }--!}">Queseros</a></li>
                                <li class=""><a href="#/addEmployee">Nuevo Usuario</a></li>
                            </ul>
                        </li>
                        <li><a href="/ventas" aria-expanded="false"><i class="lnr lnr-diamond"></i> <span>Ventas</span></a></li>
                        <li><a href="/compras" aria-expanded="false"><i class="lnr lnr-list"></i> <span>Compras</span></a></li>
                        <li><a href="#uiElements" aria-expanded="false"><i class="lnr lnr-spell-check"></i> <span>Surtimiento
                                    de</span></a></li>
                        <li class="">
                            <a href="#forms" class="has-arrow" aria-expanded="false"><i class="lnr lnr-chart-bars"></i> <span>Reportes</span></a>
                            <ul aria-expanded="true">
                                <li class=""><a href="forms-validation.html">Form Validation</a></li>
                                <li class=""><a href="forms-advanced.html">Advanced Form Elements</a></li>
                                <li class=""><a href="forms-basic.html">Basic Form Elements</a></li>
                                <li class=""><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                                <li class=""><a href="forms-texteditor.html">Text Editor</a></li>
                            </ul>
                        </li>
                        <li-- class="">
                            <a href="#charts" class="has-arrow" aria-expanded="false"><i class="lnr lnr-pie-chart"></i> <span>Estadisticas</span></a>
                            <ul aria-expanded="true">
                                <li class=""><a href="charts-chartist.html">Chartist</a></li>
                                <li class=""><a href="charts-sparkline.html">Sparkline Chart</a></li>
                            </ul>
                        </li-->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
