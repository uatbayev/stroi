<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ route('home') }}">Қазығұрт тұрғын үй кешені</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Басты бет</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('page') }}">Тұрғын үйлер</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home_faq') }}">Сұрақ-жауап</a></li>

                    @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->getUserName() }}</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                @if(Auth::user()->isAdmin())
                                <li><a class="dropdown-item" href="{{route('admin')}}">Администратор беті</a></li>
                                    <li><a class="dropdown-item" href="{{route('application',Auth::user()->id)}}">Менің жазбаларым</a></li>
                                @elseif(Auth::user()->isUser())
                                <li><a class="dropdown-item" href="{{route('application',Auth::user()->id)}}">Менің жазбаларым</a></li>
                                @endif
                                <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Шығу</a></li>
                            </ul>
                        </li>
                    @else

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Аккаунт</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                            <li><a class="dropdown-item" href="{{ route('auth.login') }}">Кіру</a></li>
                            <li><a class="dropdown-item" href="{{ route('auth.register') }}">Тіркелу</a></li>

                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Барлық құқықтар сақталған &copy; Қазығұрт тұрғын үй кешені 2022</div></div>
            <div class="col-auto">
                <a class="link-light small" href="">Тұрғын үйлер</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="{{ route('home_faq') }}">Сұрақ-жауап</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('front/js/scripts.js') }}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
