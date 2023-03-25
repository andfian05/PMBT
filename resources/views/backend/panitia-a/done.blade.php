@extends('backend.panitia-a.index')
@section('content')


<div class="content-wrapper">

    <br><br>

    <div class="container">
        <div class="card">
            <div class="card-body"><br>
                <h6 class="text-center">Terimakasih, Data Tes Survei Anda <b>Sudah Tersimpan</b>. Silahkan Memulai Tes Survei
                    Kembali.</h6>

                <div class="card-body text-center">
                    <a class="btn btn-success btn-sm-2" href="{{ route('test-survey.create') }}">
                        <i class="fa-solid fa-arrows-rotate"></i>&nbsp;Memulai Tes Survei
                    </a>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
