@extends('back.adminp')
@section('title')
    Пәтерлер
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Пәтерлер</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item active">Пәтерлер</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        @if(Session::has('info'))
                            <div class="alert alert-primary" role="alert">
                                {{ Session::get('info') }}
                            </div>
                    @endif
                    <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Тұрғын үй</th>
                                <th scope="col">Бағасы</th>
                                <th scope="col">Бөлме саны</th>
                                <th scope="col">Жалпы ауданы</th>
                                <th scope="col">Жалпы суммасы</th>
                                <th scope="col">Статусы</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_flats as $k=>$user_flat)
                                <tr>
                                    <td scope="row">{{ $k+1 }}</td>
                                    <td>{{ $user_flat->rename }}</td>
                                    <td>{{ $user_flat->price }} т.</td>
                                    <td>{{ $user_flat->rname }}</td>
                                    <td>{{ $user_flat->totalarea }} ш.м</td>
                                    <td>{{ ($user_flat->totalarea)*($user_flat->price) }} т.</td>
                                    <td><div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $user_flat->stname }}</div></td>
                                    <td>
{{--                                        <a href="{{ route('flat.edit', $flat) }}" class="btn btn-success"><i class="ri-edit-box-line"></i></a>--}}
{{--                                        <form action="{{ route('flat.destroy', $flat) }}" method="post" style="display: contents">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-danger"><i class="ri-delete-bin-3-line"></i></button>--}}
{{--                                        </form>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
