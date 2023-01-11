@extends('frontend.index')
@section('content')
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
            <img class="navbar-brand" src="{{asset('foto/Petik_YBM2.png' )}}" height="50px" width="149px" alt="">
            
                <a class="navbar-brand fw-bold" href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li ><a class="nav-link me-lg-3" href="https://petik-jombang.vercel.app/"  target="_blank">Profil PeTIK Jombang</a></li>

                        <!-- link tag ke panduan yah -->
                        <li ><a class="nav-link me-lg-3" href="#panduan">Panduan</a></li>

                        <!-- link tag ke pendaftaran -->
                        <li ><a class="nav-link me-lg-3" href="#pendaftaran">Pendaftaran</a></li>
                    </ul>

                   <!-- <button class="btn btn-primary bg-gradient-primary-to-secondary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="#" data-bs-target="#" href="https://www.instagram.com/petik_jombang/" target="_blank">
                        <span class="d-flex align-items-center"> -->
                            
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="{{ url('/pmbpetikjombang') }}"> <i class="fa-solid fa-graduation-cap"></i>&nbsp;Daftar Sekarang</a>&nbsp;
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view" target="_blank"> <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp;Download Brosur</a>
                            
                            <!-- <a class="btn btn-primary bg-gradient-primary-to-secondary py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download Brosur</a> -->
                        <!-- </span>
                    </button> -->

        


                </div>
            </div>
        </nav>
        <!-- page view-->
        <header class="masthead"  id="panduan">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- panduan -->
                        <div class="mb-4 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">PMB PeTIK Jombang</h1>
                            <p class="lead fw-normal text-muted mb-3">Penerimaan Mahasantri Baru Tahun Angkatan 2023/2024.</p>
                            <!-- <div class="d-flex flex-row align-items-center"> -->
                            <!-- <div class="flex-row ml-6col-md-8 col-md-offset-2 text-right mb-3">
                                <a href="https://www.instagram.com/petik_jombang/" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://www.youtube.com/@petikjombang4973" target="_blank"><i class="fa-brands fa-youtube fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://petikjombang.com/" target="_blank"><i class="fa-brands fa-google fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://www.facebook.com/petikIIjombang/" target="_blank"><i class="fa-brands fa-facebook-f fa-2x"></i></a>
                            </div>  -->

                        </div>
                </div>

                    <div class="col-lg-6">
                        <!-- video tutorial-->
                        <div class="masthead-device-mockup">
                            <!-- <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"> -->
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        
                                        <video muted="" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{asset('assets2/assets/img/profil2.mp4')}}" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

             
                </div>
            </div>

                        

               

          
        </header>
        <!-- visi misi-->
        <!-- 11299 - 11380 -->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-12">
                        <div class="h5 fs-1 text-white mb-4"><h5>"Pencetak Mahasantri Berakhlak Mulia Dan Ahli Teknologi."</h5></div>
                        
                    </div>

                    <!-- <div class="mb-4 mt-4 mb-lg-0 text-center text-lg-start">
                        <div class="flex-row ml-6col-md-8 col-md-offset-2 text-right mb-3">
                            <a class="btn btn-secondary bg-gradient-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view" target="_blank">Download Brosur</a>
                        </div>
                            

                    </div> -->
                </div>
            </div>
        </aside>
        <!-- pendaftaran-->
        <section id="pendaftaran">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Ikon untuk pendaftaran-->
                                    <div class="text-center">
                                        <i class="fa-solid fa-file-circle-check icon-feature  d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Syarat & Ketentuan</h4>
                                        <!-- <a class="text-muted mb-0" href="#" >Selengkapnya</a> -->
                                        <a href="#Syarat&Ketentuan" class="stretched-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Ikon untuk pendaftaran-->
                                    <div class="text-center">
                                        <i class="fa-solid fa-shoe-prints icon-feature  d-block mb-3 fa-3x"></i>
                                       
                                        <h4 class="font-alt">Alur Pendaftaran</h4>
                                        <!-- <a class="text-muted mb-0" href="#" >Selengkapnya</a> -->
                                        <a href="#AlurPendaftaran" class="stretched-link">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Ikon untuk pendaftaran-->
                                    <div class="text-center">
                                        <i class="fa-solid fa-file-lines icon-feature  d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Lampiran Berkas</h4>
                                        <!-- <a class="text-muted mb-0" href="#" >Selengkapnya</a> -->
                                        <a href="#LampiranBerkas" class="stretched-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Ikon untuk pendaftaran-->
                                    <div class="text-center">
                                        <i class="fa-solid fa-file-pen icon-feature  d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Formulir Pendaftaran</h4>
                                        <a href="#FormulirPendaftaran" class="stretched-link">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup mb-4">
                            
                            <img class="" src="{{asset('foto/Group_2.svg' )}}" height="90%" width="100%" alt="">
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Basic features section-->
        <section class="bg-white" id="Syarat&Ketentuan">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                        <!-- <h4 class="display-3 lh-1 mb-4">Syarat & Ketentuan</h4> -->
                        <!-- <p class="lead fw-normal text-muted mb-5 mb-lg-0">How much prosedure</p> -->
                        <!-- <img class="" src="{{asset('foto/Syarat.svg' )}}" height="180%" width="100%" alt=""> -->

                        <h4 class="display-3 lh-1 mb-4">Syarat & Ketentuan</h4>

                        <p class="lead mb-5 mb-lg-0">Syarat Dan Ketentuan Calon Mahasantri Pesantren PeTIK Jombang Sebagai Berikut :</p><br>
                        <ul>
                            <li><b>Antusias Tinggi</b>, Untuk Mempelajari Teknologi Informasi Dan Komunikasi (Jurusan Pengembangan Perangkat Lunak Atau Digital Marketing)</li>
                            <li>Berasal dari<b>Keluarga dengan Perekonomian Terbatas</b> (Dhuafa).</li>
                            <li>Dikhususkan untuk <b>Laki-laki Muslim</b> Dengan Lulusan <b>(SMA / SMK / MA)</b> Tahun <b>2021,2022,2023</b> .</li>
                            <li><b>Sehat</b> Jasmani Dan Rohani.</li>
                            <li>Mampu <b>Membaca Al Qur’an</b> Dengan Baik Dan Bersedia Menambah Hafalan Al Qur'an Minimal 2 Juz.</li>
                            <li><b>Bersedia Mengikuti Peraturan</b> Yang Ditetapkan Oleh Pihak Pesantren.</li>
                        </ul>
                        
                        

                        
                    </div>
                    <div class="col-sm-9 col-md-6">
                        <!-- <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="{{asset('foto/Group_2.svg' )}}"  height="95%" width="119%" alt="..." /></div> -->
                        <img class="" src="{{asset('foto/Group_3.svg' )}}" height="80%" width="90%" alt="">
                        
                    </div>
                </div>
            </div>
        </section>

       

        <section class="bg-white" id="LampiranBerkas">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                        <!-- <h4 class="display-3 lh-1 mb-4">Lampiran Berkas</h4>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">How much prosedure</p> -->
                        <!-- <img class="" src="{{asset('foto/lampiran.svg' )}}" height="180%" width="100%" alt=""> -->
                        <img class="" src="{{asset('foto/Group_6.svg' )}}" height="80%" width="90%" alt="">
                    </div>
                    <div class="col-sm-9 col-md-6">
                        <!-- <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="{{asset('foto/Group_2.svg' )}}"  height="95%" width="119%" alt="..." /></div> -->
                        <!-- <img class="" src="{{asset('foto/Group_6.svg' )}}" height="80%" width="90%" alt=""> -->
                        <!-- <img class="" src="{{asset('foto/Lampiran.svg' )}}" height="180%" width="100%" alt=""> -->

                        <h4 class="display-3 lh-1 mb-4">Lampiran Berkas</h4>

                        <p class="lead mb-5 mb-lg-0">Lampiran Berkas Yang Harus Disiapkan Sebagai Berikut :</p><br>
                        <ul>
                            <li><b>Surat Keterangan Tidak Mampu (SKTM)</b>  Dari Pihak Kelurahan Atau <b>Kartu Indonesia Pintar (KIP)</b>  Atau Surat Resmi  Sejenis Yang Menunjukkan Bahwa Berasal Dari Keluarga Kurang Mampu.</li>
                            <li><b>Surat Keterangan Sehat Dari PUSKESMAS</b> Atau <b>Klinik</b> Setempat.</li>
                            <li><b>Salinan Kartu Keluarga</b>  Dan <b>Kartu Tanda Penduduk</b> Atau <b>Kartu Pelajar</b>.</li>
                            <li><b>Salinan Ijazah (SMA / SMK / MA)</b> Atau <b> Surat Keterangan Aktif (SMA / SMK / MA)</b> Dari Pihak Sekolah (Jika Belum Memiliki Ijazah).</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white" id="AlurPendaftaran">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                        <!-- <h4 class="display-3 lh-1 mb-4">Alur Pendaftaran</h4>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">How much prosedure</p> -->
                        <!-- <img class="" src="{{asset('foto/Alur.svg' )}}" height="180%" width="100%" alt=""> -->

                        <h4 class="display-3 lh-1 mb-4">Alur Pendaftaran</h4>

                        <p class="lead mb-5 mb-lg-0">Alur Pendaftaran Calon Mahasantri Pesantren PeTIK Jombang Sebagai Berikut :</p><br>
                        <ul>
                            <li>Siapkan Berkas-Berkas Persyaratan Yang Telah Ditentukan.</li>
                            <li>Mengisi Formulir Pendaftaran Secara Online Dengan Akses Link <b>pmbpetikjombang.com</b> Atau Dengan Melalui 2 Cara :
                                <ul>
                                    <li>Upload Berkas Secara Online Dalam Bentuk <b>Scan Format (JPG / PNG / PDF)</b>  Melalui Link Akses <b>pmbtpetikjombang.com</b>  Atau Menggunakan via Email : <b>petikjombang@gmail.com</b> .</li>
                                    <li>Atau Bisa Kirim Dengan Kurir Atau Datang Langsung Ke Alamat Ini <b>Pesantren Teknologi Informasi Dan Komunikasi YBM PLN, Plosogeneng, Jombang, Kec. Jombang, Jawa Timur 61416</b> .</li>                             
                                </ul>
                            </li>
                            <li>Calon Mahasantri Yang Sudah Mengisi Formulir Pendaftaran Akan Dimasukkan Ke Dalam Grup Whatsapp <b>“Pendaftar PeTIK 2023/2024”</b> .</li>
                            <li><b>Verifikasi Panitia</b> , Panitia Akan Mengumumkan Hasil Seleksi Melalui Website Dan Grup Whatsapp.</li>
                            <li><b>Batas Pengisian Formulir Dan Penyerahan Berkas</b>  Persyaratan Paling Lambat Tanggal <b>30 Juni 2023</b>.</li>
                            <li>Pendaftaran Terbagi Menjadi Dua Gelombang, Pada Gelombang Pertama Dilakukan Pada Tanggal <b>15 Desember 2022 - 15 Maret 2023</b> . Pada Gelombang Kedua Akan Dilakukan Pada Tanggal <b>16 Maret 2023 - 30 Juni 2023</b> .</li>
                        </ul>
                    </div>
                    <div class="col-sm-9 col-md-6">
                        <!-- <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="{{asset('foto/Group_2.svg' )}}"  height="95%" width="119%" alt="..." /></div> -->
                        <img class="" src="{{asset('foto/Group_5.svg' )}}" height="80%" width="90%" alt="">

                        
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white" id="FormulirPendaftaran">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                        <!-- <h4 class="display-3 lh-1 mb-4">Formulir Pendaftaran</h4>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">How much prosedure</p> -->
                        {{-- <!-- <img class="" src="{{asset('foto/formulir.svg' )}}" height="180%" width="100%" alt=""> --> --}}
                        <img class="" src="{{asset('foto/Group_4.svg' )}}" height="80%" width="90%" alt="">
                    </div>
                    <div class="col-sm-9 col-md-6">
                        <!-- <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="{{asset('foto/Group_2.svg' )}}"  height="95%" width="119%" alt="..." /></div> -->
                        {{-- <!-- <img class="" src="{{asset('foto/Group_4.svg' )}}" height="80%" width="90%" alt=""> -->
                        <!-- <img class="" src="{{asset('foto/Formulir.svg' )}}" height="180%" width="100%" alt=""> --> --}}

                        <h4 class="display-3 lh-1 mb-4">Formulir Pendaftaran</h4>

                        <p class="lead mb-5 mb-lg-0">Siapkan Berkas Persyaratan Dan Silahkan Isi Formulir Pendaftaran Dalam Link <b><a href="{{ url('/form-pmb') }}" target="_blank">pmbtpetikjombang.com</a></b>.</p>
                        <br>
                        <p class="lead mb-5 mb-lg-0"><b>Catatan</b>  :
                        Bagi Yang Akan Mengirimkan Berkas Via Online Maka Diharapkan Menyiapkan Semua Berkas Yang Dibutuhkan Terlebih Dahulu Dalam Bentuk .PDF Atau .JPG Sebelum Mengisi Formulir. Bagi Yang Akan Mengirimkan Berkas Via Email Atau Jasa Kirim Maka Dipersilakan Isi Formulir Terlebih Dahulu Kemudian Kirimkan Berkas Tersebut Pada Alamat Pesantren.</p>
                        <br>
                        <p class="lead mb-5 mb-lg-0"> Formulir Pendaftaran : PMBT Pesantren PeTIK akan ditutup pada tanggal <b>30 Juni 2023</b></p>
                        
                       
                    </div>
                </div>
            </div>
        </section>


@endsection