@extends('layouts.app')
@section('content')
        <body class="hold-transition login-page">
            <div class="container">
                <div class="login-box">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <img class="navbar-brand text-center" src="{{asset('foto/Petik_YBM2.png' )}}" height="87px"
                                width="323px" alt="">
                        </div>
                        <div class="card-body">
                            <div class="content-header text-center">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-12">
                                            <h1 class="m-0"><b>Masuk Apps</b></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('postlogin') }}">
                                @csrf
                                <div class="input-group mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="{{ __('Email Akun') }}" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <input for="password" id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="{{ __('Password Akun') }}" name="password" required
                                        autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="content-header text-center">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Login') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
            <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
        </body>
    </html>
@endsection
