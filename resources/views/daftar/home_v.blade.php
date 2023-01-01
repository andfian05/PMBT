@extends('daftar.index')
@section('content')
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg mb-5 navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
            <!-- <img class="navbar-brand" src="{{asset('foto/Petik_YBM.png' )}}" height="70px" width="149px" alt=""> -->
            <img class="navbar-brand" src="{{asset('foto/Petik_YBM2.png' )}}" height="50px" width="149px" alt="">
            
                <a class="navbar-brand fw-bold" href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button> 
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                       
                    </ul>
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view"> <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp; Download Brosur</a>&nbsp;&nbsp;
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="{{ url('/') }}"> <i class="fa-solid fa-bookmark"></i>&nbsp; Panduan Informasi</a>
           
                </div>
            </div>
        </nav>
        <br><br><br><br><br><br>
       
    
       
    <div class="container"> 
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Informasi Tentang Pesantren PeTIK Jombang</h3>
              </div>
              <div class="card-body">
                <!-- Formulir Pendidikan -->
                <div class="form-group">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/8uA_UQqEGUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <form action="/pmb1" method="GET" id="form1" name="form1">
                        <div class="form-group">
                            <label for="keterangan">Apakah anda sudah mengetahui gambaran mengenai Pesantren PeTIK Jombang, dan yakin untuk melakukan pendaftaran?</label> 
                            <div class="form-group -ml-3col-12">
                            <select id="keterangan" name="keterangan" class="custom-select" required="required" onclick="tampilkan()">
                                <option value="">Pilihan</option>
                                <option value="sm">Sudah Mengetahui</option>
                                <option value="bm">Belum Mengetahui</option>
                            </select>
                            </div>
                        </div> 
                        <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                        <script>
                            function tampilkan(){
                            
                            var pesan=document.getElementById("form1").keterangan.value;
                            var p_kontainer=document.getElementById("container");
                            
                            if (pesan=="sm")
                                {
                                    p_kontainer.innerHTML=`
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="">Tuliskan apa yang Anda pahami tentang Pesantren PeTIK Jombang :</label>
                                            <textarea name=""  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                                        </div>                   
                                    </div>
                                    <div class="form-group">
                                        <div class="col-12">
                                            <button class="btn btn-primary">Memulai Mengisi</button>
                                        </div>
                                    </div>`;
                                }
                            else if (pesan=="bm")
                                {
                                    p_kontainer.innerHTML=`<p align="center" class="text-danger"><b>Mohon maaf, Anda tidak bisa melanjutkan Pendaftaran.<br/>Anda harus memiliki gambaran mengenai Pesantren PeTIK Jombang sebelum melakukan pendaftaran</b></p>`;
                                }
                            }
                        </script>
                        <div class="container">
                            <p id="container"></p>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <!-- <button name="submit" type="submit" class="btn btn-primary">Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></button> -->
                            </div>
                        </div>
                    </form>
                    
                </div>
              </div>
            </div>
    </div>
    <br><br><br><br>
    
@endsection