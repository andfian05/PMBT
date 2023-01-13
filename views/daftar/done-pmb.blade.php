@extends('daftar.layouts.index')
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

                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill" href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view" target="_blank"> <i
                        class="fa-solid fa-cloud-arrow-down"></i>&nbsp; Download Brosur</a>&nbsp;&nbsp;
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
                    href="{{ url('/') }}"> <i class="fa-solid fa-bookmark"></i>&nbsp; Panduan Informasi</a>

            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>



    <div class="container mb-5">
        <!-- Basic features section-->


        <section class="bg-white" id="LampiranBerkas">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5 mb-5">
                        <!-- <h4 class="display-3 lh-1 mb-4">Lampiran Berkas</h4>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">How much prosedure</p> -->
                        <!-- <img class="" src="{{asset('foto/lampiran.svg' )}}" height="180%" width="100%" alt=""> -->
                        <img class="" src="{{asset('foto/TY.svg' )}}" height="80%" width="100%" alt="">
                    </div>
                    <div class="col-sm-9 col-md-6">


                        <!-- <h4 class="display-3 lh-1 mb-4">Terimakasih</h4> -->

                        <p class="lead mb-1 mb-lg-0 text-center">Terimakasih, Anda Telah <b>Berhasil</b> Melakukan
                            Registrasi Pendaftaran Calon Mahasantri Pesantren PeTIK Jombang Tahun Akademik 2023/2024.
                        </p><br>
                        <p class="lead mb-1 mb-lg-0 text-justify">Mohon Menunggu Pengumuman Hasil Seleksi Berkas Pada
                            Tanggal 30 Juni 2023. Silahkan Masuk Ke Dalam Grup Whatsapp Berikut Ini : <a
                                href="https://www.instagram.com/petik_jombang/" target="_blank">Pendaftar PeTIK Jombang
                                2023</a> Untuk Melihat Informasi Selanjutnya.</p>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection