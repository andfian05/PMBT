@extends('backend.index')
@section('content')
  <div class="content-wrapper">
    <br><br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center">Add Data Calon Mahasantri</h4>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <a class="btn btn-success btn-sm-2" href="{{ route('mahasantri.index') }}">
            <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card card-info">
        <div class="card-body">
          <form action="{{ route('mahasantri.store') }}" method="POST" id="form1" name="form1" enctype="multipart/form-data">
            @csrf
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
                  <label for="nama">Nama Lengkap </label>
                  <input class="form-control" name="nama" id="nama" type="text" required="required" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label for="anak_ke">Anak Ke- </label>
                  <input class="form-control" name="anak_ke" id="anak_ke" type="text" required="required" />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Tempat Lahir </label>
                  <input class="form-control" name="tmp_lahir" type="text" required="required" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Tanggal Lahir</label>
                  <input class="form-control" name="tgl_lahir" type="date" required="required" />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>No. Handphone</label>
                  <input class="form-control" name="no_hp" type="text" required="required" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Email </label>
                  <input class="form-control" name="email" type="email" required="required" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Alamat </label>
              <textarea name="alamat" class="form-control" cols="2" rows="2" required="required"></textarea>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Provinsi </label>
                  <div class="form-group -ml-3col-12">
                    <select name="prov_id" id="provinsi" class="custom-select" required="required">
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
                  <label>Kabupaten/Kota </label>
                  <div class="form-group -ml-3col-12">
                    <select name="kab_id" id="kabupaten" class="custom-select" required="required">
                      <option value="">--- Pilih Kabupaten/Kota ---</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Kecamatan </label>
                  <div class="form-group -ml-3col-12">
                    <select name="kec_id" id="kecamatan" class="custom-select" required="required">
                      <option value="">--- Pilih Kecamatan ---</option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Kelurahan/Desa </label>
                  <div class="form-group -ml-3col-12">
                    <select name="desa_id" id="desa" class="custom-select" required="required">
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
                  <h6 class="text-center mt-2 ">Data Keluarga</h6>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Nama Ayah </label>
              <input class="form-control" name="nama_ayah" type="text" />
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Pekerjaan Ayah </label>
                  <input class="form-control" name="pkj_ayah" type="text" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Pendidikan Ayah </label>
                  <input class="form-control" name="pdk_ayah" type="text" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Nama Ibu </label>
              <input class="form-control" name="nama_ibu" type="text" />
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Pekerjaan Ibu </label>
                  <input class="form-control" name="pkj_ibu" type="text" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Pendidikan Ibu </label>
                  <input class="form-control" name="pdk_ibu" type="text" />
                </div>
              </div>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Jumlah Saudara Kandung </label>
                  <input class="form-control" name="jml_sdr" type="text" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Nomor Handphone Keluarga Yang Bisa Dihubungi </label>
                  <input class="form-control" name="nohp_klg" type="text" />
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
              <label>Nama Sekolah Asal </label>
              <input class="form-control" name="skl_asal" type="text" />
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Jurusan </label>
                  <input class="form-control" name="jurusan_skl" type="text" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Tahun Lulus </label>
                  <input class="form-control" name="thn_lulus" type="text" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Harapan Dan Cita-cita </label>
              <textarea name="cita_cita" class="form-control" cols="2" rows="2"></textarea>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Prestasi </label>
                  <textarea name="prestasi" class="form-control" cols="2"rows="2"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Penyakit Yang Pernah Di Derita Jika Tidak Memiliki, Tuliskan ( - )</label>
                  <textarea name="penyakit" class="form-control" cols="2" rows="2"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form">
                <label>Apakah Anda Perokok? </label>
                <div class="form-group -ml-3col-12">
                  <select name="perokok" class="custom-select" required="required">
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
                  <label class="mb-5">Jurusan Di PeTIK Jombang Yang Anda Minati?</label>
                  <div class="form-group -ml-3col-12">
                    <select name="jurusan_id" class="custom-select" required="required">
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
                  <label>Jika kalian memilih point peminatan tersebut, Untuk kedepannya apakah Kamu ingin
                      melanjutkan untuk kuliah atau bekerja? Tuliskan alasannya? </label>
                  <textarea name="alasan" class="form-control" cols="3" rows="3"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang?</label>
              <div class="form-group -ml-3col-12">
                <select name="media_id" class="custom-select" required="required">
                  <option value="">--- Pilih ---</option>
                  @foreach ($mediaInformasis as $mediaInformasi)
                    <option value="{{ $mediaInformasi->id_media }}">{{ $mediaInformasi->media_informasi }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <br>

            {{-- Berkas --}}
            <div class="container mt-4 col-md-6">
              <div class="card">
                <div class="bg-info ">
                  <h6 class="text-center mt-2">Lampiran Berkas</h6>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Metode Pengiriman Berkas</label>
              <div class="form-group -ml-3col-12">
                <select name="metode_berkas" id="metode_berkas" class="custom-select" required="required" onclick="tampilkan()">
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
                      <label class="col-12 mt-3">Silahkan Upload Semua Berkas Persyaratan Yang Telah Ditentukan Lalu Jadikan Satu File .PDF atau .Word :</label>
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
                        <label class="form-label text-center">Upload Berkas :</label>
                        <input name="berkas" type="file" class="form-control" multiple>
                      </div>
                    </div>
                    `;
                } else if (pesan == "offline") {
                  p_kontainer.innerHTML = `
                    <div class="form-group">
                      <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63287.4495946235!2d112.1531045436859!3d-7.524085847449887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783fab1dc80271%3A0x8c4c1651240d8951!2sPesantren%20PeTIK%20II%20Jombang%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1672736092825!5m2!1sid!2sid" width="100%" height="200%" style="border:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      <label class="col-12 mt-3 text-center">Alamat Kami : <b>Pesantren PeTIK Jombang - YBM PLN
                        Jl. KH. Bisri Syansuri RT.01/RW.05, Plosogeneng, Kec. Jombang,Jombang, Jawa Timur 61416.</b> 
                      </label>
                    </div>
                    `;
                } else if (pesan == "email") {
                  p_kontainer.innerHTML = `
                    <div class="form-group">
                      <label class="col-12 mt-3 text-center">Alamat Email : 
                        <a href="https://drive.google.com/file/d/1GJ9UoJ8dFPtS3o0TeStgC8t7JWRLjChl/view">
                          petikjombang@gmail.com
                        </a>   
                      </label>
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
                style="margin-right: 10px;">Save
              </button>
              <button type="reset" class="btn btn-secondary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                style="margin-right: 10px;">Cancel
              </button>
            </div>
          </form>
          <!-- Tutup Formulir Keseluruhan -->
        </div>
      </div>
    </div>

@endsection