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
                <h3 class="card-title">Peminatan Calon Mahasantri</h3>
            </div>
            <div class="card-body">
                <!-- Formulir Peminatan -->

                <form action="#" method="GET" id="form1" name="form1">

                    <div class="form-group">
                        <label class="col-13">Jurusan Di PeTIK Jombang Yang Anda Minati?</label>
                        <div class="col-13 mb-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="" id="" type="radio" class="custom-control-input" value="ppl"
                                    required="required">
                                <label for="" class="custom-control-label">Pengembangan Perangkat Lunak
                                    (PPL)</label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-8 mt-3">Studi Materi : </label>
                                <div class="col-12 mb-2">
                                    <ul>
                                        <li>Design User Interface dan User Experience</li>
                                        <li>Web Design</li>
                                        <li>Web Framework</li>
                                        <li>Database</li>
                                        <li>Pengembangan Aplikasi</li>
                                        <li>Aplikasi Mobile</li>

                                    </ul>
                                </div>
                            </div>

                            <br />

                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="" id="" type="radio" class="custom-control-input" value="dm"
                                    required="required">
                                <label for="" class="custom-control-label">Digital Marketing (DM)</label>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-8 mt-3">Studi Materi : </label>
                                <div class="col-12 mb-2">
                                    <ul>
                                        <li>Multimedia</li>
                                        <li>Microsoft Office</li>
                                        <li>Copy Writing</li>
                                        <li>SEO</li>
                                        <li>Brand Marketing</li>
                                        <li>Design Grafis</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- </form>

                <form action="" method="GET" id="form1" name="form1"> -->
                    <div class="form-group">
                        <label for="keterangan">Jika kalian memilih point diatas, Untuk kedepannya apakah Kamu ingin
                            melanjutkan untuk kuliah atau bekerja?</label>
                        <div class="form-group -ml-3col-12">
                            <select id="keterangan" name="keterangan" class="custom-select" required="required"
                                onclick="tampilkan()">
                                <option value="">Pilihan</option>
                                <option value="ya">Ya, Ingin Berkuliah</option>
                                <option value="tidak">Tidak, Saya Ingin Bekerja</option>

                            </select>
                        </div>
                    </div>
                    <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                    <script>
                        function tampilkan() {

                            var pesan = document.getElementById("form1").keterangan.value;
                            var p_kontainer = document.getElementById("container");

                            if (pesan == "ya") {
                                p_kontainer.innerHTML = `
                                <div class="form mb-3 mb-md-0">
                                    <label for="prestasi">Tuliskan Alasannya </label>
                                    <textarea name="prestasi" class="form-control" id="prestasi" cols="2"
                                    rows="2"></textarea>
                                </div>
                                    
                                    `;
                            } else if (pesan == "tidak") {
                                p_kontainer.innerHTML = `
                                <div class="form mb-3 mb-md-0">
                                    <label for="prestasi">Tuliskan Alasannya </label>
                                    <textarea name="prestasi" class="form-control" id="prestasi" cols="2"
                                    rows="2"></textarea>
                                </div>
                                
                                    `;
                            }
                        }

                    </script>

                    <div class="container">
                        <p id="container"></p>
                    </div>





                </form>

                <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->





                <!-- Tutup Formulir Keseluruhan -->

                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb3') }}"><i class="fa-solid fa-circle-chevron-left"></i> Kembali&nbsp; </a>
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                    href="{{ url('/pmb5') }}"> Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></a>


            </div>
        </div>
    </div>
    <br><br><br><br>

    @endsection
