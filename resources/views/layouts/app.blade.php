
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>PMB PeTIK Jombang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('foto/favicon/Logo.jpg')}}" />

	 <!-- font awesome -->
	 <link href="{{asset('icon/css/all.css')}}" rel="stylesheet" />
	
	<!-- <link rel="icon" type="image/png" href="{{asset('Login_v1/images/icons/favicon.ico')}}"/> -->

	<link rel="stylesheet" type="text/css" href="{{asset('Login_v1/vendor/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Login_v1/vendor/animate/animate.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v1/vendor/css-hamburgers/hamburgers.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Login_v1/vendor/select2/select2.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('Login_v1/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_v1/css/main.css')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
   

    
        @yield('content')
	

</body>
</html>
