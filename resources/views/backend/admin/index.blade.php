@include('backend.admin.layouts.header')
@include('backend.admin.layouts.navbar')

@include('backend.admin.layouts.sidebar')
@include('sweetalert::alert')
@yield('content')

@include('backend.admin.layouts.footer')
