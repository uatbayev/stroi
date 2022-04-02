@extends('back.adminp')
@section('title')
    Қолданушылар
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Қолданушылар</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item active">Қолданушылар</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">Қосу</a>
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
                                <th scope="col">ЖАТ</th>
                                <th scope="col">Поштасы</th>
                                <th scope="col">Телефоны</th>
                                <th scope="col">Жынысы</th>
                                <th scope="col">Рөлі</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $k=>$user)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $user->lastname }} {{ $user->firstname }} {{ $user->patronymic }}</td>
                                <td>{{ $user->email }} </td>
                                <td>{{ $user->tel }} </td>
                                <td>{{ $user->gender->name }} </td>
                                <td>{{ $user->role }} </td>
                                <td>
                                    <a href="{{ route('user.edit', $user) }}" class="btn btn-success"><i class="ri-edit-box-line"></i></a>
                                    <form action="{{ route('user.destroy', $user) }}" method="post" style="display: contents">
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
