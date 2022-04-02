@extends('front.frontp')
@section('title')
    Қазығұрт тұрғын үй кешені
@endsection
@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Қазығұрт тұрғын үй кешені</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Шымкенттегі жаңа ғимараттар - құрылыс салушыдан делдалсыз жылжымайтын мүлікті сатып алыңыз.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Толығырақ</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('images/kazygurt.jpg') }}" alt="..." /></div>
            </div>
        </div>
    </header>
    <!-- Testimonial section-->
    <div class="py-5 bg-light" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">Қонақ бөлмелерде, қабырғаларда және төбелерде әрлеу - ерітінділерді төсеу, тұсқағазды жабу (жақсартылған санат), едендер - ламинат. Ас үйлер мен жуынатын бөлмелердегі қабырғалар 1,6 м биіктікке дейін керамикалық плиткамен қапталған, ванна бөлмесіндегі еден жабындары беті кедір-бұдырлы керамикалық плиткалардан жасалған. Лоджиялар - төбелер мен қабырғалар, жобаға сәйкес сыртқы қасбет жұмыстарына арналған материалдар, едендер - цемент-құмды стяжкалар - фарфордан жасалған тастан жасалған бұйымдар. Техникалық параметрлері бойынша ұсынылған жоба тұрғын үй-жайлардың биіктігін қоспағанда, ҚР ҚНжЕ 3.02-43-2007 «Тұрғын үйлер» жайлылықтың 2-сыныбына сәйкес келеді.</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3" src="{{ asset('images/logo1.png') }}" alt="..." />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
