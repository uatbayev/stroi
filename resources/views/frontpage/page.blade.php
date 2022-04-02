@extends('front.frontp')
@section('title')
    Тұрғын үйлер
@endsection
@section('content')
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder mb-5">Тұрғын үйлер</h2>

                    </div>
                </div>
            </div>
            <div class="row gx-5">
                @foreach($recomplexes as $recomplex)
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ asset('storage/recomplex/'.$recomplex->photo) }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">{{ $recomplex->name }}</h5></a>
                            <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="text-decoration-none" href="#!">
                                Толығырақ
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-lg-4 mb-5">--}}
{{--                    <div class="card h-100 shadow border-0">--}}
{{--                        <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>--}}
{{--                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Another blog post title</h5></a>--}}
{{--                            <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                            <a class="text-decoration-none" href="#!">--}}
{{--                                More stories--}}
{{--                                <i class="bi bi-arrow-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 mb-5">--}}
{{--                    <div class="card h-100 shadow border-0">--}}
{{--                        <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />--}}
{{--                        <div class="card-body p-4">--}}
{{--                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>--}}
{{--                            <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">The last blog post title is a little bit longer than the others</h5></a>--}}
{{--                            <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
