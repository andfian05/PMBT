@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h4 class="text-center">Detail Hasil Penilaian Tes Survei Calon Mahasantri</h4>
                </div>
            </div>
        </div>

        <div class="container">
          <div class="card">
            <div class="card-body">
              <a class="btn btn-success btn-sm-2" href="{{ route('survei.index') }}">
                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
              </a>
            </div>
          </div>
        </div>

        <div class="container"> 
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Formulir Assesmen, Penerima Manfaat Beasiswa Pesantren PeTIK Jombang</h3>
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
                      <div class="form-group">
                        <label for="">Nama Calon Mahasantri</label>
                        <select id="" name="mhs_id" class="custom-select" disabled>
                          <option value="{{ $survei->mahasantri->id }}">{{ $survei->mahasantri->nama }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">No. Hp Calon Mahasantri</label>
                        <select id="" name="mhs_id" class="custom-select" disabled>
                          <option value="{{ $survei->mahasantri->id }}">{{ $survei->mahasantri->no_hp }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
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
                      <label for="">Nama Pewawancara Survei</label>
                      <input class="form-control" name="nama_pewawancara" id="" type="text" value="{{ $survei->nama_pewawancara }}" disabled/>
                    </div>
                  </div>
                  {{-- Tempat dilaksanakannya Seleksi --}}
                  <div class="container">
                    <div class="card">
                      <div class="bg-info">
                        <h6 class="text-center mt-2">Tempat Seleksi Tes Survei</h6>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label for="keterangan">Tempat Seleksi</label> 
                      <div class="form-group">
                        <select id="keterangan" name="tmp_seleksi" class="custom-select" onclick="tampilkan()" disabled>
                          <option value="{{ $survei->tmp_seleksi }}">{{ $survei->tmp_seleksi }}</option>
                        </select>
                      </div>
                    </div> 
                    <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                    <script>
                      function tampilkan(){
                          var pesan=document.getElementById("form1").keterangan.value;
                          var p_kontainer=document.getElementById("container");
                          
                          if (pesan=="Virtual")
                              {
                                  p_kontainer.innerHTML=`
                                  <div class="form-group">
                                    <label class="col-12">Lokasi</label> 
                                    <div class="col-12">
                                      <input type="text" name="lks_seleksi" value="{{ $survei->lks_seleksi }}">
                                    </div> 
                                  </div>`;
                              }
                          else if (pesan=="PeTIK Jombang")
                              {
                                  p_kontainer.innerHTML=`
                                  <div class="form-group">
                                    <label class="col-12">Lokasi</label> 
                                    <div class="col-12">
                                      <input type="text" name="lks_seleksi" value="{{ $survei->lks_seleksi }}">
                                    </div> 
                                  </div>`;
                              }
                          else if (pesan=="YBM PLN")
                              {
                                  p_kontainer.innerHTML=`
                                  <div class="form-group">
                                    <label class="col-12">Lokasi</label> 
                                    <div class="col-12">
                                      <select id="lks_seleksi" name="lks_seleksi" class="custom-select" disabled>
                                        <option value="{{ $survei->lks_seleksi }}">{{ $survei->lks_seleksi }}</option>
                                      </select>
                                    </div> 
                                  </div>
                                  
                                  `;
                              }
                      }
                    </script>
                    <div class="container">
                      <p id="container"></p>
                    </div>
                  </div>
                  {{-- Kriteria Pendapatan --}}
                  <div class="container">
                    <div class="card">
                        <div class="bg-info">
                          <h6 class="text-center mt-2">Kelayakan Pendapatan Keluarga</h6>
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Surat Keterangan Tidak Mampu (SKTM) Dari Sekolah/Kelurahan/DKM</label> 
                          <div>
                            <select name="sktm" class="custom-select" disabled>
                              <option value="">{{ $survei->sktm }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_sktm"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_sktm }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  {{-- Program Beasiswa --}}
                  <div class="container">
                      <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Dukungan Dalam Menjalankan Program</h6>
                          </div>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Apakah Yang Bersangkutan Dan Keluarga Saat Ini Sedang Mengikuti Program Serupa Dari Lembaga Lain?</label> 
                          <div>
                            <select name="progbeasiswa" class="custom-select" disabled>
                              <option value="">{{ $survei->progbeasiswa }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label>Catatan</label>
                          <textarea name="note_progbea"  class="form-control" cols="4" rows="4" disabled>
                            {{ $survei->note_progbea }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Apakah Yang Bersangkutan Mendapat Izin Dari Orang Tua Untuk Mengikuti Beasiswa Pendidikan Pesantren PeTIK Jombang?</label> 
                          <div>
                            <select name="izinbeasiswa" class="custom-select" disabled>
                              <option value="">{{ $survei->izinbeasiswa }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label>Catatan</label>
                          <textarea name="note_izinbeasiswa"  class="form-control" cols="4" rows="4" disabled>
                            {{ $survei->note_izinbeasiswa }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  {{-- Identitas Keluarga --}}
                  <div class="container">
                      <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Identitas Mustahiq</h6>
                          </div>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Status Dalam Keluarga</label> 
                          <div>
                            <select name="statuskel" class="custom-select" disabled>
                              <option value="">{{ $survei->statuskel }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label>Catatan</label>
                          <textarea name="note_statuskel"  class="form-control" cols="4" rows="4" disabled>
                            {{ $survei->note_statuskel }}
                          </textarea>
                        </div>
                      </div>                        
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Pendidikan Terakhir Kepala Keluarga</label> 
                          <div>
                            <select name="pendkel" class="custom-select" disabled>
                              <option value="">{{ $survei->pendkel }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label>Catatan</label>
                          <textarea name="note_pendkel"  class="form-control" cols="4" rows="4" disabled>
                            {{ $survei->note_pendkel }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Usia Program Pendidikan Kepala Keluarga</label> 
                          <div>
                            <select name="usiapend" class="custom-select" disabled>
                              <option value="">{{ $survei->usiapend }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label>Catatan</label>
                          <textarea name="note_usiapend"  class="form-control" cols="4" rows="4" disabled>
                            {{ $survei->note_usiapend }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Kondisi Kesehatan Kepala Keluarga</label> 
                          <div>
                            <select name="kesehatankel" class="custom-select" disabled>
                              <option value="">{{ $survei->kesehatankel }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_kesehatankel"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_kesehatankel }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Jenis Pekerjaan Kepala Keluarga</label> 
                          <div>
                            <select name="jenispekrj" class="custom-select" disabled>
                              <option value="">{{ $survei->jenispekrj }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_jenispekrj"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_jenispekrj }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  {{-- Keadaan Tempat Tinggal --}}
                  <div class="container">
                      <div class="card">
                        <div class="bg-info">
                          <h6 class="text-center mt-2">Kondisi Rumah Atau Tempat Tinggal</h6>
                        </div>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Status</label> 
                          <div>
                            <select name="statusrmh" class="custom-select" disabled>
                              <option value="">{{ $survei->statusrmh }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_statusrmh"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_statusrmh }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Luas</label> 
                          <div>
                            <select name="luasrmh" class="custom-select" disabled>
                              <option value="">{{ $survei->luasrmh }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_luasrmh"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_luasrmh }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Dinding</label> 
                          <div>
                            <select name="dindingrmh" class="custom-select" disabled>
                              <option value="">{{ $survei->dindingrmh }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_dindingrmh"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_dindingrmh }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Atap</label> 
                          <div>
                            <select name="ataprmh" class="custom-select" disabled>
                              <option value="">{{ $survei->ataprmh }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_ataprmh"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_ataprmh }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Lantai</label> 
                          <div>
                            <select name="lantairmh" class="custom-select" disabled>
                              <option value="">{{ $survei->lantairmh }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_lantairmh"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_lantairmh }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Alat Masak</label> 
                          <div>
                            <select name="alatmsk" class="custom-select" disabled>
                              <option value="">{{ $survei->alatmsk }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_alatmsk"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_alatmsk }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Perabotan</label> 
                          <div>
                            <select name="perabotan" class="custom-select" disabled>
                              <option value="">{{ $survei->perabotan }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_perabotan"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_perabotan }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Sumber Air</label> 
                          <div>
                            <select name="sumberair" class="custom-select" disabled>
                              <option value="">{{ $survei->sumberair }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_sumberair"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_sumberair }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>MCK</label> 
                          <div>
                            <select name="mck" class="custom-select" disabled>
                              <option value="">{{ $survei->mck }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_mck"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_mck }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Penerangan</label> 
                          <div>
                            <select name="penerangan" class="custom-select" disabled>
                              <option value="">{{ $survei->penerangan }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_penerangan"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_penerangan }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Lokasi Rumah</label> 
                          <div>
                            <select name="lokasirmh" class="custom-select" disabled>
                              <option value="">{{ $survei->lokasirmh }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_lokasirmh"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_lokasirmh }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Tata Letak Rumah</label> 
                          <div>
                            <select name="tataletak" class="custom-select" disabled>
                              <option value="">{{ $survei->tataletak }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_tataletak"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_tataletak }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Kepemilikan Tanah</label> 
                          <div>
                            <select name="miliktanah" class="custom-select" disabled>
                              <option value="">{{ $survei->miliktanah }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_miliktanah"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_miliktanah }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                          <label>Kepemilikan Harta Tidak Bergerak</label> 
                          <div>
                            <select name="harta" class="custom-select" disabled>
                              <option value="">{{ $survei->harta }}</option>
                            </select>
                          </div> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label for="">Catatan</label>
                          <textarea name="note_harta"  class="form-control" id="" cols="4" rows="4" disabled>
                            {{ $survei->note_harta }}
                          </textarea>
                        </div>
                      </div>                           
                  </div>
              </form>
                </div>
            </div>
        </div>
    </div>
@endsection