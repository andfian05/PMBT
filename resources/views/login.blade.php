@extends('layouts.app')
@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt mt-5" data-tilt>
					<img src="{{asset('foto/Petik_YBM2.png' )}}" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('postlogin') }}">
                @csrf
					
					<span class="login100-form-title">
					
						Masuk Aplikasi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<!-- <input class="input100" type="text" name="email" placeholder="Email"> -->
                        <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="{{ __('Email Akun') }}" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-qrcode fa-shake" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
                        <input class="input100" for="password" id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="{{ __('Password Akun') }}" name="password" required
                                autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-qrcode fa-shake" aria-hidden="true"></i>
						</span>
					</div><br>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        {{ __('Login') }}
						</button>
					</div>

					<div class="text-center p-t-136 ">
						<small class="txt2" >
						<i class="fa-solid fa-graduation-cap fa-bounce fa-2" style="color: #000000;"></i>&nbsp;PMB PeTIK Jombang
							
						</small>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
	
	<script src="{{asset('Login_v1/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	<script src="{{asset('Login_v1/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('Login_v1/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('Login_v1/vendor/select2/select2.min.js')}}"></script>

	<script src="{{asset('Login_v1/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="{{asset('Login_v1/js/main.js')}}"></script>



@endsection
