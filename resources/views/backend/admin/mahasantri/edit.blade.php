@extends('backend.index')
@section('content')
<div class="content-wrapper">
  <br><br>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h4 class="text-center">Update Data Calon Mahasantri</h4>
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
        <form action="{{ route('mahasantri.update', $mahasantri->id) }}" method="POST" id="form1" name="form1" enctype="multipart/form-data">
          @csrf
          @method('PUT')
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
              <label for="">Tuliskan apa yang Anda pahami tentang Pesantren PeTIK Jombang :</label>
              <textarea name="ket_profile"  class="form-control" cols="6" rows="3">
                {{ old('ket_profile') ? old('ket_profile') : $profilePetik->ket_profile }}
              </textarea>
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
                <label for="nama">Nama Lengkap </label>
                <input class="form-control" name="nama" id="nama" type="text" value="{{ old('nama') ? old('nama') : $mahasantri->nama }}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label for="anak_ke">Anak Ke- </label>
                <input class="form-control" name="anak_ke" id="anak_ke" type="text" value="{{ old('anak_ke') ? old('anak_ke') : $mahasantri->anak_ke }}" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>Tempat Lahir </label>
                <input class="form-control" name="tmp_lahir" type="text" value="{{ old('tmp_lahir') ? old('tmp_lahir') : $mahasantri->tmp_lahir }}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Tanggal Lahir</label>
                <input class="form-control" name="tgl_lahir" type="date" value="{{ old('tgl_lahir') ? old('tgl_lahir') : $mahasantri->tgl_lahir }}" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>No. Handphone</label>
                <input class="form-control" name="no_hp" type="text" value="{{ old('no_hp') ? old('no_hp') : $mahasantri->no_hp }}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Email </label>
                <input class="form-control" name="email" type="email" value="{{ old('email') ? old('email') : $mahasantri->email }}" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Alamat </label>
            <textarea name="alamat" class="form-control" cols="2" rows="2">
              {{ old('alamat') ? old('alamat') : $mahasantri->alamat }}
            </textarea>
          </div>
          <div class="row mb-1">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>Provinsi </label>
                <div class="form-group -ml-3col-12">
                  <select name="prov_id" id="provinsi" class="custom-select">
                    @foreach ($provinsis as $provinsi)
                      @if ($mahasantri->prov_id == $provinsi->id_prov)
                        <option value="{{ $provinsi->id_prov }}" selected>{{ $provinsi->nama }}</option>
                      @else
                        <option value="{{ $provinsi->id_prov }}">{{ $provinsi->nama }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Kabupaten/Kota </label>
                <div class="form-group -ml-3col-12">
                  <select name="kab_id" id="kabupaten" class="custom-select">
                    @foreach ($kabupatens as $kabupaten)
                      @if ($mahasantri->kab_id == $kabupaten->id_kab)
                        <option value="{{ $kabupaten->id_kab }}" selected>{{ $kabupaten->nama }}</option>
                      @else
                        {{-- <option value="{{ $kabupaten->id_kab }}">{{ $kabupaten->nama }}</option> --}}
                      @endif
                    @endforeach
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
                  <select name="kec_id" id="kecamatan" class="custom-select">
                    @foreach ($kecamatans as $kecamatan)
                      @if ($mahasantri->kec_id == $kecamatan->id_kec)
                        <option value="{{ $kecamatan->id_kec }}" selected>{{ $kecamatan->nama }}</option>
                      @else
                        {{-- <option value="{{ $kecamatan->id_kec }}">{{ $kecamatan->nama }}</option> --}}
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Kelurahan/Desa </label>
                <div class="form-group -ml-3col-12">
                  <select name="desa_id" id="desa" class="custom-select">
                    @foreach ($desas as $desa)
                      @if ($mahasantri->desa_id == $desa->id_desa)
                        <option value="{{ $desa->id_desa }}" selected>{{ $desa->nama }}</option>
                      @else
                        {{-- <option value="{{ $desa->id_desa }}">{{ $desa->nama }}</option> --}}
                      @endif
                    @endforeach
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
            <input class="form-control" name="nama_ayah" type="text" value="{{ old('nama_ayah') ? old('nama_ayah') : $mahasantri->nama_ayah }}"/>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>Pekerjaan Ayah </label>
                <input class="form-control" name="pkj_ayah" type="text" value="{{ old('pkj_ayah') ? old('pkj_ayah') : $mahasantri->pkj_ayah }}"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Pendidikan Ayah </label>
                <input class="form-control" name="pdk_ayah" type="text" value="{{ old('pdk_ayah') ? old('pdk_ayah') : $mahasantri->pdk_ayah }}"/>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Nama Ibu </label>
            <input class="form-control" name="nama_ibu" type="text" value="{{ old('nama_ibu') ? old('nama_ibu') : $mahasantri->nama_ibu }}"/>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>Pekerjaan Ibu </label>
                <input class="form-control" name="pkj_ibu" type="text" value="{{ old('pkj_ibu') ? old('pkj_ibu') : $mahasantri->pkj_ibu }}"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Pendidikan Ibu </label>
                <input class="form-control" name="pdk_ibu" type="text" value="{{ old('pdk_ibu') ? old('pdk_ibu') : $mahasantri->pdk_ibu }}"/>
              </div>
            </div>
          </div>
          <div class="row mb-1">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>Jumlah Saudara Kandung </label>
                <input class="form-control" name="jml_sdr" type="text" value="{{ old('jml_sdr') ? old('jml_sdr') : $mahasantri->jml_sdr }}"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Nomor Handphone Keluarga Yang Bisa Dihubungi </label>
                <input class="form-control" name="nohp_klg" type="text" value="{{ old('nohp_klg') ? old('nohp_klg') : $mahasantri->nohp_klg }}"/>
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
            <input class="form-control" name="skl_asal" type="text" value="{{ old('skl_asal') ? old('skl_asal') : $mahasantri->skl_asal }}"/>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>Jurusan </label>
                <input class="form-control" name="jurusan_skl" type="text" value="{{ old('jurusan_skl') ? old('jurusan_skl') : $mahasantri->jurusan_skl }}"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Tahun Lulus </label>
                <input class="form-control" name="thn_lulus" type="text" value="{{ old('thn_lulus') ? old('thn_lulus') : $mahasantri->thn_lulus }}"/>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Harapan Dan Cita-cita </label>
            <textarea name="cita_cita" class="form-control" cols="2" rows="2">
              {{ old('cita_cita') ? old('cita_cita') : $mahasantri->cita_cita }}
            </textarea>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form mb-3 mb-md-0">
                <label>Prestasi </label>
                <textarea name="prestasi" class="form-control" cols="2"rows="2">
                  {{ old('prestasi') ? old('prestasi') : $mahasantri->prestasi }}
                </textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Penyakit Yang Pernah Di Derita Jika Tidak Memiliki, Tuliskan ( - )</label>
                <textarea name="penyakit" class="form-control" cols="2" rows="2">
                  {{ old('penyakit') ? old('penyakit') : $mahasantri->penyakit }}
                </textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form">
              <label>Apakah Anda Perokok? </label>
              <div class="form-group -ml-3col-12">
                <select name="perokok" class="custom-select">
                  @if ($mahasantri->perokok == "Ya")
                    <option value="Ya" selected>Ya, Saya Perokok Aktif</option>
                  @else
                    <option value="Tidak" selected>Tidak, Saya Tidak Perokok</option>
                  @endif
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
                  <select name="jurusan_id" class="custom-select" value="{{ old('jurusan_id') }}">
                    @foreach ($jurusans as $jurusan)
                      @if ($mahasantri->jurusan_id == $jurusan->id_jurusan)
                        <option value="{{ $jurusan->id_jurusan }}" selected>{{ $jurusan->nama_jurusan }}</option>
                      @else
                        <option value="{{ $jurusan->id_jurusan }}">{{ $jurusan->nama_jurusan }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form">
                <label>Jika kalian memilih point peminatan tersebut, Untuk kedepannya apakah Kamu ingin
                    melanjutkan untuk kuliah atau bekerja? Tuliskan alasannya? </label>
                <textarea name="alasan" class="form-control" cols="3" rows="3">
                  {{ old('alasan') ? old('alasan') : $mahasantri->alasan }}
                </textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang?</label>
            <div class="form-group -ml-3col-12">
              <select name="media_id" class="custom-select" value="{{ old('media_id') }}">
                @foreach ($mediaInformasis as $mediaInformasi)
                  @if ($mahasantri->media_id == $mediaInformasi->id_media)
                    <option value="{{ $mediaInformasi->id_media }}" selected>{{ $mediaInformasi->media_informasi }}</option>
                  @else
                    <option value="{{ $mediaInformasi->id_media }}">{{ $mediaInformasi->media_informasi }}</option>
                  @endif
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
              <select name="metode_berkas" id="metode_berkas" class="custom-select" value="{{ old('metode_berkas') }}" onclick="tampilkan()">
                @if ($mahasantri->metode_berkas == "online")
                  <option value="online" selected>Via Online</option>
                @elseif ($mahasantri->metode_berkas == "offline")
                  <option value="offline" selected>Via Offline Atau Kurir</option>
                @else
                  <option value="email" selected>Email</option>
                @endif
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <label class="form-label text-center">Berkas :</label>
              <a href="{{ url('/download/'.$mahasantri->id) }}">{{ $mahasantri->berkas }}</a>
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
                        <input name="berkas" type="file" class="form-control" value="{{ old('berkas') }}" multiple>
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
                      <div class="form-group">
                      <div class="col-12">
                        <label class="form-label text-center">Upload Bukti Pengiriman :</label>
                        <input name="berkas" type="file" class="form-control" value="{{ old('berkas') }}" multiple>
                      </div>
                    </div>
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
                      <div class="form-group">
                        <div class="col-12">
                          <label class="form-label text-center">Upload Bukti Pengiriman :</label>
                          <input name="berkas" type="file" class="form-control" value="{{ old('berkas') }}" multiple>
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
              style="margin-right: 10px;">Update
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