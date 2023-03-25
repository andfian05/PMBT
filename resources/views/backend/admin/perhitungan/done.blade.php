@extends('backend.admin.index')
@section('content')



    <div class="content-wrapper">

    <br><br>

    <div class="container">
        <div class="card">
            <div class="card-body"><br>
                <h6 class="text-center">Terimakasih, Data Keputusan Seleksi Anda <b>Sudah Tersimpan</b>. Silahkan Memulai Perhitungan
                    Kembali.</h6>

                <div class="card-body text-center">
                    <a class="btn btn-success btn-sm-2" href="{{ route('perhitungan.create') }}">
                        <i class="fa-solid fa-arrows-rotate"></i>&nbsp;Memulai Perhitungan
                    </a>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection