@extends('daftar.index')
@section('content')

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg mb-5 navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <!-- <img class="navbar-brand" src="{{asset('foto/Petik_YBM.png' )}}" height="70px" width="149px" alt=""> -->
            <img class="navbar-brand" src="{{asset('foto/Petik_YBM2.png' )}}" height="50px" width="149px" alt="">

            <a class="navbar-brand fw-bold" href="#page-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">

                </ul>
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
                    href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view" target="_blank"> <i
                        class="fa-solid fa-cloud-arrow-down"></i>&nbsp; Download Brosur</a>&nbsp;&nbsp;
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
                    href="{{ url('/') }}"> <i class="fa-solid fa-bookmark"></i>&nbsp; Panduan Informasi</a>

            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>



    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Lampiran Berkas</h3>
            </div>
            <div class="card-body">
                <!-- Formulir Peminatan -->
                <form action="/pmbl" method="GET" id="form1" name="form1">
                    <div class="form-group">
                        <label for="keterangan">Metode Pengiriman Berkas</label>
                        <div class="form-group -ml-3col-12">
                            <select id="keterangan" name="keterangan" class="custom-select" required="required"
                                onclick="tampilkan()">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                    </div>
                    <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                    <script>
                        function tampilkan() {

                            var pesan = document.getElementById("form1").keterangan.value;
                            var p_kontainer = document.getElementById("container");

                            if (pesan == "online") {
                                p_kontainer.innerHTML = `
                                    <div class="form-group">
                                    <label for="" class="col-12 mt-3">Silahkan Upload Semua Berkas Persyaratan Yang Telah Ditentukan Lalu Jadikan Satu File .PDF atau .Word :</label>
                                      <div class="col-12">
                                        <ol>
                                          <li>Surat Keterangan Tidak Mampu</li>
                                          <li>Surat Keterangan Sehat</li>
                                          <li>Kartu Tanda Penduduk Atau Kartu Pelajar</li>
                                          <li>Kartu Keluarga</li>
                                          <li>Salinan Ijazah/Surat Keterangan Siswa Aktif Bersekolah (SMA/SMK/Aliyah)</li>
                                        </ol>
                                      </div>
                                      
                                    </div>
                                    <div class="form-group">
                                      <div class="col-12">
                                        <label for="" class="form-label text-center">Upload Berkas :</label>
                                        <input type="file" class="form-control" id="" multiple>
                                      </div>
                                    </div>
                                    
                                    `;
                            } else if (pesan == "offline") {
                                p_kontainer.innerHTML = `
                                    <div class="form-group">
                                    <div>
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63287.4495946235!2d112.1531045436859!3d-7.524085847449887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783fab1dc80271%3A0x8c4c1651240d8951!2sPesantren%20PeTIK%20II%20Jombang%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1672736092825!5m2!1sid!2sid" width="100%" height="200%" style="border:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                      <label for="" class="col-12 mt-3 text-center">Alamat Kami : <b>Pesantren Teknologi Informasi Dan Komunikasi YBM PLN, Plosogeneng, Jombang, Kec. Jombang, Jawa Timur 61416.</b> </label>
                                    
        
                                    </div>
                                    `;
                            } else if (pesan == "email") {
                                p_kontainer.innerHTML = `
                                    <div class="form-group">
                                        <label for="" class="col-12 mt-3 text-center">Alamat Email : <a href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view">petikjombang@gmail.com</a>   </label>
        
                                    </div>
                                    `;
                            }
                        }

                    </script>

                    <div class="container">
                        <p id="container"></p>
                    </div>



                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Kirim Data</i></button>
                        </div>
                    </div>

                </form>



                <!-- <form action="#" method="GET" id="minat" name="minat">



                    <div class="form-group">
                      <label class="col-12">Metode Pengiriman Berkas</label> 
                      <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan Pengiriman --</option>
                            <option value="1">Via Online</option>
                            <option value="2">Via Email</option>
                            <option value="3">Via Jasa Kurir</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="" class="col-8 mt-3">Silahkan Upload Semua Berkas Persyaratan Yang Telah Ditentukan :</label>
                        <div class="col-12">
                          <ol>
                            <li>Surat Keterangan Tidak Mampu</li>
                            <li>Surat Keterangan Sehat</li>
                            <li>Kartu Tanda Penduduk Atau Kartu Pelajar</li>
                            <li>Kartu Keluarga</li>
                            <li>Salinan Ijazah/Surat Keterangan Siswa Aktif Bersekolah (SMA/SMK/Aliyah)</li>
                          </ol>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-12">
                          <label for="" class="form-label text-center">Upload Berkas :</label>
                          <input type="file" class="form-control" id="" multiple>
                        </div>
                      </div>
                    </div> 

                </form> -->




                <!-- Tutup Formulir Keseluruhan -->

                <!-- <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="{{ url('/pmb5') }}"><i class="fa-solid fa-circle-chevron-left"></i> Kembali&nbsp; </a>
                  <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="{{ url('/pmbl') }}"> Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></a> -->


            </div>
        </div>
    </div>
    <br><br><br><br>

    @endsection
