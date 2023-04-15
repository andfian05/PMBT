@extends('daftar.layouts.index')
@section('content')

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg mb-5 navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-4">
            {{-- <img class="navbar-brand" src="{{asset('foto/Petik_YBM.png' )}}" height="70px" width="149px" alt=""> --}}
            <img class="navbar-brand" src="{{asset('foto/Petik_YBM2.png' )}}" height="50px" width="149px" alt="">
            <a class="navbar-brand fw-bold" href="#page-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0"></ul>
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
                  href="https://drive.google.com/file/d/1yW-uyivR_1-3NTDajTnF6B2IkouYAra7/view?usp=sharing" target="_blank"> 
                  <i class="fa-solid fa-cloud-arrow-down fa-bounce"></i>&nbsp; Download Brosur
                </a>&nbsp;&nbsp;
                <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0 rounded-pill"
                    href="{{ url('/') }}"> 
                    <i class="fa-solid fa-bookmark fa-bounce"></i>&nbsp; Panduan Informasi
                </a>
            </div>
        </div>
    </nav>
    <br><br><br><br><br><br>

        @error('berkas')
          <div class="card lg-12 text-center alert alert-danger">{{ $message }}</div>
        @enderror

    <div class="container">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Formulir Pendaftaran PeTIK Jombang</h3>
        </div>
      
        <div class="card-body">
          <form action="{{ route('register.store') }}" method="POST" id="form1" name="form1" enctype="multipart/form-data">
            @csrf
            {{-- Informasi Tentang Pesantren PeTIK Jombang --}}
            <div class="container mt-2 col-md-6">
              <div class="card">
                <div class="bg-info">
                  <h6 class="text-center mt-2 ">Informasi Tentang Pesantren PeTIK Jombang</h6>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <label class="form-label text-justify" style="color : #0E8388" for="cerita">Tuliskan Apa Yang Anda Pahami Tentang PeTIK Jombang? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                <textarea name="ket_profile" id="cerita" class="form-control" cols="6" rows="3" required></textarea>
              </div>                   
            </div>
            <br>
            {{-- Biodata Diri --}}
            <div class="container mt-2 col-md-6">
              <div class="card">
                <div class="bg-info">
                  <h6 class="text-center mt-2 ">Biodata Diri</h6>
                </div>
              </div>
            </div>
            <div class="row mb-3 mt-6">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388" for="nama">Nama Lengkap <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="nama" id="nama" type="text" value="{{ old('nama') }}" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388" for="anak_ke">Anak Ke- <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="anak_ke" id="anak_ke" type="number" value="{{ old('anak_ke') }}" />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Tempat Lahir <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="tmp_lahir" type="text" value="{{ old('tmp_lahir') }}" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Tanggal Lahir <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="tgl_lahir" type="date" value="{{ old('tgl_lahir') }}" />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">No. Handphone <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="no_hp" type="text" value="{{ old('no_hp') }}" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Email <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="email" type="email" value="{{ old('email') }}" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify" style="color : #0E8388">Alamat <sup class="text-danger" font-size="20px">* </sup></label>
              <textarea name="alamat" class="form-control" cols="2" rows="2" value="{{ old('alamat') }}"></textarea>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Provinsi <sup class="text-danger" font-size="20px">* </sup></label>
                  <div class="form-group -ml-3col-12">
                    <select name="prov_id" id="provinsi" class="custom-select" value="{{ old('prov_id') }}">
                      <option value="">--- Pilih Provinsi ---</option>
                      @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->id_prov }}">{{ $provinsi->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Kabupaten/Kota <sup class="text-danger" font-size="20px">* </sup></label>
                  <div class="form-group -ml-3col-12">
                    <select name="kab_id" id="kabupaten" class="custom-select" value="{{ old('kab_id') }}">
                      <option value="">--- Pilih Kabupaten/Kota ---</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Kecamatan <sup class="text-danger" font-size="20px">* </sup></label>
                  <div class="form-group -ml-3col-12">
                    <select name="kec_id" id="kecamatan" class="custom-select" value="{{ old('kec_id') }}">
                      <option value="">--- Pilih Kecamatan ---</option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Kelurahan/Desa <sup class="text-danger" font-size="20px">* </sup></label>
                  <div class="form-group -ml-3col-12">
                    <select name="desa_id" id="desa" class="custom-select" value="{{ old('desa_id') }}">
                      <option value="">--- Pilih Kelurahan/Desa ---</option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <br>

            {{-- Data Keluarga --}}
            <div class="container mt-3 col-md-6">
              <div class="card">
                <div class="bg-info ">
                  <h6 class="text-center mt-2 ">Data Keluarga <sup class="text-danger" font-size="20px">* </sup></h6>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify" style="color : #0E8388">Nama Ayah <sup class="text-danger" font-size="20px">* </sup></label>
              <input class="form-control" name="nama_ayah" type="text" value="{{ old('nama_ayah') }}"/>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Pekerjaan Ayah <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="pkj_ayah" type="text" value="{{ old('pkj_ayah') }}"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Pendidikan Ayah <sup class="text-danger" font-size="20px">* </sup></label>
                  <!-- <input class="form-control" name="pdk_ayah" type="text" value="{{ old('pdk_ayah') }}"/> -->

                  <select name="pdk_ayah" class="custom-select" value="{{ old('pdk_ayah') }}">
                    <option value="">--- Pilih ---</option>
                    <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                    <option value="SD">Sekolah Dasar</option>
                    <option value="MI">Madrasah Ibtidaiyah</option>
                    <option value="SMP">Sekolah Menengah Pertama</option>
                    <option value="MTS">Madrasah Tsanawiyah</option>
                    <option value="SMA">Sekolah Menengah Atas</option>
                    <option value="SMK">Sekolah Menengah Kejuruan</option>
                    <option value="Aliyah">Madrasah Aliyah</option>
                    <option value="Diploma1">Diploma - 1</option>
                    <option value="Diploma2">Diploma - 2</option>
                    <option value="Diploma3">Diploma - 3</option>
                    <option value="Diploma4">Diploma - 4</option>
                    <option value="S1">Sarjana (S1) </option>
                    <option value="S2">Magister (S2) </option>
                    <option value="S3">Doktor (S3) </option>
                  </select>
                </div>
              </div>
            </div>


            <div class="form-group">
              <label class="form-label text-justify" style="color : #0E8388">Nama Ibu <sup class="text-danger" font-size="20px">* </sup></label>
              <input class="form-control" name="nama_ibu" type="text" value="{{ old('nama_ibu') }}"/>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Pekerjaan Ibu <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="pkj_ibu" type="text" value="{{ old('pkj_ibu') }}"/>
                </div>
              </div>

              


              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Pendidikan Ibu <sup class="text-danger" font-size="20px">* </sup></label>
                  <!-- <input class="form-control" name="pdk_ibu" type="text" value="{{ old('pdk_ibu') }}"/> -->

                  <select name="pdk_ibu" class="custom-select" value="{{ old('pdk_ibu') }}">
                    <option value="">--- Pilih ---</option>
                    <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                    <option value="SD">Sekolah Dasar</option>
                    <option value="MI">Madrasah Ibtidaiyah</option>
                    <option value="SMP">Sekolah Menengah Pertama</option>
                    <option value="MTS">Madrasah Tsanawiyah</option>
                    <option value="SMA">Sekolah Menengah Atas</option>
                    <option value="SMK">Sekolah Menengah Kejuruan</option>
                    <option value="Aliyah">Madrasah Aliyah</option>
                    <option value="Diploma1">Diploma - 1</option>
                    <option value="Diploma2">Diploma - 2</option>
                    <option value="Diploma3">Diploma - 3</option>
                    <option value="Diploma4">Diploma - 4</option>
                    <option value="S1">Sarjana (S1) </option>
                    <option value="S2">Magister (S2) </option>
                    <option value="S3">Doktor (S3) </option>
                  </select>
                </div>
              </div>

            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Jumlah Saudara Kandung <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="jml_sdr" type="number" value="{{ old('jml_sdr') }}"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Nomor Handphone Keluarga Yang Bisa Dihubungi <sup class="text-danger" font-size="20px">* (Wajib Angka)</sup></label>
                  <input class="form-control" name="nohp_klg" type="text" value="{{ old('nohp_klg') }}"/>
                </div>
              </div>
            </div>
            <br>

            {{-- Riwayat Pendidikan --}}
            <div class="container mt-4 col-md-6">
              <div class="card">
                <div class="bg-info ">
                  <h6 class="text-center mt-2 ">Riwayat Calon Mahasantri</h6>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify" style="color : #0E8388">Nama Sekolah Asal <sup class="text-danger" font-size="20px">* </sup></label>
              <input class="form-control" name="skl_asal" type="text" value="{{ old('skl_asal') }}"/>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Jurusan <sup class="text-danger" font-size="20px">* </sup></label>
                  <input class="form-control" name="jurusan_skl" type="text" value="{{ old('jurusan_skl') }}"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Tahun Lulus <sup class="text-danger" font-size="20px">* (Wajib Angka)</sup></label>
                  <input class="form-control" name="thn_lulus" type="text" value="{{ old('thn_lulus') }}"/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify" style="color : #0E8388">Harapan Dan Cita-cita <sup class="text-danger" font-size="20px">* </sup></label>
              <textarea name="cita_cita" class="form-control" cols="2" rows="2"></textarea>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Prestasi, Jika Tidak Memiliki Tuliskan ( - ) <sup class="text-danger" font-size="20px">* </sup></label>
                  <textarea name="prestasi" class="form-control" cols="2"rows="2"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Penyakit Yang Pernah Di Derita Jika Tidak Memiliki, Tuliskan ( - ) <sup class="text-danger" font-size="20px">* </sup></label>
                  <textarea name="penyakit" class="form-control" cols="2" rows="2"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form">
                <label class="form-label text-justify" style="color : #0E8388">Apakah Anda Perokok? <sup class="text-danger" font-size="20px">* </sup> </label>
                <div class="form-group -ml-3col-12">
                  <select name="perokok" class="custom-select" value="{{ old('perokok') }}">
                    <option value="">--- Pilih ---</option>
                    <option value="Ya">Ya, Saya Perokok Aktif</option>
                    <option value="Tidak">Tidak, Saya Tidak Perokok</option>
                  </select>
                </div>
              </div>
            </div>
            <br>

            {{-- Program Studi --}}
            <div class="container mt-4 col-md-6">
              <div class="card">
                <div class="bg-info ">
                  <h6 class="ml-12 text-center mt-2 ">Peminatan Calon Mahasantri</h6>
                </div>
              </div>
            </div>
            <div class="container text-center mb-4">
              <div class="container">
                <div class="card">
                  <div class="card-body bg-dark-emphasis">
                    <h6 class="text-center" style="color : #0E8388">Studi Materi Pengembangan perangkat Lunak</h6>
                    <span style="color : #0E8388">*Design User Interface/User Experience, Web Design, Web Framework, Database, Pengembangan Aplikasi, Aplikasi Mobile, Dan Lainnya.*</span>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="card">
                  <div class="card-body">
                    <h6 class="text-center" style="color : #0E8388">Studi Materi Digital Marketing</h6>
                    <span style="color : #0E8388">*Multimedia, Microsoft Office, SEO, Brand Marketing, Copy Writing, Design Grafis, Dan Lainnya.*</span>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify" style="color : #0E8388">Jurusan Di PeTIK Jombang Yang Anda Minati? <sup class="text-danger" font-size="20px">* </sup></label>
                  <div class="form-group -ml-3col-12">
                    <select name="jurusan_id" class="custom-select" value="{{ old('jurusan_id') }}">
                      <option value="">--- Pilih Jurusan ---</option>
                      @foreach ($jurusans as $jurusan)
                        <option value="{{ $jurusan->id_jurusan }}">{{ $jurusan->nama_jurusan }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify" style="color : #0E8388">Jika Anda Memilih Point Peminatan Tersebut, Untuk Kedepannya Apakah Anda Ingin
                      Melanjutkan Untuk Kuliah Atau Bekerja? Tuliskan Alasannya? <sup class="text-danger" font-size="20px">* </sup></label>
                  <textarea name="alasan" class="form-control" cols="3" rows="3"></textarea>
                </div>
              </div>
            </div><br>
            <div class="form-group">
              <label class="form-label text-justify" style="color : #0E8388">Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang? <sup class="text-danger" font-size="20px">* </sup></label>
              <div class="form-group -ml-3col-12">
                <select name="media_id" class="custom-select" value="{{ old('media_id') }}">
                  <option value="">--- Pilih ---</option>
                  @foreach ($mediaInformasis as $mediaInformasi)
                    <option value="{{ $mediaInformasi->id_media }}">{{ $mediaInformasi->media_informasi }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <br>

            @error('berkas')
            <div class="card lg-3 text-center alert alert-danger">{{ $message }}</div>
            @enderror

            {{-- Berkas --}}
            <div class="container mt-4 col-md-6">
              <div class="card">
                <div class="bg-info ">
                  <h6 class="text-center mt-2">Lampiran Berkas</h6>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify" style="color : #0E8388">Metode Pengiriman Berkas <sup class="text-danger" font-size="20px">* (Wajib ZIP / RAR)</sup></label>
              <div class="form-group -ml-3col-12">
                <select name="metode_berkas" id="metode_berkas" class="custom-select" value="{{ old('metode_berkas') }}" onclick="tampilkan()">
                  <option value="">--- Pilih Metode Pengiriman ---</option>
                  <option value="online">Via Online</option>
                  <option value="offline">Via Offline Atau Kurir</option>
                  <option value="email">Email</option>
                </select>
              </div>
            </div>
            <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
            <script>
              function tampilkan() {
                var pesan = document.getElementById("form1").metode_berkas.value;
                var p_kontainer = document.getElementById("container");
            
                if (pesan == "online") {
                  p_kontainer.innerHTML = `
                    <div class="form-group">
                      <label class="col-12 mt-3 text-justify" style="color : #0E8388">Silahkan Upload Semua Berkas Persyaratan Yang Telah Ditentukan Dengan Format Yang Kalian Inginkan (.PDF / .PNG / .JPG / .JPEG) Lalu Jadikan Satu Folder Dan Bentuk Dengan Format (.ZIP Atau .RAR) Lalu Diberi Nama Folder (Nama_Lengkap), Berikut Berkas Yang Anda Harus Upload :</label>
                      <div class="col-12">
                        <ol>
                          <li style="color : #0E8388">Surat Keterangan Tidak Mampu</li>
                          <li style="color : #0E8388">Surat Keterangan Sehat</li>
                          <li style="color : #0E8388">Salinan Kartu Tanda Penduduk Atau Kartu Pelajar</li>
                          <li style="color : #0E8388">Salinan Kartu Keluarga.</li>
                          <li style="color : #0E8388">Salinan Ijazah/Surat Keterangan Siswa Aktif Bersekolah (SMA/SMK/Aliyah).</li>
                        </ol>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-12">
                        <label class="form-label text-center" style="color : #0E8388">Upload Berkas :</label>
                        <input name="berkas" type="file" class="form-control @error('berkas') is-invalid @enderror" value="{{ old('berkas') }}" multiple>
                      </div>
                    </div>
                    `;
                } else if (pesan == "offline") {
                  p_kontainer.innerHTML = `
                    <div class="form-group">
                      <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63287.4495946235!2d112.1531045436859!3d-7.524085847449887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783fab1dc80271%3A0x8c4c1651240d8951!2sPesantren%20PeTIK%20II%20Jombang%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1672736092825!5m2!1sid!2sid" width="100%" height="200%" style="border:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      <label class="col-12 mt-3 text-center" style="color : #0E8388">Alamat Kami : <b style="color : #0E8388">Pesantren PeTIK Jombang - YBM PLN
                        Jl. KH. Bisri Syansuri RT.01/RW.05, Plosogeneng, Kec. Jombang,Jombang, Jawa Timur 61416.</b> 
                      </label>
                      <div class="form-group">
                      </br>
                      <div class="col-12">
                        <p class="form-label text-justify" style="color : #0E8388">* Upload Bukti Pengiriman  (Foto Atau Screenshot) Dengan Format (.ZIP Atau .RAR) Dengan Menulis Nama Berkas (Nama_Lengkap) Untuk Via Kurir Atau Offline</p>
                        <input name="berkas" type="file" class="form-control @error('berkas') is-invalid @enderror" value="{{ old('berkas') }}" multiple>
                      </div>
                    </div>
                    </div>
                    `;
                } else if (pesan == "email") {
                  p_kontainer.innerHTML = `
                    <div class="form-group">
                      <label class="col-12 mt-3 text-center" style="color : #0E8388">Alamat Email : 
                        <a href="#">
                          pmb.petikjombang@gmail.com
                        </a>   
                      </label>
                      <div class="form-group">
                      </br>
                        <div class="col-12">
                          <p class="form-label text-justify" style="color : #0E8388">* Upload Bukti Pengiriman (Foto Atau Screenshot) Dengan Format (.ZIP & .RAR) Dengan Menulis Nama Berkas (Nama_Lengkap) Untuk Via Email</p>
                          <input name="berkas" type="file" class="form-control @error('berkas') is-invalid @enderror" value="{{ old('berkas') }}" multiple>
                        </div>
                      </div>
                    </div>
                    `;
                }
              }
            </script>

            <div class="container">
              <p id="container"></p>
            </div>
            <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
              <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                style="margin-right: 10px;">
                Kirim Data
              </button>
              <script>
                // function dataTerkirim() {
                //   location.href = "{{ route('donepmb') }}";
                // }
              </script>
            </div>
          </form>
          <!-- Tutup Formulir Keseluruhan -->
        </div>
      </div>
    </div>
    <br><br><br><br>

    @endsection