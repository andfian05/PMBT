@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h5 class="text-center">Update Tes Survei Calon Mahasantri</h5>
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
                  <form action="{{ route('survei.update', $survei->id) }}" method="POST" id="form1" name="form1">
                    @csrf
                    @method('PUT')
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
                            @foreach ($mahasantris as $mahasantri)
                              @if ($survei->mhs_id == $mahasantri->id)
                                <option value="{{ $mahasantri->id }}" selected>Nama: {{ $mahasantri->nama }} | No. Hp: {{ $mahasantri->no_hp }}</option>
                              @else
                                <option value="{{ $mahasantri->id }}">Nama: {{ $mahasantri->nama }} | No. Hp: {{ $mahasantri->no_hp }}</option>
                              @endif
                            @endforeach
                          </select>
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
                          <input class="form-control" name="nama_pewawancara" id="" type="text" value="{{ old('nama_pewawancara') ? old('nama_pewawancara') : $survei->nama_pewawancara }}" required/>
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
                            <select id="keterangan" name="tmp_seleksi" class="custom-select" required onclick="tampilkan()">
                              @foreach ($tmp_seleksis as $tmp_seleksi)
                                @if ( $survei->tmp_seleksi == $tmp_seleksi )
                                  <option value="{{ $tmp_seleksi }}" selected>{{ $tmp_seleksi }}</option>
                                @else
                                  <option value="{{ $tmp_seleksi }}">{{ $tmp_seleksi }}</option>
                                @endif
                              @endforeach
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
                                      @if ( $survei->lks_seleksi == "Virtual (Online)" )
                                        <div class="form-group">
                                          <label class="col-12">Lokasi</label> 
                                          <div class="col-12">
                                            <input type="text" name="lks_seleksi" value="{{ $survei->lks_seleksi }}">
                                          </div> 
                                        </div>
                                      @else
                                        <p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Melalui Secara Virtual</b></p><input type="hidden" name="lks_seleksi" value="Virtual (Online)">
                                      @endif`;
                                  }
                              else if (pesan=="PeTIK Jombang")
                                  {
                                      p_kontainer.innerHTML=`
                                      @if ( $survei->lks_seleksi == "Offline di PeTIK Jombang" )
                                        <div class="form-group">
                                          <label class="col-12">Lokasi</label> 
                                          <div class="col-12">
                                            <input type="text" name="lks_seleksi" value="{{ $survei->lks_seleksi }}">
                                          </div> 
                                        </div>
                                      @else
                                        <p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Di Lakukan Di PeTIK Jombang</b></p><input type="hidden" name="lks_seleksi" value="Offline di PeTIK Jombang">
                                      @endif`;
                                  }
                              else if (pesan=="YBM PLN")
                                  {
                                      p_kontainer.innerHTML=`
                                      <div class="form-group">
                                        <label class="col-12">Lokasi</label> 
                                        <div class="col-12">
                                          <select id="lks_seleksi" name="lks_seleksi" class="custom-select" required>
                                              @foreach ($lks_seleksis as $lks_seleksi)
                                                @if ( $survei->tmp_seleksi == $tmp_seleksi )
                                                  <option value="{{ $lks_seleksi }}" selected>{{ $lks_seleksi }}</option>
                                                @else
                                                  <option value="{{ $lks_seleksi }}">{{ $lks_seleksi }}</option>
                                                @endif
                                              @endforeach
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
                                <select name="sktm" class="custom-select" required>
                                  @foreach ($sktms as $sktm)
                                    @if ($survei->sktm == $sktm['nilai'])
                                      <option value="{{ $survei->sktm }}" selected>{{ $survei->sktm }}</option>
                                    @else
                                      <option value="{{ $sktm['nilai'] }}">{{ $sktm['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_sktm"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_sktm') ? old('note_sktm') : $survei->note_sktm }}
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
                                <select name="progbeasiswa" class="custom-select" required>
                                  @foreach ($progbeas as $progbea)
                                    @if ( $survei->progbeasiswa == $progbea['nilai'] )
                                      <option value="{{ $survei->progbeasiswa }}" selected>{{ $survei->progbeasiswa }}</option>
                                    @else
                                      <option value="{{ $progbea['nilai'] }}">{{ $progbea['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label>Catatan</label>
                              <textarea name="note_progbea"  class="form-control" cols="4" rows="4" required>
                                {{ old('note_progbea') ? old('note_progbea') : $survei->note_progbea }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Apakah Yang Bersangkutan Mendapat Izin Dari Orang Tua Untuk Mengikuti Beasiswa Pendidikan Pesantren PeTIK Jombang?</label> 
                              <div>
                                <select name="izinbeasiswa" class="custom-select" required>
                                  @foreach ($izins as $izin)
                                    @if ( $survei->izinbeasiswa == $izin['nilai'] )
                                      <option value="{{ $survei->izinbeasiswa }}" selected>{{ $survei->izinbeasiswa }}</option>
                                    @else
                                      <option value="{{ $izin['nilai'] }}">{{ $izin['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label>Catatan</label>
                              <textarea name="note_izinbeasiswa"  class="form-control" cols="4" rows="4" required>
                                {{ old('note_izinbeasiswa') ? old('note_izinbeasiswa') : $survei->note_izinbeasiswa }}
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
                                  <option value="{{ $survei->statuskel }}">{{ $survei->statuskel }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label>Catatan</label>
                              <textarea name="note_statuskel"  class="form-control" cols="4" rows="4" required>
                                {{ old('note_statuskel') ? old('note_statuskel') : $survei->note_statuskel }}
                              </textarea>
                            </div>
                          </div>                        
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Pendidikan Terakhir Kepala Keluarga</label> 
                              <div>
                                <select name="pendkel" class="custom-select" required>
                                  @foreach ($pendakhirs as $pendakhir)
                                    @if ( $survei->pendkel == $pendakhir['nilai'] )
                                      <option value="{{ $survei->pendkel }}" selected>{{ $survei->pendkel }}</option>
                                    @else
                                      <option value="{{ $pendakhir['nilai'] }}">{{ $pendakhir['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label>Catatan</label>
                              <textarea name="note_pendkel"  class="form-control" cols="4" rows="4" required>
                                {{ old('note_pendkel') ? old('note_pendkel') : $survei->note_pendkel }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Usia Program Pendidikan Kepala Keluarga</label> 
                              <div>
                                <select name="usiapend" class="custom-select" required>
                                  @foreach ($usiapends as $usiapend)
                                    @if ( $survei->usiapend == $usiapend['nilai'] )
                                      <option value="{{ $survei->usiapend }}" selected>{{ $survei->usiapend }}</option>
                                    @else
                                      <option value="{{ $usiapend['nilai'] }}">{{ $usiapend['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label>Catatan</label>
                              <textarea name="note_usiapend"  class="form-control" cols="4" rows="4" required>
                                {{ old('note_usiapend') ? old('note_usiapend') : $survei->note_usiapend }}
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
                                  <option value="{{ $survei->kesehatankel }}">{{ $survei->kesehatankel }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_kesehatankel"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_kesehatankel') ? old('note_kesehatankel') : $survei->note_kesehatankel }}
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
                                  <option value="{{ $survei->jenispekrj }}">{{ $survei->jenispekrj }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_jenispekrj"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_jenispekrj') ? old('note_jenispekrj') : $survei->note_jenispekrj }}
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
                                  <option value="{{ $survei->statusrmh }}">{{ $survei->statusrmh }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_statusrmh"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_statusrmh') ? old('note_statusrmh') : $survei->note_statusrmh }}
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
                                  <option value="{{ $survei->luasrmh }}">{{ $survei->luasrmh }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_luasrmh"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_luasrmh') ? old('note_luasrmh') : $survei->note_luasrmh }}
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
                                  <option value="{{ $survei->dindingrmh }}">{{ $survei->dindingrmh }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_dindingrmh"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_dindingrmh') ? old('note_dindingrmh') : $survei->note_dindingrmh }}
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
                                  <option value="{{ $survei->ataprmh }}">{{ $survei->ataprmh }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_ataprmh"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_ataprmh') ? old('note_ataprmh') : $survei->note_ataprmh }}
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
                                  <option value="{{ $survei->lantairmh }}">{{ $survei->lantairmh }}</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_lantairmh"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_lantairmh') ? old('note_lantairmh') : $survei->note_lantairmh }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Alat Masak</label> 
                              <div>
                                <select name="alatmsk" class="custom-select" required>
                                  @foreach ($alatmsks as $alatmsk)
                                    @if ( $survei->alatmsk == $alatmsk['nilai'] )
                                      <option value="{{ $survei->alatmsk }}" selected>{{ $survei->alatmsk }}</option>
                                    @else
                                      <option value="{{ $alatmsk['nilai'] }}">{{ $alatmsk['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_alatmsk"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_alatmsk') ? old('note_alatmsk') : $survei->note_alatmsk }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Perabotan</label> 
                              <div>
                                <select name="perabotan" class="custom-select" required>
                                  @foreach ($perabotans as $perabotan)
                                    @if ( $survei->perabotan == $perabotan['nilai'] )
                                      <option value="{{ $survei->perabotan }}" selected>{{ $survei->perabotan }}</option>
                                    @else
                                      <option value="{{ $perabotan['nilai'] }}">{{ $perabotan['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_perabotan"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_perabotan') ? old('note_perabotan') : $survei->note_perabotan }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Sumber Air</label> 
                              <div>
                                <select name="sumberair" class="custom-select" required>
                                  @foreach ($sumberairs as $sumberair)
                                    @if ( $survei->sumberair == $sumberair['nilai'] )
                                      <option value="{{ $survei->sumberair }}" selected>{{ $survei->sumberair }}</option>
                                    @else
                                      <option value="{{ $sumberair['nilai'] }}">{{ $sumberair['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_sumberair"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_sumberair') ? old('note_sumberair') : $survei->note_sumberair }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>MCK</label> 
                              <div>
                                <select name="mck" class="custom-select" required>
                                  @foreach ($mcks as $mck)
                                    @if ( $survei->mck == $mck['nilai'] )
                                      <option value="{{ $survei->mck }}" selected>{{ $survei->mck }}</option>
                                    @else
                                      <option value="{{ $mck['nilai'] }}">{{ $mck['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_mck"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_mck') ? old('note_mck') : $survei->note_mck }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Penerangan</label> 
                              <div>
                                <select name="penerangan" class="custom-select" required>
                                  @foreach ($penerangans as $penerangan)
                                    @if ( $survei->penerangan == $penerangan['nilai'] )
                                      <option value="{{ $survei->penerangan }}" selected>{{ $survei->penerangan }}</option>
                                    @else
                                      <option value="{{ $penerangan['nilai'] }}">{{ $penerangan['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_penerangan"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_penerangan') ? old('note_penerangan') : $survei->note_penerangan }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Lokasi Rumah</label> 
                              <div>
                                <select name="lokasirmh" class="custom-select" required>
                                  @foreach ($lokasirmhs as $lokasirmh)
                                    @if ( $survei->lokasirmh == $lokasirmh['nilai'] )
                                      <option value="{{ $survei->lokasirmh }}" selected>{{ $survei->lokasirmh }}</option>
                                    @else
                                      <option value="{{ $lokasirmh['nilai'] }}">{{ $lokasirmh['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_lokasirmh"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_lokasirmh') ? old('note_lokasirmh') : $survei->note_lokasirmh }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Tata Letak Rumah</label> 
                              <div>
                                <select name="tataletak" class="custom-select" required>
                                  @foreach ($tataletaks as $tataletak)
                                    @if ( $survei->tataletak == $tataletak['nilai'] )
                                      <option value="{{ $survei->tataletak }}" selected>{{ $survei->tataletak }}</option>
                                    @else
                                      <option value="{{ $tataletak['nilai'] }}">{{ $tataletak['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_tataletak"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_tataletak') ? old('note_tataletak') : $survei->note_tataletak }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Kepemilikan Tanah</label> 
                              <div>
                                <select name="miliktanah" class="custom-select" required>
                                  @foreach ($miliktanahs as $miliktanah)
                                    @if ( $survei->miliktanah == $miliktanah['nilai'] )
                                      <option value="{{ $survei->miliktanah }}" selected>{{ $survei->miliktanah }}</option>
                                    @else
                                      <option value="{{ $miliktanah['nilai'] }}">{{ $miliktanah['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_miliktanah"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_miliktanah') ? old('note_miliktanah') : $survei->note_miliktanah }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                              <label>Kepemilikan Harta Tidak Bergerak</label> 
                              <div>
                                <select name="harta" class="custom-select" required>
                                  @foreach ($hartas as $harta)
                                    @if ( $survei->harta == $harta['nilai'] )
                                      <option value="{{ $survei->harta }}" selected>{{ $survei->harta }}</option>
                                    @else
                                      <option value="{{ $harta['nilai'] }}">{{ $harta['teks'] }}</option>
                                    @endif
                                  @endforeach
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form">
                              <label for="">Catatan</label>
                              <textarea name="note_harta"  class="form-control" id="" cols="4" rows="4" required>
                                {{ old('note_harta') ? old('note_harta') : $survei->note_harta }}
                              </textarea>
                            </div>
                          </div>                           
                      </div>

                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg">Update</button>
                        <!-- <button type="reset" class="btn btn-secondary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg"
                          style="margin-left: 10px;">Cancel
                        </button> -->

                        <a class="btn btn-success btn-sm-2 px-3 mb-2 mb-lg-0" href="{{ route('survei.index') }}">
                          Back
                        </a>
                      </div>
                  </form>
        
                </div>
            </div>
        </div>
    </div>
@endsection