@extends('frontend.index')
@section('content')
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
            <img class="navbar-brand" src="{{asset('foto/Petik_YBM.png' )}}" height="70px" width="149px" alt="">
            
                <a class="navbar-brand fw-bold" href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <!-- link tag ke panduan yah -->
                        <!-- <li class="nav-item"><a class="nav-link me-lg-3" href="https://petikjombang.com/">Profile</a></li> -->
                       
                        <!-- link tag ke panduan yah -->
                        <li ><a class="nav-link me-lg-3" href="#panduan">Panduan</a></li>

                        <!-- link tag ke pendaftaran -->
                        <li ><a class="nav-link me-lg-3" href="#pendaftaran">Pendaftaran</a></li>

                        <li ><a class="nav-link me-lg-3" href="https://petik-jombang.vercel.app"  target="_blank">Profil PeTIK Jombang</a></li>

                    </ul>

                   <!-- <button class="btn btn-primary bg-gradient-primary-to-secondary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="#" data-bs-target="#" href="https://www.instagram.com/petik_jombang/" target="_blank">
                        <span class="d-flex align-items-center"> -->
                            
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="https://petikjombang.com/" target="_blank"> <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp;Download Brosur</a>
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
                            <h1 class="display-1 lh-1 mb-3">PMB PeTIK II Jombang</h1>
                            <p class="lead fw-normal text-muted mb-3">Penerimaan Mahasantri Baru Tahun Angkatan 2023/2024.</p>
                            <!-- <div class="d-flex flex-row align-items-center"> -->
                            <!-- <div class="flex-row ml-6col-md-8 col-md-offset-2 text-right mb-3">
                                <a href="https://www.instagram.com/petik_jombang/" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://www.youtube.com/@petikjombang4973" target="_blank"><i class="fa-brands fa-youtube fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://petikjombang.com/" target="_blank"><i class="fa-brands fa-google fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://www.facebook.com/petikIIjombang/" target="_blank"><i class="fa-brands fa-facebook-f fa-2x"></i></a>
                            </div>  -->

                         
                           
                            
                        </div>

                        <a class="btn btn-primary bg-gradient-primary-to-secondary px-3 mb-2 mb-lg-0 rounded-pill" href="https://petikjombang.com/" target="_blank"> <i class=""></i>&nbsp;Daftar Sekarang</a>
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
                                        
                                        <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{asset('assets2/assets/img/demo-screen.mp4')}}" type="video/mp4" /></video>
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
                        <div class="h5 fs-1 text-white mb-4"><h5>"Pencetak Mahasantri Dengan Ahli Ilmu Teknologi Terbaik Yang Berakhlak Mulia."</h5></div>
                        
                    </div>
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

                        <p class="lead mb-5 mb-lg-0">Syarat dan Ketentuan Calon Mahasantri Pesantren PeTIK Jombang sebagai berikut :</p><br>
                        <ul>
                            <li><b>Antusias Tinggi</b>, untuk mengeyam pendidikan untuk mempelajari ilmu agama dan dunia teknologi.</li>
                            <li>Berasal dari<b>Keluarga dengan Perekonomian Terbatas</b>(Dhuafa).</li>
                            <li>Dikhususkan untuk <b>Lelaki Muslim</b> dengan lulusan <b>Sekolah Menegah Atas  (SMA) maupun sederajat</b> lulusan tahun angkatan <b>2021,2022,2023</b> .</li>
                            <li><b>Sehat</b> jasmani dan rohani.</li>
                            <li>Mampu <b>membaca Al Qur’an</b> dengan baik.</li>
                            <li><b>Bersedia mengikuti peraturan</b> yang ditentukan oleh pihak Pesantren.</li>
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

                        <p class="lead mb-5 mb-lg-0">Lampiran Berkas yang harus dilengkapi sebagai berikut :</p><br>
                        <ul>
                            <li><b>Surat Keterangan Tidak Mampu (SKTM)</b>  dari pihak Kelurahan atau <b>Kartu Indonesia Pintar (KIP)</b>  atau Surat Resmi  sejenis yang menunjukkan bahwa berasal dari Keluarga Kurang Mampu.</li>
                            <li><b>Surat Keterangan Sehat dari PUSKESMAS</b> atau <b>Klinik</b> setempat.</li>
                            <li><b>Salinan Kartu Keluarga</b>  dan <b>Kartu Tanda Penduduk</b> atau <b>Kartu Pelajar</b> .</li>
                            <li><b>Salinan Ijazah Sekolah Menengah Atas (SMA)</b>  maupun sederajat atau <b> Surat Keterangan Aktif (SMA/SMK/Aliyah)</b> dari pihak Sekolah (Jika belum memiliki ijazah).</li>
                            
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

                        <p class="lead mb-5 mb-lg-0">Alur pendaftaran Calon Mahasantri Pesantren PeTIK Jombang sebagai berikut :</p><br>
                        <ul>
                            <li>Siapkan berkas-berkas persyaratan yang telah ditentukan.</li>
                            <li>Mengisi formulir pendaftaran secara online dengan akses link <b>pmbt.petikjombang.com</b>atau dengan melalui 2 cara :
                                <ul>
                                    <li>Upload berkas secara online dalam bentuk <b>scan format (JPG / PNG / PDF)</b>  melalui link akses <b>pmbt.petikjombang.com</b>  atau menggunakan via <b>email : petikjombang@gmail.com</b> .</li>
                                    <li>Atau bisa kirim dengan kurir atau datang langsung ke alamat ini <b>Pesantren Teknologi Informasi dan Komunikasi YBM PLN, Plosogeneng, Jombang, Kec. Jombang, Jawa Timur 61416</b> .</li>                             
                                </ul>
                            </li>
                            <li>Calon Mahasantri yang sudah mengisi formulir pendaftaran akan dimasukkan ke dalam grup Whatsapp <b>“Pendaftar PeTIK 2023”</b> .</li>
                            <li><b>Verifikasi Panitia</b> , Panitia akan mengumumkan hasil seleksi melalui website dan grup Whatsapp.</li>
                            <li><b>Batas pengisian formulir dan penyerahan berkas</b>  persyaratan paling lambat tanggal 30 Juni 2023.</li>
                            <li>Pendaftaran terbagi menjadi dua gelombang, pada gelombang pertama dilakukan pada tanggal <b>1 Januari 2023 - 15 Maret 2023</b> . Pada gelombang kedua akan dilakukan pada tanggal <b>16 Maret 2023 - 30 Juni 2023</b> .</li>
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
                        <!-- <img class="" src="{{asset('foto/formulir.svg' )}}" height="180%" width="100%" alt=""> -->
                        <img class="" src="{{asset('foto/Group_4.svg' )}}" height="80%" width="90%" alt="">
                    </div>
                    <div class="col-sm-9 col-md-6">
                        <!-- <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="{{asset('foto/Group_2.svg' )}}"  height="95%" width="119%" alt="..." /></div> -->
                        <!-- <img class="" src="{{asset('foto/Group_4.svg' )}}" height="80%" width="90%" alt=""> -->
                        <!-- <img class="" src="{{asset('foto/Formulir.svg' )}}" height="180%" width="100%" alt=""> -->

                        <h4 class="display-3 lh-1 mb-4">Formulir Pendaftaran</h4>

                        <p class="lead mb-5 mb-lg-0">Siapkan berkas persyaratan dan Silahkan isi formulir pendaftaran dalam link <b>pmbt.petikjombang.com</b></p>
                        <br>
                        <p class="lead mb-5 mb-lg-0"><b>Catatan</b>  :
                        Bagi yang akan mengirimkan berkas via online maka diharapkan menyiapkan semua berkas yang dibutuhkan terlebih dahulu dalam bentuk .pdf atau .jpg sebelum mengisi formulir. Bagi yang akan mengirimkan berkas via email atau jasa kirim maka dipersilakan isi formulir terlebih dahulu kemudian kirimkan berkas tersebut.</p>
                        <br>
                        <p class="lead mb-5 mb-lg-0"> Formulir Pendaftaran : PMBT Pesantren PeTIK akan ditutup pada tanggal <b>30 Juni 2023</b></p>
                        
                       
                    </div>
                </div>
            </div>
        </section>


@endsection