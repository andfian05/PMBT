@extends('backend.index')
@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-6">
                    <div class="small-box bg-warning-emphasis">
                        <div class="card mb-3" style="max-width: 520px;">
                            <div class="row g-0">

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Profile Anda : {{ Auth::user()->name }} </h5><br><br>

                                        <!-- <p class="card-text"><small class="text-muted">Panitia PMB PeTIK Jombang</small></p> -->
                                        <div class="d-grid gap-2">
                                            <!-- <button class="btn btn-primary" type="button">Logout</button> -->
                                            <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Logout Akun"
                                                href="{{ __('Logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                                    class="fa-solid fa-right-from-bracket"></i>&nbsp;{{ __('Logout') }}</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>
</div>

@endsection
