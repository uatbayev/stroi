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
                <li class="breadcrumb-item"><a href="{{ route('flat.index') }}">Пәтерлер</a></li>
                <li class="breadcrumb-item active">Өзгерту</li>
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
                        <form class="row g-3" action="{{ route('flat.update', $flat) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-4">
                                <label class="form-label">Бөлме саны</label>
                                <select class="form-select" name="room_id">
                                    @foreach($rooms as $room)
                                        <option value="{{ $room->id }}" {{ old('room_id', $flat->room_id)==$room->id ? 'selected':'' }}>{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Тұрғын үй</label>
                                <select class="form-select" name="recomplex_id">
                                    @foreach($recomplexes as $recomplex)
                                        <option value="{{ $recomplex->id }}" {{ old('recomplex_id', $flat->recomplex_id)==$recomplex->id ? 'selected':'' }}>{{ $recomplex->name }} - {{ $recomplex->district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Жалпы ауданы (ш.м)</label>
                                <input type="text" name="totalarea" value="{{ old('totalarea', $flat->totalarea) }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Бөлме схемасы</label>
                                <input type="file" name="photo_s" class="form-control" value="{{ old('photo_s') }}">
                                <p><a href="{{asset('storage/flat/'.$flat->photo_s)}}" target="_blank">{{ $flat->photo_s }}</a></p>
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

