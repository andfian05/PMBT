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
                href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view" target="_blank"> <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp;
                    Download Brosur</a>&nbsp;&nbsp;
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
                    href="{{ url('/') }}"> <i class="fa-solid fa-bookmark"></i>&nbsp; Panduan Informasi</a>

            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>



    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Riwayat Calon Mahasantri</h3>
            </div>
            <div class="card-body">
                <!-- Formulir Pendidikan -->

                <form action="#" method="GET">

                    <div class="form-group">
                        <label for="n_sekolah">Nama Sekolah Asal </label>
                        <input class="form-control" name="n_sekolah" id="n_sekolah" type="text" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="jurusan">Jurusan </label>
                                <input class="form-control" name="jurusan" id="jurusan" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="thn_lulus">Tahun Lulus </label>
                                <input class="form-control" name="thn_lulus" id="thn_lulus" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harapan Dan Cita-cita </label>
                        <textarea name="citaCita" class="form-control" id="citaCita" cols="2" rows="2"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="prestasi">Prestasi </label>
                                <textarea name="prestasi" class="form-control" id="prestasi" cols="2"
                                    rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="penyakit">Penyakit Yang Pernah Di Derita Jika Tidak Memiliki, Tuliskan ( -
                                    )</label>
                                <textarea name="penyakit" class="form-control" id="penyakit" cols="2"
                                    rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-8">Apakah Anda Perokok?</label>
                        <div class="col-13">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="perokok" id="perokok_0" type="radio" class="custom-control-input"
                                    value="ya" required="required">
                                <label for="perokok_0" class="custom-control-label">Ya, Saya Perokok Aktif</label>
                            </div>


                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="perokok" id="perokok_1" type="radio" class="custom-control-input"
                                    value="tidak" required="required">
                                <label for="perokok_1" class="custom-control-label">Tidak, Saya Tidak Perokok</label>
                            </div>


                        </div>
                    </div>

                </form>




                <!-- Tutup Formulir Keseluruhan -->

                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb2') }}"><i class="fa-solid fa-circle-chevron-left"></i> Kembali&nbsp; </a>
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb4') }}"> Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></a>


            </div>
        </div>
    </div>
    <br><br><br><br>

    @endsection
