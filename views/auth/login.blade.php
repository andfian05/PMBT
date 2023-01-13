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

                    <h4 class="text-center text-black font-alt mb-4">Masuk Aplikasi</h4>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">




                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="{{ __('Email Akun') }}" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <!-- <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div> -->
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

                            <!-- <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <!-- <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="remember" class="form-check-input"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label for="remember" class="form-check-label">

                                        {{ __('Simpan Akun') }}
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>

                                <!-- <a href="{{ route('register') }}" class="btn btn-block btn-secondary">
                       
                            {{ __('Daftar Akun') }}
                        </a> -->

                                <!-- @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="btn btn-block btn-danger">
                            
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif -->
                            </div>
                        </div>

                </div>
                </form><br>



            </div>

        </div>

    </div>

    </div>


    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>

</html>
<br>








<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
