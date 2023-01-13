@extends('backend.index')
@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">


                        <a class="small-box-footer" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        
                    </div>

                    <div class="small-box bg-success">


                       

                        <a href="{{ url('/admin') }}" class="small-box-footer">Back </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
