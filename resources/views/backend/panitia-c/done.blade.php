@extends('backend.panitia-c.index')
@section('content')


<div class="content-wrapper">

<br><br>

<div class="container">
    <div class="card">
        <div class="card-body"><br>
            <h6 class="text-center">Terimakasih, Data Tes Tanya Jawab Anda <b>Sudah Tersimpan</b>. Silahkan Memulai Tes Tanya Jawab
                Kembali.</h6>

            <div class="card-body text-center">
                <a class="btn btn-success btn-sm-2" href="{{ route('test-wawancara.store') }}">
                    <i class="fa-solid fa-arrows-rotate fa-spin fa-spin-reverse"></i>&nbsp;Memulai Tes Tanya Jawab
                </a>
            </div>
        </div>
    </div>
</div>




</div>
@endsection