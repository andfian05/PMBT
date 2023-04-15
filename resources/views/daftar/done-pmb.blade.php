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
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">

                </ul>

                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 
                    rounded-pill" href="https://drive.google.com/file/d/1yW-uyivR_1-3NTDajTnF6B2IkouYAra7/view?usp=sharing" target="_blank"> 
                    <i class="fa-solid fa-cloud-arrow-down fa-bounce"></i>&nbsp; 
                    Download Brosur
                </a>&nbsp;&nbsp;
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 
                    rounded-pill"
                    href="{{ url('/') }}"> 
                    <i class="fa-solid fa-bookmark fa-bounce"></i>&nbsp; 
                    Panduan Informasi
                </a>
                
            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>



    <div class="container mb-5">
       


        <section class="bg-white" id="LampiranBerkas">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                      
                        <img class="" src="{{asset('foto/TY.svg' )}}" height="80%" width="100%" alt="">
                    </div>
                    <div class="col-sm-9 col-md-6">


                      

                        <p class="lead mb-1 mb-lg-0 text-center" >Terimakasih, Anda telah <b>Berhasil</b> melakukan
                            registrasi pendaftaran Calon Mahasantri PeTIK Jombang tahun akademik 2023/2024.
                        </p><br>
                        <p class="lead mb-1 mb-lg-0 text-justify" >Mohon menunggu informasi kembali pengumuman hasil seleksi PMB pada
                            tanggal 30 Juni 2023. Silahkan masuk ke dalam grup Whatsapp dibawah ini untuk melihat informasi selanjutnya yang akan disampaikan oleh pihak panitia.</p><br>
                        <p class="lead mb-1 mb-lg-0 text-center" ><a class="btn btn-success bg-gradient-primary-to-success text-center px-3 mb-2 ms-0 mb-lg-0 rounded-pill"
                                href="https://chat.whatsapp.com/F0i1cpL4pVhF8cTgr9e3Lw" target="_blank"><i class="fa-brands fa-whatsapp fa-2 fa-bounce"></i>&nbsp;Pendaftar PeTIK 2023/2024</a></p>
                               
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection