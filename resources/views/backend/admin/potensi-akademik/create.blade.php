@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h5 class="text-center">Tambah Data Tes Potensi Akademik Calon Mahasantri</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
              <div class="card-body">
                <a class="btn btn-success btn-sm-2" href="{{ route('potensi-akademik.index') }}">
                  <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                </a>
              </div>
            </div>
        </div>

        <div class="container"> 
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Penilaian Tes Baca dan Hafalan Al Qur'an</h3>
                </div>
                <div class="card-body">
                  <form action="{{ route('potensi-akademik.store') }}" method="POST" id="form1" name="form1">
                    @csrf
                      {{-- Data Calon Mahasantri --}}
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Data Calon Mahasantri</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"><br>
                          <label for="" class="form-label text-justify" style="color : #0E8388">Nama Calon Mahasantri <sup class="text-danger" font-size="20px">* (Wajib)</sup></label><br>
                          <select id="" name="mhs_id" class="custom-select" required>
                            <option value="">-- Pilihan --</option>
                            @foreach ($mahasantris as $mahasantri)
                              <option value="{{ $mahasantri->id }}">Nama: {{ $mahasantri->nama }} | No. Hp: {{ $mahasantri->no_hp }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div><br>

                      {{-- Tes Bahasa Inggris --}}
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Kemampuan Bahasa Inggris</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"><br>
                          <label for="" class="form-label text-justify" style="color : #0E8388">Hasil Tes Bahasa Inggris <sup class="text-danger" font-size="20px">* (Wajib)</sup></label><br>
                          <input class="form-control" name="b_inggris" id="" type="text" required/>
                        </div>
                      </div><br>
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Pengetahuan Dasar Komputer</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"><br>
                          <label for="" class="form-label text-justify" style="color : #0E8388">Hasil Tes Pengetahuan Dasar Komputer <sup class="text-danger" font-size="20px">* (Wajib)</sup></label><br>
                          <input class="form-control" name="komputer" id="" type="text" required/>
                        </div>
                      </div><br>
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Penalaran Aritmatika</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"><br>
                          <label for="" class="form-label text-justify" style="color : #0E8388">Hasil Tes Penalaran Aritmatika <sup class="text-danger" font-size="20px">* (Wajib)</sup></label><br>
                          <input class="form-control" name="aritmatika" id="" type="text" required/>
                        </div>
                      </div><br>
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Penalaran Mekanikal</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"><br>
                          <label for="" class="form-label text-justify" style="color : #0E8388">Hasil Tes Penalaran Mekanikal <sup class="text-danger" font-size="20px">* (Wajib)</sup></label><br>
                          <input class="form-control" name="mekanikal" id="" type="text" required/>
                        </div>
                      </div><br>
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Analogi Simbol</h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"><br>
                          <label for="" class="form-label text-justify" style="color : #0E8388">Hasil Tes Analogi Simbol <sup class="text-danger" font-size="20px">* (Wajib)</sup></label><br>
                          <input class="form-control" name="simbol" id="" type="text" required/>
                        </div>
                      </div>
                      <br>

                      
                      
                      <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                          <button type="submit"
                              class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                              style="margin-right: 10px;">Keputusan PMB
                          </button>
                          <a class="btn btn-success btn-sm-2 px-3 mb-2 mb-lg-0" href="{{ route('potensi-akademik.index') }}">
                            Back
                          </a>
                      </div>
                  </form>
                 
                </div>
            </div>
        </div>
    </div>
@endsection