@extends('back.adminp')
@section('title')
    Қосу
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Қосу</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item"><a href="{{ route('flat.index') }}">Пәтерлер</a></li>
                <li class="breadcrumb-item active">Қосу</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header mb-4">
                        <a href="{{ route('flat.index') }}" class="btn btn-primary">Артқа</a>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('flat.store') }}" method="post">
                            @csrf
                            <div class="col-md-4">
                                <label class="form-label">Бөлме саны</label>
                                <select class="form-select" name="room_id">
                                    @foreach($rooms as $room)
                                        <option value="{{ $room->id }}" {{ old('room_id')==$room->id ? 'selected':'' }}>{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Тұрғын үй</label>
                                <select class="form-select" name="recomplex_id">
                                    @foreach($recomplexes as $recomplex)
                                        <option value="{{ $recomplex->id }}" {{ old('recomplex_id')==$recomplex->id ? 'selected':'' }}>{{ $recomplex->name }} - {{ $recomplex->district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Жалпы ауданы (ш.м)</label>
                                <input type="text" name="totalarea" value="{{ old('totalarea') }}" class="form-control" required>
                            </div>

                            <div class="row pt-3">
                                <div class="col-4">
                                    <button class="btn btn-primary" type="submit">Қосу</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
