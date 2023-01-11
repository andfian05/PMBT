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
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="https://startbootstrap.com/theme/new-age"> <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp; Download Brosur</a>&nbsp;&nbsp;
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="{{ url('/') }}"> <i class="fa-solid fa-bookmark"></i>&nbsp; Panduan Informasi</a>
           
                </div>
            </div>
        </nav>
        <br><br><br><br><br><br>
       
    
       
    <div class="container"> 
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Peminatan Calon Mahasantri</h3>
              </div>
              <div class="card-body">
                <!-- Formulir Peminatan -->

                <form action="#" method="GET" id="minat" name="minat">

                    <div class="form-group">
                      <label class="col-13">Jurusan Di PeTIK Jombang Yang Anda Minati?</label> 
                      <div class="col-13 mb-2">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="minat" id="minat_0" type="radio" class="custom-control-input" value="ppl" required="required"> 
                          <label for="minat_0" class="custom-control-label">Pengembangan Perangkat Lunak (PPL)</label>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-8 mt-3">Studi Materi : </label>
                              <div class="col-12 mb-2">
                                <ul>
                                  <li>Web Design</li>
                                  <li>Design UI/UX</li>
                                  <li>Web Framework</li>
                                  <li>Pengembangan Aplikasi</li>
                                  <li>Final Project</li>
                                </ul>
                              </div>
                        </div>

                        <br/>

                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="minat" id="minat_1" type="radio" class="custom-control-input" value="dm" required="required"> 
                          <label for="minat_1" class="custom-control-label">Digital Marketing (DM)</label>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-8 mt-3">Studi Materi : </label>
                              <div class="col-12 mb-2">
                                <ul>
                                  <li>Multimedia</li>
                                  <li>Microsoft Office</li>
                                  <li>CEO</li>
                                  <li>Brand Marketing</li>
                                  <li>Final Project</li>
                                </ul>
                              </div>
                        </div>

                      </div>
                    </div> 

                    

                </form>

                <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                <script>
                            function tampilkan(){
                            
                            var pesan=document.getElementById("minat").keterangan.value;
                            var p_kontainer=document.getElementById("container");
                            
                            if (pesan=="ppl")
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
                                            <button class="btn btn-primary">Selanjutnya</button>
                                        </div>
                                    </div>`;
                                }
                            else if (pesan=="dm")
                                {
                                    p_kontainer.innerHTML=`<p align="center" class="text-danger"><b>Mohon maaf, Anda tidak bisa melanjutkan Pendaftaran.<br/>Anda harus memiliki gambaran mengenai Pesantren PeTIK Jombang sebelum melakukan pendaftaran</b></p>`;
                                }
                            }
                </script>

                


                <!-- Tutup Formulir Keseluruhan -->

                  <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="{{ url('/pmb3') }}"><i class="fa-solid fa-circle-chevron-left"></i> Kembali&nbsp; </a>
                  <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="{{ url('/pmb5') }}"> Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></a>
                  
                 
              </div>
            </div>
    </div>
    <br><br><br><br>
    
@endsection

