@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h5 class="text-center">Detail Potensi Akademik Calon Mahasantri</h5>
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
                          

                          <select id="" name="mhs_id" class="custom-select" disabled>
                            <option value="{{ $potensi_akademik->mahasantri['nama'] }}">{{ $potensi_akademik->mahasantri['nama'] }}</option>
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
                          <input class="form-control" disabled name="b_inggris" id="" type="text" value="{{ $potensi_akademik->b_inggris }}" required/>
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
                          <input class="form-control" disabled name="komputer" id="" type="text"  value="{{ $potensi_akademik->komputer }}" required/>
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
                          <input class="form-control" disabled name="aritmatika" id="" type="text" value="{{ $potensi_akademik->aritmatika }}" required/>
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
                          <input class="form-control" disabled name="mekanikal" id="" type="text" value="{{ $potensi_akademik->mekanikal }}" required/>
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
                          <input class="form-control" disabled name="simbol" id="" type="text" value="{{ $potensi_akademik->simbol }}" required/>
                        </div>
                      </div>
                      <br>

                      
                      
                      
                  </form>
                 
                </div>
            </div>
        </div>
    </div>
@endsection