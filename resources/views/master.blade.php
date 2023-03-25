@extends('frontend.index')
@section('content')
<body id="page-top">
       
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-4">
            <img class="navbar-brand" src="{{asset('foto/Petik_YBM2.png' )}}" height="50px" width="149px" alt="">
            
                <a class="navbar-brand fw-bold" href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li ><a class="nav-link me-lg-3" href="https://petikjombang.com"  target="_blank">Profil PeTIK Jombang</a></li>

                    
                        <li ><a class="nav-link me-lg-3" href="#panduan">Panduan</a></li>
                       

                    
                        <li ><a class="nav-link me-lg-3" href="#pendaftaran">Pendaftaran</a></li>
                        <li ><a class="nav-link me-lg-3" href="#waktu">Waktu Tes</a></li>
                    </ul>

                
                       
                            
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="{{ url('/pmbpetikjombang') }}"> <i class="fa-solid fa-graduation-cap"></i>&nbsp;Daftar Sekarang</a>&nbsp;
                            <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="https://drive.google.com/file/d/1HAExg37krI1UrifiqEC0WAMYuoCVxqc9/view" target="_blank"> <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp;Download Brosur</a>
                          

        


                </div>
            </div>
        </nav>

        <header class="masthead"  id="panduan">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                       
                        <div class="mb-4 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">PMB PeTIK Jombang</h1>
                            <p class="lead fw-normal text-muted mb-3">Penerimaan Mahasantri Baru Tahun Angkatan 2023/2024.</p>
                          

                        </div>
                </div>

                    <div class="col-lg-6">
                      
                        <div class="masthead-device-mockup">
                          
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
                                        
                                        <video muted="" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="{{asset('assets2/assets/img/PF.mp4')}}" type="video/mp4" /></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

             
                </div>
            </div>

                        

               

          
        </header>
       
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-12">
                        <div class="h5 fs-1 text-white mb-4"><h5>"Pencetak Mahasantri Berakhlak Mulia dan Ahli Teknologi."</h5></div>
                        
                    </div>

                   
                </div>
            </div>
        </aside>
      
        <section id="pendaftaran">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                 
                                    <div class="text-center">
                                        <i class="fa-solid fa-file-circle-check icon-feature  d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Syarat & Ketentuan</h4>
                                    
                                        <a href="#Syarat&Ketentuan" class="stretched-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                
                                    <div class="text-center">
                                        <i class="fa-solid fa-shoe-prints icon-feature  d-block mb-3 fa-3x"></i>
                                       
                                        <h4 class="font-alt">Alur Pendaftaran</h4>
                                     
                                        <a href="#AlurPendaftaran" class="stretched-link">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    
                                    <div class="text-center">
                                        <i class="fa-solid fa-file-lines icon-feature  d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Lampiran Berkas</h4>
                                      
                                        <a href="#LampiranBerkas" class="stretched-link">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
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
                       
                        <div class="features-device-mockup mb-4">
                            
                            <img class="" src="{{asset('foto/Group_2.svg' )}}" height="90%" width="100%" alt="">
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>



       
        <section class="bg-white" id="Syarat&Ketentuan">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                      

                        <h4 class="display-3 lh-1 mb-4">Syarat & Ketentuan</h4>

                        <p class="lead mb-5 mb-lg-0 text-justify">Syarat dan Ketentuan Calon Mahasantri PeTIK Jombang sebagai berikut :</p><br>
                        <ul class="text-justify">
                            <li class="text-justify"><b>Antusias Tinggi</b>, untuk mempelajari teknologi informasi dan komunikasi jurusan(Pengembangan Perangkat Lunak atau Digital Marketing)</li>
                            <li class="text-justify">Berasal dari<b> Keluarga dengan Perekonomian Terbatas</b> (Dhuafa).</li>
                            <li class="text-justify">Dikhususkan untuk <b>Laki-Laki Muslim</b> dengan lulusan <b>(SMA / SMK / MA)</b> tahun angkatan <b>2021,2022,2023</b> .</li>
                            <li class="text-justify"><b>Sehat</b> jasmani dan rohani.</li>
                            <li class="text-justify">Mampu <b>membaca Al Qur’an</b> dengan baik dan bersedia menambah hafalan Al Qur'an minimal 2 Juz.</li>
                            <li class="text-justify"><b>Bersedia mengikuti peraturan</b> yang ditetapkan oleh pihak Pesantren.</li>
                        </ul>
                        
                        

                        
                    </div>
                    <div class="col-sm-9 col-md-6">
                       
                        <img class="" src="{{asset('foto/Group_3.svg' )}}" height="80%" width="90%" alt="">
                        
                    </div>
                </div>
            </div>
        </section>

       

        <section class="bg-white" id="LampiranBerkas">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                       
                        <img class="" src="{{asset('foto/Group_6.svg' )}}" height="80%" width="90%" alt="">
                    </div>
                    <div class="col-sm-9 col-md-6">
                       

                        <h4 class="display-3 lh-1 mb-4">Lampiran Berkas</h4>

                        <p class="lead mb-5 mb-lg-0 text-justify"">Lampiran berkas yang harus disiapkan sebagai berikut :</p><br>
                        <ul>
                            <li class="text-justify"><b>Surat Keterangan Tidak Mampu (SKTM)</b>  dari pihak Kelurahan atau <b>Kartu Indonesia Pintar (KIP)</b>  atau surat resmi  sejenis yang menunjukkan bahwa berasal dari Keluarga Kurang Mampu.</li>
                            <li class="text-justify"><b>Surat Keterangan Sehat dari PUSKESMAS</b> atau <b>Klinik</b> setempat.</li>
                            <li class="text-justify"><b>Salinan Kartu Keluarga</b>  dan <b>Kartu Tanda Penduduk</b> atau <b>Kartu Pelajar</b>.</li>
                            <li class="text-justify"><b>Salinan ijazah (SMA / SMK / MA)</b> atau <b> Surat Keterangan Aktif (SMA / SMK / MA)</b> dari pihak Sekolah (jika belum memiliki ijazah).</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white" id="AlurPendaftaran">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                       

                        <h4 class="display-3 lh-1 mb-4">Alur Pendaftaran</h4>

                        <p class="lead mb-5 mb-lg-0 text-justify">Alur pendaftaran Calon Mahasantri PeTIK Jombang sebagai berikut :</p><br>
                        <ul class="text-justify">
                            <li class="text-justify">Siapkan berkas-berkas persyaratan yang telah ditentukan.</li>
                            <li class="text-justify">Mengisi formulir pendaftaran secara online dengan akses link <a href="http://pmb.petikjombang.com/pmbpetikjombang">pmb.petikjombang.com</a> atau dengan melalui 2 cara :
                                <ul class="text-justify">
                                    <li class="text-justify">Upload berkas secara online dalam bentuk format<b> (JPG / PNG / PDF)</b>, lalu disatukan menjadi format <b>(ZIP atau RAR)</b> dengan nama folder<b> (Nama_Lengkap)</b>  melalui link akses <a href="http://pmb.petikjombang.com/pmbpetikjombang">pmb.petikjombang.com</a>  atau menggunakan via Email : <b>pmb.petikjombang@gmail.com</b>.</li>
                                    <li class="text-justify">Atau bisa kirim dengan kurir atau datang langsung ke alamat ini <b>Pesantren Teknologi Informasi Dan Komunikasi YBM PLN, Jl. KH. Bisri Syansuri RT.01/RW.05, Plosogeneng, Kec. Jombang, Jombang, Jawa Timur 61416</b>.</li>  
                                    <li class="text-justify">Dan untuk via email maupun via kurir <b>diwajibkan</b> mengisi formulir pada akses link <a href="http://pmb.petikjombang.com/pmbpetikjombang">pmb.petikjombang.com</a> dan bukti pengiriman diuploadkan pada berkas yang sesuai pada pengiriman.</li>                           
                                </ul>
                            </li>
                            <li class="text-justify">Calon Mahasantri yang sudah mengisi formulir pendaftaran akan dimasukkan ke dalam grup Whatsapp <b>“ Pendaftar PeTIK 2023/2024 ”</b> .</li>
                            <li class="text-justify"><b>Verifikasi Panitia</b> , Panitia akan mengumumkan hasil seleksi melalui website dan grup Whatsapp.</li>
                            <li class="text-justify"><b>Batas pengisian formulir dan penyerahan berkas</b>  persyaratan paling lambat tanggal <b>30 Juni 2023</b>.</li>
                            <li class="text-justify">Pendaftaran terbagi menjadi dua gelombang, pada gelombang pertama dilakukan pada tanggal <b>15 Desember 2022 - 15 Maret 2023</b> . Pada gelombang kedua akan dilakukan pada tanggal <b>16 Maret 2023 - 30 Juni 2023</b> .</li>
                        </ul>
                    </div>
                    <div class="col-sm-9 col-md-6">
                       
                        <img class="" src="{{asset('foto/Group_5.svg' )}}" height="80%" width="90%" alt="">

                        
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white" id="FormulirPendaftaran">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                      
                        <img class="" src="{{asset('foto/Group_4.svg' )}}" height="80%" width="90%" alt="">
                    </div>
                    <div class="col-sm-9 col-md-6">
                       

                        <h4 class="display-3 lh-1 mb-4">Formulir Pendaftaran</h4>

                        <p class="lead mb-5 mb-lg-0 text-justify">Siapkan berkas persyaratan dan silahkan isi formulir pendaftaran dalam link <b><a href="{{ url('/pmbpetikjombang') }}" target="_blank">pmb.petikjombang.com</a></b>.</p>
                        <br>
                        <p class="lead mb-5 mb-lg-0 text-justify"><b>Catatan</b>  :
                        Bagi yang akan mengirimkan berkas via online maka diharapkan menyiapkan semua berkas yang dibutuhkan terlebih dahulu dalam bentuk <b>(JPG / PNG / PDF)</b>  lalu disatukan menjadi format <b>(ZIP atau RAR)</b>  dengan nama folder <b>(Nama_Lengkap)</b>  sebelum mengisi formulir. Bagi yang akan mengirimkan berkas via email atau jasa kirim maka diwajibkan mengisi formulir terlebih dahulu dan upload foto bukti pengiriman untuk pada formulir, Kemudian kirimkan berkas tersebut pada alamat Pesantren.</p>
                        <br>
                        <p class="lead mb-5 mb-lg-0 text-justify"> Formulir pendaftaran : PMB PeTIK Jombang akan ditutup pada tanggal <b>30 Juni 2023</b>.</p>
                        
                       
                    </div>
                </div>
            </div>
        </section><br>

        <section class="bg-white" id="waktu">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                    <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                 
                                    <div class="text-center">
                                        <!-- <i class="fa-solid fa-file-circle-check icon-feature  d-block mb-3 fa-3x"></i> -->
                                        <i class="fa-solid fa-1 icon-feature d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Tes Akademik</h4>
                                        <p>19 Januari 2023</p>
                                    
                                        <!-- <a href="#Syarat&Ketentuan" class="stretched-link">Selengkapnya</a> -->
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                
                                    <div class="text-center">
                                        <!-- <i class="fa-solid fa-shoe-prints icon-feature  d-block mb-3 fa-3x"></i> -->
                                        <i class="fa-solid fa-2 icon-feature d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Tes Al Qur'an</h4>
                                        <p>19 Januari 2023</p>
                                        <!-- <a href="#AlurPendaftaran" class="stretched-link">Selengkapnya</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    
                                    <div class="text-center">
                                        <!-- <i class="fa-solid fa-file-lines icon-feature  d-block mb-3 fa-3x"></i> -->
                                        <i class="fa-solid fa-3 icon-feature d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Tes Tanya Jawab</h4>
                                        <p>19 Januari 2023</p>
                                        <!-- <a href="#LampiranBerkas" class="stretched-link">Selengkapnya</a> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                    <div class="text-center">
                                        <!-- <i class="fa-solid fa-file-pen icon-feature  d-block mb-3 fa-3x"></i> -->
                                        <i class="fa-solid fa-4 icon-feature d-block mb-3 fa-3x"></i>
                                        <h4 class="font-alt">Tes Survei</h4>
                                        <p>19 Januari 2023</p>
                                        <!-- <a href="#FormulirPendaftaran" class="stretched-link">Selengkapnya</a> -->
                                    </div>
                                </div>
                            </div>

                        
                    </div>
                    <div class="col-sm-9 col-md-6 mb-5">
                       
                        <img class="" src="{{asset('foto/Date.svg' )}}" height="80%" width="90%" alt="">

                        
                        
                    </div>
                </div>
            </div>
        </section>


     

@endsection