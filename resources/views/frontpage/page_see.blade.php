@extends('front.frontp')
@section('title')
    Тұрғын үй
@endsection
@section('content')
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5">
            <h1 class="fw-bolder fs-5 mb-4">{{ $recomplex->name }}</h1>
            @if(Session::has('info'))
                <div class="alert alert-primary" role="alert">
                    {{ Session::get('info') }}
                </div>
            @endif
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-6">
                            <div class="p-4 p-md-5">
                                <div
                                    class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $recomplex->district->name }}</div>
                                <div
                                    class="badge bg-success bg-gradient rounded-pill mb-2">{{ $recomplex->hometype->name }}</div>
                                <div
                                    class="badge bg-black bg-gradient rounded-pill mb-2">{{ $recomplex->floor->name }}</div>
                                <div class="h2 fw-bolder">{{ $recomplex->name }}</div>
                                <p>{!! $recomplex->description !!}</p>
                                <a class="stretched-link text-decoration-none" href="{{ route('page') }}">
                                    Артқа
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6"><img class="card-img-top"
                                                   src="{{ asset('storage/recomplex/'.$recomplex->photo) }}" alt="..."/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-12">
                    <h2 class="fw-bolder fs-5 mb-4">{{ $recomplex->name }} - пәтерлері</h2>
                    <!-- News item-->
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Бөлме саны</th>
                            <th>Жалпы ауданы</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($flats as $k=>$flat)
                            @php
                                $userFlat = $userFlats->where('flat_id', $flat->id)->first();
                            @endphp
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{ $flat->room->name }}</td>
                                <td>{{ $flat->totalarea }} ш.м</td>
                                <td class="text-end text-nowrap">
                                    @if(Auth::check() && (Auth::user()->isUser() || Auth::user()->isAdmin()))
                                        @if($userFlat)
                                            @if ($userFlat->status)
                                                <div class="d-inline-block">
                                                    {{ $userFlat->status->name }}
                                                </div>

                                                @if ($userFlat->status->id == 3)
                                                    <form action="{{route('add_flat', $flat->id)}}" method="POST"  class="d-inline-block">
                                                        @csrf
                                                        <button class="btn btn-sm btn-outline-primary">
                                                            Өтінім беру
                                                        </button>
                                                    </form>
                                                @endif
                                            @else
                                                Өтінім жіберілді
                                            @endif
                                        @else
                                            <form action="{{route('add_flat', $flat->id)}}" method="POST">
                                                @csrf
                                                <button class="btn btn-sm btn-outline-primary">
                                                    Өтінім беру
                                                </button>
                                            </form>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection
