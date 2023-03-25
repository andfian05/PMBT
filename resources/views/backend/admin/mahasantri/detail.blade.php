@extends('backend.admin.index')
@section('content')
  <div class="content-wrapper">
    <br><br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Detail Data Calon Mahasantri</h5>
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
                <label for="">Tuliskan Apa Yang Anda Pahami Tentang PeTIK Jombang?</label>
                <textarea name="ket_profile"  class="form-control" id="" cols="6" rows="3" disabled>
                  {{ $profilePetik->ket_profile }}
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
                  <label for="nama" class="form-label text-justify">Nama Lengkap </label>
                  <input class="form-control" name="nama" id="nama" type="text" value="{{ $mahasantri->nama }}" disabled/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label for="anak_ke" class="form-label text-justify">Anak Ke- </label>
                  <input class="form-control" name="anak_ke" id="anak_ke" type="text" value="{{ $mahasantri->anak_ke }}" disabled/>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">Tempat Lahir </label>
                  <input class="form-control" name="tmp_lahir" type="text" value="{{ $mahasantri->tmp_lahir }}" disabled/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Tanggal Lahir</label>
                  <input class="form-control" name="tgl_lahir" type="date" value="{{ $mahasantri->tgl_lahir }}" disabled/>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">No. Handphone</label>
                  <input class="form-control" name="no_hp" type="text" value="{{ $mahasantri->no_hp }}" disabled/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Email </label>
                  <input class="form-control" name="email" type="email" value="{{ $mahasantri->email }}" disabled/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify">Alamat </label>
              <textarea name="alamat" class="form-control" cols="2" rows="2" disabled>
                {{ $mahasantri->alamat }}
              </textarea>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">Provinsi </label>
                  <div class="form-group -ml-3col-12">
                    <select name="prov_id" id="provinsi" class="custom-select" disabled>
                      <option value="{{ $mahasantri->provinsi->id_prov }}">{{ $mahasantri->provinsi->nama }}</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Kabupaten/Kota </label>
                  <div class="form-group -ml-3col-12">
                    <select name="kab_id" id="kabupaten" class="custom-select" disabled>
                      <option value="{{ $mahasantri->kabupaten->id_kab }}">{{ $mahasantri->kabupaten->nama }}</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">Kecamatan </label>
                  <div class="form-group -ml-3col-12">
                    <select name="kec_id" id="kecamatan" class="custom-select" disabled>
                      <option value="{{ $mahasantri->kecamatan->id_kec }}">{{ $mahasantri->kecamatan->nama }}</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Kelurahan/Desa </label>
                  <div class="form-group -ml-3col-12">
                    <select name="desa_id" id="desa" class="custom-select" disabled>
                      <option value="{{ $mahasantri->desa->id_desa }}">{{ $mahasantri->desa->nama }}</option>
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
              <label class="form-label text-justify">Nama Ayah </label>
              <input class="form-control" name="nama_ayah" type="text" value="{{ $mahasantri->nama_ayah }}" disabled/>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">Pekerjaan Ayah </label>
                  <input class="form-control" name="pkj_ayah" type="text" value="{{ $mahasantri->pkj_ayah }}" disabled/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Pendidikan Ayah </label>
                  <!-- <input class="form-control" name="pdk_ayah" type="text" value="{{ $mahasantri->pdk_ayah }}" disabled/> -->

                  <select name="pdk_ayah" class="custom-select" disabled>
                    <option value="{{ $mahasantri->pdk_ayah }}" selected>{{ $mahasantri->pdk_ayah }}</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify">Nama Ibu </label>
              <input class="form-control" name="nama_ibu" type="text" value="{{ $mahasantri->nama_ibu }}" disabled/>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Pekerjaan Ibu </label>
                  <input class="form-control" name="pkj_ibu" type="text" value="{{ $mahasantri->pkj_ibu }}" disabled/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Pendidikan Ibu </label>
                  <!-- <input class="form-control" name="pdk_ibu" type="text" value="{{ $mahasantri->pdk_ibu }}" disabled/> -->

                  <select name="pdk_ibu" class="custom-select" disabled>
                    <option value="{{ $mahasantri->pdk_ibu }}" selected>{{ $mahasantri->pdk_ibu }}</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-1">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">Jumlah Saudara Kandung </label>
                  <input class="form-control" name="jml_sdr" type="text" value="{{ $mahasantri->jml_sdr }}" disabled/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Nomor Handphone Keluarga Yang Bisa Dihubungi, (Wajib Angka) </label>
                  <input class="form-control" name="nohp_klg" type="text" value="{{ $mahasantri->nohp_klg }}" disabled/>
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
              <input class="form-control" name="skl_asal" type="text" value="{{ $mahasantri->skl_asal }}" disabled/>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">Jurusan </label>
                  <input class="form-control" name="jurusan_skl" type="text" value="{{ $mahasantri->jurusan_skl }}" disabled/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Tahun Lulus, (Wajib Angka) </label>
                  <input class="form-control" name="thn_lulus" type="text" value="{{ $mahasantri->thn_lulus }}" disabled/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify">Harapan Dan Cita-cita </label>
              <textarea name="cita_cita" class="form-control" cols="2" rows="2" disabled>
                {{ $mahasantri->cita_cita }}
              </textarea>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label class="form-label text-justify">Prestasi, Jika Tidak Memiliki Tuliskan ( - ) </label>
                  <textarea name="prestasi" class="form-control" cols="2"rows="2" disabled>
                    {{ $mahasantri->prestasi }}
                  </textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Penyakit Yang Pernah Di Derita Jika Tidak Memiliki, Tuliskan ( - )</label>
                  <textarea name="penyakit" class="form-control" cols="2" rows="2" disabled>
                    {{ $mahasantri->penyakit }}
                  </textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form">
                <label class="form-label text-justify">Apakah Anda Perokok? </label>
                <div class="form-group -ml-3col-12">
                  <select name="perokok" class="custom-select" disabled>
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
                  <label class="form-label text-justify">Jurusan Di PeTIK Jombang Yang Anda Minati?</label>
                  <div class="form-group -ml-3col-12">
                    <select name="jurusan_id" class="custom-select" disabled>
                      <option value="{{ $mahasantri->jurusan->id_jurusan }}" selected>{{ $mahasantri->jurusan->nama_jurusan }}</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label class="form-label text-justify">Jika Anda Memilih Point Peminatan Tersebut, Untuk Kedepannya Apakah Anda Ingin
                      Melanjutkan Untuk Kuliah Atau Bekerja? Tuliskan Alasannya? </label>
                  <textarea name="alasan" class="form-control" cols="3" rows="3" disabled>
                    {{ $mahasantri->alasan }}
                  </textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label text-justify">Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang?</label>
              <div class="form-group -ml-3col-12">
                <select name="media_id" class="custom-select" disabled>
                  <option value="{{ $mahasantri->mediaInformasi->id_media }}" selected>{{ $mahasantri->mediaInformasi->media_informasi }}</option>
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
                <select name="metode_berkas" id="metode_berkas" class="custom-select" disabled>
                    <option value="">{{ $mahasantri->metode_berkas }}</option>
                </select>
              </div>
            </div>
            

            <div class="form-group">
              <div class="col-12">
                <label  class="form-label text-justify">Berkas :</label>
                {{-- <a href="{{ url('/download/'.$mahasantri->id) }}">{{ $mahasantri->berkas }}</a> --}}
                <a href="{!! route('download', $mahasantri->id) !!}">{{ $mahasantri->berkas }}</a>
              </div>
            </div>
        </div>
      </div>
    </div>
@endsection