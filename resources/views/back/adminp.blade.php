<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('images/logo.ico')}}" rel="icon">
    <link href="{{asset('images/logo.ico')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('niceadmin/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.2.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('admin') }}" class="logo d-flex align-items-center">
            <img src="{{asset('niceadmin/assets/img/logo.png')}}" alt="">
            <span class="d-none d-lg-block">Әкімшілік</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

{{--    <div class="search-bar">--}}
{{--        <form class="search-form d-flex align-items-center" method="POST" action="#">--}}
{{--            <input type="text" name="query" placeholder="Іздеу" title="Enter search keyword">--}}
{{--            <button type="submit" title="Search"><i class="bi bi-search"></i></button>--}}
{{--        </form>--}}
{{--    </div><!-- End Search Bar -->--}}

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('niceadmin/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->getUserName() }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->getUserName() }}</h6>
                        <span>Жуйе админі</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}">
                            <i class="bi bi-house"></i>
                            <span>Қолданушы беті</span>
                        </a>
                    </li>
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">--}}
{{--                            <i class="bi bi-gear"></i>--}}
{{--                            <span>Account Settings</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">--}}
{{--                            <i class="bi bi-question-circle"></i>--}}
{{--                            <span>Need Help?</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Шығу</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin') }}">
                <i class="bi bi-grid"></i>
                <span>Басты бет</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('user.index') }}">
                <i class="bi bi-people"></i>
                <span>Қолданушылар</span>
            </a>
        </li><!-- End Profile Page Nav -->
{{--        <li class="nav-heading">Әкімшілік</li>--}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('flat_list') }}">
                <i class="bi bi-envelope"></i>
                <span>Өтініштер</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Мәзір</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('district.index') }}">
                        <i class="bi bi-circle"></i><span>Аудандар</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('hometype.index') }}">
                        <i class="bi bi-circle"></i><span>Уй түрлері</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('recomplex.index') }}">
                        <i class="bi bi-circle"></i><span>Тұрғын уйлер</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('flat.index') }}">
                        <i class="bi bi-circle"></i><span>Пәтерлер</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->


        <li class="nav-heading">Қорытынды</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Есептеме</span>
            </a>
        </li><!-- End Register Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    @yield('content')

</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('niceadmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('niceadmin/assets/js/main.js')}}"></script>

</body>

</html>
