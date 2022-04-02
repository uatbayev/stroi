@extends('back.adminp')
@section('title')
    Тұрғын үйлер
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Тұрғын үйлер</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item active">Тұрғын үйлер</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('recomplex.create') }}" class="btn btn-primary">Қосу</a>
                    </div>
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
                                <th scope="col">Атауы</th>
                                <th scope="col">Сипаттамасы</th>
                                <th scope="col">Бағасы</th>
                                <th scope="col">Суреті</th>
                                <th scope="col">Үй түрі</th>
                                <th scope="col">Ауданы</th>
                                <th scope="col">Этажы</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recomplexes as $k=>$recomplex)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $recomplex->name }}</td>
                                <td>{!! $recomplex->description !!} </td>
                                <td>{{ $recomplex->price }} </td>
                                <td><a href="{{asset('storage/recomplex/'.$recomplex->photo)}}" target="_blank">{{ $recomplex->photo }}</a> </td>
                                <td>{{ $recomplex->hometype->name }} </td>
                                <td>{{ $recomplex->district->name }} </td>
                                <td>{{ $recomplex->floor->name }} </td>
                                <td>
                                    <a href="{{ route('recomplex.edit', $recomplex) }}" class="btn btn-success"><i class="ri-edit-box-line"></i></a>
                                    <form action="{{ route('recomplex.destroy', $recomplex) }}" method="post" style="display: contents">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="ri-delete-bin-3-line"></i></button>
                                    </form>
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
