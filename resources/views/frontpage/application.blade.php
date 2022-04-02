@extends('front.frontp')
@section('title')
    Менің жазбаларым
@endsection
@section('content')
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-12">
                    <h2 class="fw-bolder fs-5 mb-4">Менің жазбаларым</h2>
                    <!-- News item-->
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Тұрғын үй</th>
                            <th>Бағасы</th>
                            <th>Бөлме саны</th>
                            <th>Жалпы ауданы</th>
                            <th>Жалпы суммасы</th>
                            <th>Статусы</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user_flats as $k=>$user_flat)
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{ $user_flat->rename }}</td>
                                <td>{{ $user_flat->price }} т.</td>
                                <td>{{ $user_flat->rname }}</td>
                                <td>{{ $user_flat->totalarea }} ш.м</td>
                                <td>{{ ($user_flat->totalarea)*($user_flat->price) }} т.</td>
                                <td><div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $user_flat->stname }}</div></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection
