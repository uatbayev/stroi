@extends('back.adminp')
@section('title')
    Өтініштер
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Өтініштер </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Басты бет</a></li>
                <li class="breadcrumb-item active">Өтініштер</li>
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
                                <th scope="col">Қолданушы</th>
                                <th scope="col">Телефон нөмірі</th>
                                <th scope="col">Тұрғын үй</th>
                                <th scope="col">Бағасы</th>
                                <th scope="col">Бөлме саны</th>
                                <th scope="col">Жалпы ауданы</th>
                                <th scope="col">Жалпы суммасы</th>
                                <th scope="col">Уақыты</th>
                                <th scope="col">Статусы</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_flats as $k=>$user_flat)
                                <tr>
                                    <td scope="row">{{ $k+1 }}</td>

                                    <td>{{ $user_flat->lastname }} {{ $user_flat->firstname }}</td>
                                    <td>{{ $user_flat->tel }}</td>
                                    <td>{{ $user_flat->rename }}</td>
                                    <td>{{ $user_flat->price }} т.</td>
                                    <td>{{ $user_flat->rname }}</td>
                                    <td>{{ $user_flat->totalarea }} ш.м</td>
                                    <td>{{ ($user_flat->totalarea)*($user_flat->price) }} т.</td>
                                    <td>{{ $user_flat->gdate }}</td>
                                    <td><div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $user_flat->stname }}</div></td>
                                    <td>
{{--                                        <a href="{{ route('flat.edit', $flat) }}" class="btn btn-success"><i class="ri-edit-box-line"></i></a>--}}
{{--                                        <form action="{{ route('flat.destroy', $flat) }}" method="post" style="display: contents">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit" class="btn btn-danger"><i class="ri-delete-bin-3-line"></i></button>--}}
{{--                                        </form>--}}
                                        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal_{{$user_flat->id}}">
                                            <i class="ri-edit-box-line"></i>
                                        </a>
                                        <div class="modal fade" id="basicModal_{{$user_flat->id}}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Статусты өзгерту</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('flat_save') }}" method="post">
                                                            @csrf
                                                            <div class="col-md-4 mb-3">
                                                                <input type="hidden" name="user_flat_id" value="{{$user_flat->id}}">
                                                                <label class="form-label">Статус</label>
                                                                <select class="form-select" name="status_id">
                                                                    @foreach($statuses as $status)
                                                                        <option value="{{ $status->id }}" {{ old('status_id', $user_flat->status_id)==$status->id ? 'selected':'' }}>{{ $status->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Жабу</button>
                                                            <button type="submit" class="btn btn-primary">Сақтау</button>
                                                        </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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
