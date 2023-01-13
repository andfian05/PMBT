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
                <h3 class="card-title">Formulir Pendaftaran PeTIK Jombang</h3>
            </div>
            <div class="card-body">
                <!-- Formulir Pendidikan -->

                <form action="/formpenutup" method="POST" id="form1" name="form1">

                    <div class="container mt-2 col-md-6">
                        <div class="card">

                            <div class="bg-info ">

                                <h6 class="text-center mt-2 ">Biodata Diri</h6>

                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-6">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="tgl_lahir">Nama Lengkap </label>
                                <input class="form-control" name="tgl_lahir" id="tgl_lahir" type="text"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="anak">Anak Ke- </label>
                                <input class="form-control" name="anak" id="anak" type="text" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="tgl_lahir">Tempat Lahir </label>
                                <input class="form-control" name="tgl_lahir" id="tgl_lahir" type="text"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="anak">Tanggal Lahir</label>
                                <input class="form-control" name="anak" id="anak" type="date" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="no_hp">No. Handphone</label>
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


                    <div class="row mb-1">


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
                    <div class="row mb-1">
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
                    <br>


                    <div class="container mt-3 col-md-6">
                        <div class="card">

                            <div class="bg-info ">

                                <h6 class="text-center mt-2 ">Data Keluarga</h6>

                            </div>
                        </div>
                    </div>


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
                    <div class="row mb-1">
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
                    <br>


                    <div class="container mt-4 col-md-6">
                        <div class="card">

                            <div class="bg-info ">

                                <h6 class="text-center mt-2 ">Riwayat Calon Mahasantri</h6>

                            </div>
                        </div>
                    </div>


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

                        <div class="form">
                            <label for="kelurahan">Apakah Anda Perokok? </label>

                            <div class="form-group -ml-3col-12">
                                <select name="" id="" class="custom-select" required="required">
                                    <option value=""></option>
                                    <option value="ya">Ya, Saya Perokok Aktif</option>
                                    <option value="tidak">Tidak, Saya Tidak Perokok</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <br>





                    <div class="container mt-4 col-md-6">
                        <div class="card">

                            <div class="bg-info ">

                                <h6 class="text-center mt-2 ">Peminatan Calon Mahasantri</h6>

                            </div>
                        </div>
                    </div>


                    <div class="container text-center mb-4">

                        <div class="container">
                            <div class="card">

                                <div class="card-body bg-dark-emphasis">

                                    <h6 class="text-center">Studi Materi Pengembangan perangkat Lunak</h6>
                                    <span>*Design User Interface/User Experience, Web Design, Web Framework, Database, Pengembangan Aplikasi, Aplikasi Mobile, Dan Lainnya.*</span>
                                    

                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="card">

                                <div class="card-body">

                                    <h6 class="text-center">Studi Materi Digital Marketing</h6>
                                    <span>*Multimedia, Microsoft Office, SEO, Brand Marketing, Copy Writing, Design Grafis, Dan Lainnya.*</span>

                                </div>
                            </div>
                        </div>




                    </div>
                    <br>

                    <div class="row mb-1">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label for="" class="mb-5">Jurusan Di PeTIK Jombang Yang Anda Minati?</label>
                                <div class="form-group -ml-3col-12">
                                    <select id="" name="" class="custom-select" required="required">
                                        <option value=""></option>
                                        <option value="ppl">Pengembangan Perangkat Lunak</option>
                                        <option value="dm">Digital Marketing</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form">
                                <label for="ayah">Jika kalian memilih point peminatan tersebut, Untuk kedepannya apakah Kamu
                                    ingin
                                    melanjutkan untuk kuliah atau bekerja? Tuliskan alasannya? </label>
                                <textarea name="" class="form-control" id="" cols="3" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang?</label>
                        <div class="form-group -ml-3col-12">
                            <select id="" name="" class="custom-select" required="required">
                                <option value=""></option>
                                <option value="web">Pengembangan Perangkat Lunak</option>
                                <option value="alumni">Alumni Pesantren PeTIK</option>
                                <option value="ybmpln">YBM PLN</option>
                                <option value="keluarga">Keluarga / Sanak Saudara</option>
                                <option value="mediasosial">Media Sosial (Instagram Atau Facebook)</option>
                                <option value="sekolah">Sekolah</option>
                                <option value="kegiatan">Kegiatan (Event)</option>
                                <option value="teman">Teman / Sahabat</option>

                            </select>
                        </div>
                    </div>
                    <br>



                    <div class="container mt-4 col-md-6">
                        <div class="card">

                            <div class="bg-info ">

                                <h6 class="text-center mt-2 ">Lampiran Berkas</h6>

                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="keterangan">Metode Pengiriman Berkas</label>
                        <div class="form-group -ml-3col-12">
                            <select id="keterangan" name="keterangan" class="custom-select" required="required"
                                onclick="tampilkan()">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                    </div>
                    <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                    <script>
                        function tampilkan() {

                            var pesan = document.getElementById("form1").keterangan.value;
                            var p_kontainer = document.getElementById("container");

                            if (pesan == "online") {
                                p_kontainer.innerHTML = `
                                    <div class="form-group">
                                    <label for="" class="col-12 mt-3">Silahkan Upload Semua Berkas Persyaratan Yang Telah Ditentukan Lalu Jadikan Satu File .PDF atau .Word :</label>
                                      <div class="col-12">
                                        <ol>
                                          <li>Surat Keterangan Tidak Mampu</li>
                                          <li>Surat Keterangan Sehat</li>
                                          <li>Kartu Tanda Penduduk Atau Kartu Pelajar</li>
                                          <li>Kartu Keluarga</li>
                                          <li>Salinan Ijazah/Surat Keterangan Siswa Aktif Bersekolah (SMA/SMK/Aliyah)</li>
                                        </ol>
                                      </div>
                                      
                                    </div>
                                    <div class="form-group">
                                      <div class="col-12">
                                        <label for="" class="form-label text-center">Upload Berkas :</label>
                                        <input type="file" class="form-control" id="" multiple>
                                      </div>
                                    </div>
                                    
                                    `;
                            } else if (pesan == "offline") {
                                p_kontainer.innerHTML = `
                                    <div class="form-group">
                                    <div>
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63287.4495946235!2d112.1531045436859!3d-7.524085847449887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783fab1dc80271%3A0x8c4c1651240d8951!2sPesantren%20PeTIK%20II%20Jombang%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1672736092825!5m2!1sid!2sid" width="100%" height="200%" style="border:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                      <label for="" class="col-12 mt-3 text-center">Alamat Kami : <b>Pesantren PeTIK Jombang - YBM PLN
Jl. KH. Bisri Syansuri RT.01/RW.05, Plosogeneng, Kec. Jombang,Jombang, Jawa Timur 61416.</b> </label>
                                    
        
                                    </div>
                                    `;
                            } else if (pesan == "email") {
                                p_kontainer.innerHTML = `
                                    <div class="form-group">
                                        <label for="" class="col-12 mt-3 text-center">Alamat Email : <a href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view">petikjombang@gmail.com</a>   </label>
        
                                    </div>
                                    `;
                            }
                        }

                    </script>

                    <div class="container">
                        <p id="container"></p>
                    </div>



                    <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                        <button type="submit"
                            class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Kirim Data</button>

                    </div>


                </form>




                <!-- Tutup Formulir Keseluruhan -->




            </div>
        </div>
    </div>
    <br><br><br><br>

    @endsection
