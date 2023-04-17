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
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $recomplex->district->name }}</div>
                            <div class="badge bg-success bg-gradient rounded-pill mb-2">{{ $recomplex->hometype->name }}</div>
                            <div class="badge bg-black bg-gradient rounded-pill mb-2">{{ $recomplex->floor->name }}</div>
                            <a class="text-decoration-none link-dark stretched-link" href="{{route('page_see',$recomplex->id)}}"><h5 class="card-title mb-3">{{ $recomplex->name }}</h5></a>
                            <p class="card-text mb-0">{!! $recomplex->description !!} </p>
                            <a class="text-decoration-none" href="{{route('page_see',$recomplex->id)}}">
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
            <hr>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder mb-5">Тұрғын үйлер картасы</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.kz/maps/221/chimkent/search/%D0%A8%D1%8B%D0%BC%D0%BA%D0%B5%D0%BD%D1%82%20%D0%96%D0%9A/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Шымкент ЖК в Шымкенте</a><a href="https://yandex.kz/maps/221/chimkent/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Шымкент</a><iframe src="https://yandex.kz/map-widget/v1/?ll=69.667412%2C42.328165&mode=search&sctx=ZAAAAAgCEAAaKAoSCcZQTrSralFAEQTHZdzUKkVAEhIJOZojK78M5T8ROIQqNXugzz8iBgABAgMEBSgKOABA3QFIAWoCa3qdAc3MTD2gAQCoAQC9AQJhiX%2FCAWWzx%2Fun3gGr3NH87gTagcDJrQbT9fGQuQHH7Kr%2FjwKnkp%2BrggHqz%2BS3%2FQSh57GpmQHEg6mXUP%2FYxLr1BM%2FRxZa7A5XD9bO5AsGP65aHAvfJ9JSXAu%2B33p2KAurOiZubBrq%2B39SkBuoBAPIBAPgBAIICE9Co0YvQvNC60LXQvdGCINCW0JqKAgs2NDk2MDE3MTE2OZICAzIyMZoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=69.667412%2C42.328165&sspn=0.328903%2C0.123555&text=%D0%A8%D1%8B%D0%BC%D0%BA%D0%B5%D0%BD%D1%82%20%D0%96%D0%9A&z=13" width="1000" height="500" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>

        </div>
    </section>
@endsection
