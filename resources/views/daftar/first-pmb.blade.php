@extends('daftar.layouts.index')
@section('content')

  <body id="page-top">
 
    <nav class="navbar navbar-expand-lg mb-5 navbar-light fixed-top shadow-sm" id="mainNav">
      <div class="container px-4">
        <img class="navbar-brand" src="{{asset('foto/Petik_YBM2.png' )}}" height="50px" width="149px" alt="">
        <a class="navbar-brand fw-bold" href="#page-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"   
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0"></ul>
          <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
            href="https://drive.google.com/file/d/1HAExg37krI1UrifiqEC0WAMYuoCVxqc9/view" target="_blank"> 
            <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp; 
            Download Brosur
          </a>&nbsp;&nbsp;
          <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="{{ url('/') }}"> 
            <i class="fa-solid fa-bookmark"></i>&nbsp; 
            Panduan Informasi
          </a>
        </div>
      </div>
    </nav>
    <br><br><br><br><br><br>

    <div class="container">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Informasi Tentang PeTIK Jombang</h3>
        </div>
        <div class="card-body">
       
          <div class="form-group">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/BgNR8w2ZZ1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <form action="#" method="GET" id="form1" name="form1">
              @csrf
              <div class="form-group">
                <label class="form-label text-justify" for="keterangan">Apakah Anda Sudah Mengetahui Gambaran Mengenai PeTIK Jombang, Dan Yakin Untuk 
                  Melakukan Pendaftaran?</label>
                <div class="form-group -ml-3col-12">
                  <select id="keterangan" class="custom-select" required="required"
                    onclick="tampilkan()">
                    <option value="">--- Pilih ---</option>
                    <option value="sm">Sudah Mengetahui Dan Yakin</option>
                    <option value="bm">Belum Mengetahui Dan Tidak Yakin</option>
                  </select>
                </div>
              </div>
             
              <script>
                function tampilkan() {
                  var pesan = document.getElementById("form1").keterangan.value;
                  var p_kontainer = document.getElementById("container");

                  if (pesan == "sm") {
                    p_kontainer.innerHTML = `
                    <div class="form-group text-center">
                      <div class="col-md-12">
                        <label for="" >Persiapkan Catatan Anda Mengenai PeTIK Jombang (Wajib).</label>
                      </div>                   
                    </div>
                    <div class="form-group text-center">
                      <div class="col-12">
                        <a href="{{ route('registerpmb') }}" class="btn btn-primary">Mulai Mengisi</a>
                      </div>
                    </div>`;
                  } else if (pesan == "bm") {
                    p_kontainer.innerHTML =
                      `<p align="center" class="text-danger"><b>Silakan Pahami Video Tersebut Hingga Anda Memahami (Wajib).</b></p>`;
                  }
                }
              </script>
              <div class="container">
                  <p id="container"></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>

@endsection