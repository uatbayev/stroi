@extends('front.frontp')
@section('title')
    Кіру
@endsection
@section('content')
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h1 class="fw-bolder">Кіру</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                            @if(Session::has('info'))
                                <div class="alert alert-primary" role="alert">
                                    {{ Session::get('info') }}
                                </div>
                            @endif
                            @if(Session::has('info-danger'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('info-danger') }}
                                </div>
                            @endif
                                <form action="{{route('auth.login')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}" placeholder="test@auezov.edu.kz">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Құпия сөз</label>
                                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}" placeholder="">
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Мені есте сақтау</label>
                                    </div>

                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Кіру</button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
