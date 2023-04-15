@extends('backend.panitia-b.index')
@section('content')
<div class="content-wrapper">

<br><br>

<div class="container">
    <div class="card">
        <div class="card-body"><br>
            <h6 class="text-center">Terimakasih, Data Tes Baca dan Hafalan Al Qur'an Anda <b>Sudah Tersimpan</b>. Silahkan Memulai Tes Baca dan Hafalan Al Qur'an
                Kembali.</h6>

            <div class="card-body text-center">
                <a class="btn btn-success btn-sm-2" href="{{ route('test-baca-quran.create') }}">
                    <i class="fa-solid fa-arrows-rotate fa-spin fa-spin-reverse"></i>&nbsp;Memulai Tes Baca dan Hafalan Al Qur'an
                </a>
            </div>
        </div>
    </div>
</div>




</div>
@endsection