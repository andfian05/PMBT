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

                <a class="btn btn-info px-3 mb-2 mb-lg-0 rounded-pill" href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view" target="_blank">
                    <i class="fa-solid fa-cloud-arrow-down"></i>&nbsp; Download Brosur</a>&nbsp;&nbsp;
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
                    href="{{ url('/') }}"> <i class="fa-solid fa-bookmark"></i>&nbsp; Panduan Informasi</a>

            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>



    <div class="container">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Biodata Diri</h3>
            </div>

            <div class="card-body">
                <!-- Formulir Data Diri -->
                <form action="#" method="GET">

                    <div class="form-group">
                        <label for="nama">Nama Lengkap </label>
                        <input id="nama" name="nama" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="tmp_lahir">Tempat Lahir </label>
                        <input class="form-control" name="tmp_lahir" id="tmp_lahir" type="text" required="required" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="tgl_lahir">Tanggal Lahir </label>
                                <input class="form-control" name="tgl_lahir" id="tgl_lahir" type="text"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="anak">Anak Ke-</label>
                                <input class="form-control" name="anak" id="anak" type="text" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="no_hp">No. Hp</label>
                                <input class="form-control" name="no_hp" id="no_hp" type="text" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="email">Email </label>
                                <input class="form-control" name="email" id="email" type="text" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat </label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="2" rows="2"
                            required="required"></textarea>
                    </div>





                    <div class="row mb-3">


                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="provinsi">Provinsi </label>

                                <div class="form-group -ml-3col-12">



                                    <select name="provinsi" id="provinsi" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="sm"></option>
                                        <option value="bm">Belum Mengetahui</option>


                                    </select>




                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="kota">Kota/Kabupaten </label>
                                <!-- <input class="form-control" name="kota" id="kota" type="text" required="required"/> -->
                                <div class="form-group -ml-3col-12">
                                    <select name="kota" id="kota" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="sm">Sudah Mengetahui</option>
                                        <option value="bm">Belum Mengetahui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="kecamatan">Kecamatan </label>
                                <!-- <input class="form-control" name="kecamatan" id="kecamatan" type="text" required="required"/> -->
                                <div class="form-group -ml-3col-12">
                                    <select name="kecamatan" id="kecamatan" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="sm">Sudah Mengetahui</option>
                                        <option value="bm">Belum Mengetahui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="kelurahan">Kelurahan </label>
                                <!-- <input class="form-control" name="kelurahan" id="kelurahan" type="text" required="required"/> -->
                                <div class="form-group -ml-3col-12">
                                    <select name="kelurahan" id="kelurahan" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="sm">Sudah Mengetahui</option>
                                        <option value="bm">Belum Mengetahui</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <!-- Tutup Formulir -->

                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="{{ url('/pmb2') }}"
                    type="submit"> Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <br><br>

    <!-- <script>
          function loadData(){
                fetch(`https//www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
                .then(response => response.json())
                .then(provinces => {
                   let output = '';
                   let no = 1;
                   provinces.foreach(el => {
                      output += `
                                  <select name="provinsi" id="provinsi" class="custom-select" required="required" onchange="tampil()" autocomplete="off">
                                      <option value="">Pilihan</option>
                                      <option value="sm">`+(no++)+`</option>
                                      <option value="bm">${el.name}</option>

                                     
                                   </select>
                      `
                   });
                   document.querySelector('select').innerHTML = output
                });
          }

          loadData();
                
        </script> -->

    <script>
        const form = document.querySelector('select')
        let provData = [];

        const loadData = async () => {
            try {
                const url = await fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`);
                provData = await url.json();
                console.log(provData)
                loadDataProv(provData);
            } catch (error) {
                console.log(err);

            }
        }

        const loadDataProv = (data) => {
            let no = 1;
            const ouput = data.map((el) => {
                return `
                                  <select name="provinsi" id="provinsi" class="custom-select" required="required" onchange="tampil()" autocomplete="off">
                                      <option value="">Pilihan</option>
                                      <option value="sm">` + (no++) + `</option>
                                      <option value="bm">${el.name}</option>

                                     
                                   </select>
                `
            }).join('')

            select.innerHTML = ouput;
        }

        loadData()

    </script>


    @endsection
