@extends('back.adminp')
@section('title')
    Үй түрлері
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Үй түрлері</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item active">Үй түрлері</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('hometype.create') }}" class="btn btn-primary">Қосу</a>
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
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hometypes as $k=>$hometype)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $hometype->name }}</td>
                                <td>
                                    <a href="{{ route('hometype.edit', $hometype) }}" class="btn btn-success"><i class="ri-edit-box-line"></i></a>
                                    <form action="{{ route('hometype.destroy', $hometype) }}" method="post" style="display: contents">
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
