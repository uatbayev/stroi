@extends('back.adminp')
@section('title')
    Өзгерту
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Өзгерту</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item"><a href="{{ route('hometype.index') }}">Үй түрлері</a></li>
                <li class="breadcrumb-item active">Өзгерту</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header mb-4">
                        <a href="{{ route('hometype.index') }}" class="btn btn-primary">Артқа</a>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('hometype.update', $hometype) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label for="" class="form-label">Атауы</label>
                                <input type="text" name="name" value="{{ old('name', $hometype->name) }}" class="form-control" required>
                            </div>
                            <div class="row pt-3">
                            <div class="col-4">
                                <button class="btn btn-primary" type="submit">Өзгерту</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
