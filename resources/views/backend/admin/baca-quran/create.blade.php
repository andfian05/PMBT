@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h5 class="text-center">Tambah Data Tes Baca dan Hafalan Al Qur'an Calon Mahasantri</h5>
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
                  <h3 class="card-title">Penilaian Tes Baca dan Hafalan Al Qur'an</h3>
                </div>
                <div class="card-body">
                  <form action="{{ route('baca-quran.store') }}" method="POST" id="form1" name="form1">
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
                        <div class="form-group">
                          <label for="">Calon Mahasantri</label>
                          <select id="" name="mhs_id" class="custom-select" required>
                            <option value="">-- Pilihan --</option>
                            @foreach ($mahasantris as $mahasantri)
                              <option value="{{ $mahasantri->id }}">Nama: {{ $mahasantri->nama }} | No. Hp: {{ $mahasantri->no_hp }}</option>
                            @endforeach
                          </select>
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
                          <label for="">Nama Pewawancara Tes Baca dan Hafalan Al-Qur'an</label>
                          <input class="form-control" name="nama_pewawancara" id="" type="text" required/>
                        </div>
                      </div><br>

                      {{-- Tempat dilaksanakannya Seleksi --}}
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Tempat Seleksi Tes Tanya Jawab</h6>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-group col-md-12">
                          <label for="keterangan">Tempat Seleksi</label> 
                          <div class="form-group">
                            <select id="keterangan" name="tmp_seleksi" class="custom-select" required onclick="tampilkan()">
                              <option value="">-- Pilihan --</option>
                              @foreach ($tmp_seleksis as $tmp_seleksi)
                                <option value="{{ $tmp_seleksi }}">{{ $tmp_seleksi }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div> 
                        
                        <script>
                          function tampilkan(){
                              var pesan=document.getElementById("form1").keterangan.value;
                              var p_kontainer=document.getElementById("container");
                              
                              if (pesan=="Virtual")
                                  {
                                      p_kontainer.innerHTML=`<p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Melalui Secara Virtual</b></p><input type="hidden" name="lks_seleksi" value="Virtual (Online)">`;
                                  }
                              else if (pesan=="PeTIK Jombang")
                                  {
                                      p_kontainer.innerHTML=`<p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Di Lakukan Di PeTIK Jombang</b></p><input type="hidden" name="lks_seleksi" value="Offline di PeTIK Jombang">`;
                                  }
                              else if (pesan=="YBM PLN")
                                  {
                                      p_kontainer.innerHTML=`
                                      <div class="form-group">
                                        <label class="col-12">Lokasi</label> 
                                        <input type="text" name="lks_seleksi" placeholder="YBM PLN ..." class="form-control" required>
                                      </div>
                                      
                                      `;
                                  }
                          }
                        </script>
                        <div class="container">
                          <p id="container"></p>
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
                          <label class="col-12">Surah Al Qur'an Yang Diuji Untuk Bacaan</label>
                          <div class="col-12">
                              <select id="" name="tesbacaan" class="custom-select" required>
                                  <option value="">-- Pilihan Surah --</option>
                                  @foreach ($qurans as $quran)
                                    <option value="{{ $quran->id }}">Q.S. {{ $quran->surah }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Nilai Kelancaran Membaca Al Qur'an</label>
                              <select id="" name="nilaibacaan" class="custom-select" required>
                                  <option value="">-- Nilai --</option>
                                  @foreach ($nilais as $nilai)
                                    <option value="{{ $nilai }}">{{ $nilai }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Nilai Tajwid Dalam Membaca Al Qur'an</label>
                              <select id="" name="tajwidbacaan" class="custom-select" required>
                                  <option value="">-- Nilai --</option>
                                  @foreach ($nilais as $nilai)
                                    <option value="{{ $nilai }}">{{ $nilai }}</option>
                                  @endforeach
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
                          <label class="col-12">Surah Al Qur'an Yang Diuji Untuk Hafalan</label>
                          <div class="col-12">
                              <select id="" name="teshafalan" class="custom-select" required>
                                  <option value="">-- Pilihan Surah --</option>
                                  @foreach ($qurans as $quran)
                                    <option value="{{ $quran->id }}">Q.S. {{ $quran->surah }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Jumlah Hafalan, (Wajib Angka)</label>
                              <input class="form-control" name="jmlhafalan" id="" type="text" required/>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Nilai Kelancaran Hafalan Al Qur'an</label>
                              <select id="" name="nilaihafalan" class="custom-select" required>
                                  <option value="">-- Nilai --</option>
                                  @foreach ($nilais as $nilai)
                                    <option value="{{ $nilai }}">{{ $nilai }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Nilai Tajwid Dalam Hafalan Al Qur'an</label>
                              <select id="" name="tajwidhafalan" class="custom-select" required>
                                  <option value="">-- Nilai --</option>
                                  @foreach ($nilais as $nilai)
                                    <option value="{{ $nilai }}">{{ $nilai }}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Kemampuan Hafalan Al Qur'an</label>
                          <div class="col-12">
                              <select id="" name="kemampuanhafalan" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="50">Kurang Baik</option>
                                  <option value="80">Baik</option>
                                  <option value="100">Sangat Baik</option>
                              </select>
                          </div>
                      </div><br>
                      
                      <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                          <button type="submit"
                              class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                              style="margin-right: 10px;">Keputusan PMB
                          </button>
                          <a class="btn btn-success btn-sm-2 px-3 mb-2 mb-lg-0" href="{{ route('baca-quran.index') }}">
                            Back
                          </a>
                      </div>
                  </form>
                 
                </div>
            </div>
        </div>
    </div>
@endsection