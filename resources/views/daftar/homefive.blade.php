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
                    href="https://startbootstrap.com/theme/new-age"> <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp;
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
                <h3 class="card-title">Informasi Mengenai PeTIK Jombang</h3>
            </div>
            <div class="card-body">
                <!-- Formulir Peminatan -->

                <form action="#" method="GET">

                    <div class="form-group">
                        <label class="col-13">Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang?</label>
                        <div class="col-13">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_0" type="radio" required="required"
                                    class="custom-control-input" value="1">
                                <label for="info_0" class="custom-control-label">Website</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_1" type="radio" required="required"
                                    class="custom-control-input" value="2">
                                <label for="info_1" class="custom-control-label">Alumni Pesantren PeTIK</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_2" type="radio" required="required"
                                    class="custom-control-input" value="3">
                                <label for="info_2" class="custom-control-label">YBM PLN</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_3" type="radio" required="required"
                                    class="custom-control-input" value="4">
                                <label for="info_3" class="custom-control-label">Keluarga / Sanak Saudara</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_4" type="radio" required="required"
                                    class="custom-control-input" value="5">
                                <label for="info_4" class="custom-control-label">Media Sosial (Instagram Atau
                                    Facebook)</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_5" type="radio" required="required"
                                    class="custom-control-input" value="6">
                                <label for="info_5" class="custom-control-label">Sekolah</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_6" type="radio" required="required"
                                    class="custom-control-input" value="7">
                                <label for="info_6" class="custom-control-label">Kegiatan (Event)</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="info" id="info_7" type="radio" required="required"
                                    class="custom-control-input" value="8">
                                <label for="info_7" class="custom-control-label">Teman / Sahabat</label>
                            </div>
                        </div>
                    </div>

                </form>




                <!-- Tutup Formulir Keseluruhan -->

                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb4') }}"><i class="fa-solid fa-circle-chevron-left"></i> Kembali&nbsp; </a>
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb6') }}"> Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></a>


            </div>
        </div>
    </div>
    <br><br><br><br>

    @endsection
