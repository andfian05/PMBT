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
                <h3 class="card-title">Data Keluarga</h3>
            </div>
            <div class="card-body">
                <!-- Formulir Pendidikan -->

                <form action="#" method="GET">

                    <div class="form-group">
                        <label for="ayah">Nama Ayah </label>
                        <input class="form-control" name="ayah" id="ayah" type="text" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="pkj_ayah">Pekerjaan Ayah </label>
                                <input class="form-control" name="pkj_ayah" id="pkj_ayah" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="pdk_ayah">Pendidikan Ayah </label>
                                <input class="form-control" name="pdk_ayah" id="pdk_ayah" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ibu">Nama Ibu </label>
                        <input class="form-control" name="ibu" id="ibu" type="text" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="pkj_ibu">Pekerjaan Ibu </label>
                                <input class="form-control" name="pkj_ibu" id="pkj_ibu" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="pdk_ibu">Pendidikan Ibu </label>
                                <input class="form-control" name="pdk_ibu" id="pdk_ibu" type="text" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="jml_saudara">Jumlah Saudara Kandung </label>
                                <input class="form-control" name="jml_saudara" id="jml_saudara" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="hpKeluarga">Nomor Handphone Keluarga Yang Bisa Dihubungi </label>
                                <input class="form-control" name="hpKeluarga" id="hpKeluarga" type="text" />
                            </div>
                        </div>
                    </div>

                </form>




                <!-- Tutup Formulir Keseluruhan -->

                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb1') }}"><i class="fa-solid fa-circle-chevron-left"></i> Kembali&nbsp; </a>
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb3') }}"> Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></a>


            </div>
        </div>
    </div>
    <br><br><br><br>

    @endsection
