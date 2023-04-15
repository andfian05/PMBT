@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h5 class="text-center">Detail Tes Baca dan Hafalan Al Qur'an Calon Mahasantri</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
              <div class="card-body">
                <a class="btn btn-success btn-sm-2" href="{{ route('baca-quran.index') }}">
                  <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                </a>
              </div>
            </div>
        </div>

        <div class="container"> 
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Penilaian Tes Baca dan Hafalan Al Qur'an Calon Mahasantri</h3>
                </div>
                <div class="card-body">
                  {{-- Data Calon Mahasantri --}}
                  <div class="container">
                    <div class="card">
                      <div class="bg-info">
                        <h6 class="text-center mt-2">Data Calon Mahasantri</h6>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group col-md-12">
                        <label for="" class="form-label text-justify" style="color : #0E8388">Nama Calon Mahasantri <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                        <select id="" name="mhs_id" class="custom-select" disabled>
                          <option value="{{ $baca_quran->mahasantri->id }}">{{ $baca_quran->mahasantri->nama }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group col-md-12">
                        <label for="" class="form-label text-justify" style="color : #0E8388">No. Handphone Calon Mahasantri <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                        <select id="" name="mhs_id" class="custom-select" disabled>
                          <option value="{{ $baca_quran->mahasantri->id }}">{{ $baca_quran->mahasantri->no_hp }}</option>
                        </select>
                      </div>
                    </div>
                  </div><br>

                  {{-- Data Pewawancara --}}
                  <div class="container">
                    <div class="card">
                      <div class="bg-info">
                        <h6 class="text-center mt-2">Data Pewawancara</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" class="form-label text-justify" style="color : #0E8388">Nama Pewawancara Tes Baca dan Hafalan Al Qur'an <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                      <input class="form-control" name="nama_pewawancara" id="" type="text" value="{{ $baca_quran->nama_pewawancara }}" disabled/>
                    </div>
                  </div><br>

                  {{-- Tempat dilaksanakannya Seleksi --}}
                  <div class="container">
                    <div class="card">
                      <div class="bg-info">
                        <h6 class="text-center mt-2">Tempat Seleksi Tes Baca dan Hafalan Al Qur'an</h6>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group col-md-12">
                      <label for="keterangan" class="form-label text-justify" style="color : #0E8388">Tempat Seleksi <sup class="text-danger" font-size="20px">* (Wajib)</sup></label> 
                      <div class="form-group">
                        <select id="keterangan" name="tmp_seleksi" class="custom-select" disabled onclick="tampilkan()">
                          <option value="{{ $baca_quran->tmp_seleksi }}">{{ $baca_quran->tmp_seleksi }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-12" class="form-label text-justify" style="color : #0E8388">Lokasi <sup class="text-danger" font-size="20px">* (Wajib)</sup></label> 
                      <input type="text" name="lks_seleksi" class="form-control" value="{{ $baca_quran->lks_seleksi }}" disabled>
                    </div>
                  </div><br>
                  
                  {{-- Tes Bacaan Al Qur'an Calon Mahasantri --}}
                  <div class="container">
                      <div class="card">
                          <div class="bg-info">
                              <h6 class="text-center mt-2">Penilaian Tes Bacaan Al Qur'an</h6>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-12" class="form-label text-justify" style="color : #0E8388">Surah Al Qur'an Yang Diuji Untuk Bacaan <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                      <div class="col-12">
                          <select id="" name="tesbacaan" class="custom-select" disabled>
                              <option value="{{ $baca_quran->bacaquran->id }}">{{ $baca_quran->bacaquran->surah }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="" class="form-label text-justify" style="color : #0E8388">Nilai Kelancaran Membaca Al Qur'an <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <select id="" name="nilaibacaan" class="custom-select" disabled>
                              <option value="{{ $baca_quran->nilaibacaan }}">{{ $baca_quran->nilaibacaan }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="" class="form-label text-justify" style="color : #0E8388">Nilai Tajwid Dalam Membaca Al Qur'an <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <select id="" name="tajwidbacaan" class="custom-select" disabled>
                            <option value="{{ $baca_quran->tajwidbacaan }}">{{ $baca_quran->tajwidbacaan }}</option>
                          </select>
                      </div>
                  </div><br>
                  {{-- Tes Hafalan Al Qur'an Calon Mahasantri --}}
                  <div class="container">
                      <div class="card">
                          <div class="bg-info">
                              <h6 class="text-center mt-2">Penilaian Tes Hafalan Al Qur'an</h6>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-12" class="form-label text-justify" style="color : #0E8388">Surah Al Qur'an Yang Diuji Untuk Hafalan <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                      <div class="col-12">
                          <select id="" name="teshafalan" class="custom-select" disabled>
                            <option value="{{ $baca_quran->hafalanquran->id }}">{{ $baca_quran->hafalanquran->surah }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="" class="form-label text-justify" style="color : #0E8388">Jumlah Hafalan Yang Dimiliki <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <input class="form-control" name="jmlhafalan" id="" type="text" value="{{ $baca_quran->jmlhafalan }}" disabled/>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="" class="form-label text-justify" style="color : #0E8388">Nilai Kelancaran Hafalan Al Qur'an <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <select id="" name="nilaihafalan" class="custom-select" disabled>
                            <option value="{{ $baca_quran->nilaihafalan }}">{{ $baca_quran->nilaihafalan }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="" class="form-label text-justify" style="color : #0E8388">Nilai Tajwid Dalam Hafalan Al Qur'an <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <select id="" name="tajwidhafalan" class="custom-select" disabled>
                            <option value="{{ $baca_quran->tajwidhafalan }}">{{ $baca_quran->tajwidhafalan }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-12" class="form-label text-justify" style="color : #0E8388">Kemampuan Dalam Menghafal <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                      <div class="col-12">
                          <select id="" name="kemampuanhafalan" class="custom-select" disabled>
                            <option value="{{ $baca_quran->kemampuanhafalan }}">{{ $baca_quran->kemampuanhafalan }}</option>
                          </select>
                      </div>
                  </div><br>
                </div>
            </div>
        </div>
    </div>
@endsection