<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>ProGym</title>
    <!-- Favicon -->
    <link rel="icon" href="Source/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Home/css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="Home/css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="Home/css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="Home/css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="Home/css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="Home/css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="Home/css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="Home/css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="Home/css/magnific-popup.css">
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="Home/css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Home/css/responsive.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="/"><img src="{{ asset('Source/favicon.ico') }}" alt="ProGym">
                                    <i>ProGym</i>
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="col-lg-7 col-md-12 col-24">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li>
                                            <a href="{{ route('home') }}">Inscripciones</a>
                                        </li>
                                        <li><a href="{{ route('QuienesSomos') }}">Quienes somos</a></li>
                                        <li><a href="#">Services </a></li>
                                        @guest
                                            <li>
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li>
                                                <a href="{{ route('personas.index') }}">Nuestros miembros</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('planes.index') }}">Nuestros planes</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->
    @yield('Content')
    <!-- Copyright -->
    <div class="copyright">
        <footer class="main-footer" style="text-align: center">
            <strong>Realizado por: Jaider Ivan Vera Jaimes, Diana Alejandra Barrera y German Rodriguez</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>IJ-DB-GR</b>
            </div>
        </footer>
    </div>
    <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="Home/js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="Home/js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="Home/js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="Home/js/easing.js"></script>
    <!-- Color JS -->
    <script src="Home/js/colors.js"></script>
    <!-- Popper JS -->
    <script src="Home/js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="Home/js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="Home/js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="Home/js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="Home/js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="Home/js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="Home/js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="Home/js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="Home/js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="Home/js/steller.js"></script>
    <!-- Wow JS -->
    <script src="Home/js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="Home/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="Home/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="Home/js/main.js"></script>
</body>

</html>