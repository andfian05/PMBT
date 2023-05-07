@extends('backend.panitia-a.index')
@section('content')
<div class="content-wrapper">

    <br><br>


    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Formulir Assesmen, Penerima Manfaat Beasiswa Pesantren PeTIK Jombang</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('test-survey.store') }}" method="POST" id="form1" name="form1">
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
                            <label for="" class="text-justify" style="color : #0E8388">Nama Calon Mahasantri <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                            <select id="" name="mhs_id" class="custom-select" required>
                                <option value="">-- Pilihan --</option>
                                @foreach ($mahasantris as $mahasantri)
                                <option value="{{ $mahasantri->id }}"> {{ $mahasantri->nama }}</option>
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
                            <label for="" class="text-justify" style="color : #0E8388">Nama Pewawancara Survei <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                            <input class="form-control" name="nama_pewawancara" id="" type="text" />
                        </div>
                    </div><br>
                    {{-- Tempat dilaksanakannya Seleksi --}}
                    <div class="container">
                        <div class="card">
                            <div class="bg-info">
                                <h6 class="text-center mt-2">Tempat Seleksi Tes Survei</h6>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group">
                            <label for="keterangan" class="text-justify" style="color : #0E8388">Tempat Seleksi <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                            <div class="form-group">
                                <select id="keterangan" name="tmp_seleksi" class="custom-select" required
                                    onclick="tampilkan()">
                                    <option value="">-- Pilihan --</option>
                                    @foreach ($tmp_seleksis as $tmp_seleksi)
                                    <option value="{{ $tmp_seleksi }}">{{ $tmp_seleksi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <script>
                            function tampilkan() {
                                var pesan = document.getElementById("form1").keterangan.value;
                                var p_kontainer = document.getElementById("container");

                                if (pesan == "Virtual") {
                                    p_kontainer.innerHTML =
                                        `<p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Melalui Secara Virtual</b></p><input type="hidden" name="lks_seleksi" value="Virtual (Online)">`;
                                } else if (pesan == "PeTIK Jombang") {
                                    p_kontainer.innerHTML =
                                        `<p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Di Lakukan Di PeTIK Jombang</b></p><input type="hidden" name="lks_seleksi" value="Offline di PeTIK Jombang">`;
                                } else if (pesan == "YBM PLN") {
                                    p_kontainer.innerHTML = `
                                      
                                      
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
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Apakah Yang Bersangkutan Mendapat Izin Dari Orang Tua Untuk Mengikuti Beasiswa Pendidikan Pesantren PeTIK Jombang? <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="izinbeasiswa" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Mendapatkan izin dari Orang Tua</option>
                                  <option value="4">Orang Tua masih Ragu-ragu dalam memberi izin</option>
                                  <option value="3">Sudah mendapatkan izin dari Orang Tua, namun Calon Mahasantri masih Ragu-ragu</option>
                                  <option value="2">Belum mendapatkan izin Orang Tua</option>
                                  <option value="1">Mengundurkan Diri</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_izinbeasiswa"  class="form-control" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div><br>

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
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Status Dalam Keluarga <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="statuskel" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Anak Kandung</option>
                                  <option value="4">Keponakan</option>
                                  <option value="3">Anak Angkat</option>
                                  <option value="2">Anak Asuh (Panti)</option>
                                  <option value="1">Anak Tiri</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_statuskel"  class="form-control" cols="4" rows="4"></textarea>
                            </div>
                          </div>                        
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Pendidikan Terakhir Kepala Keluarga <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="pendkel" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">MI/SD</option>
                                  <option value="4">MTS/SMP</option>
                                  <option value="3">MA/SMA/SMK</option>
                                  <option value="2">Diploma (D1/D2/D3/D4)</option>
                                  <option value="1">Strata (S1, S2, S3)</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_pendkel"  class="form-control" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Pendapatan Bulanan Kepala Keluarga <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="usiapend" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Sangat Rendah</option>
                                  <option value="4">Rendah</option>
                                  <option value="3">Cukup</option>
                                  <option value="2">Menengah</option>
                                  <option value="1">Tinggi</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_usiapend"  class="form-control" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Kondisi Kesehatan Kepala Keluarga <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="kesehatankel" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Sakit Menahun</option>
                                  <option value="4">Sakit Tua(Manula)</option>
                                  <option value="3">Perawatan</option>
                                  <option value="2">Sehat Dan Tidak Bekerja</option>
                                  <option value="1">Sehat Dan Bekerja</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_kesehatankel"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Jenis Pekerjaan Kepala Keluarga <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="jenispekrj" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Serabutan</option>
                                  <option value="4">Pedagang Kecil</option>
                                  <option value="3">Karyawan, Gaji Dibawah UMR</option>
                                  <option value="2">Karyawan/Honorer/ Namun Pendapatan Dibawah UMR</option>
                                  <option value="1">PNS dan Jabatan Terpandang</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_jenispekrj"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div><br>

                      {{-- Keadaan Tempat Tinggal --}}
                      <div class="container">
                          <div class="card">
                            <div class="bg-info">
                              <h6 class="text-center mt-2" >Kondisi Rumah Atau Tempat Tinggal</h6>
                            </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Status <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="statusrmh" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Tuna Wisma</option>
                                  <option value="4">Menumpang</option>
                                  <option value="3">Mengontrak</option>
                                  <option value="2">Milik Keluarga</option>
                                  <option value="1">Milik Sendiri</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_statusrmh"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Luas <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="luasrmh" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Sangat Kecil</option>
                                  <option value="4">Kecil 3 x 3 Meter</option>
                                  <option value="3">Kecil 4 x 4 Meter</option>
                                  <option value="2">Tipe 29</option>
                                  <option value="1">Tipe 36</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_luasrmh"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Dinding <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="dindingrmh" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Kardus/Kertas Karton</option>
                                  <option value="4">Bilik Bambu atau Sejenisnya</option>
                                  <option value="3">Alumunium atau Sejenisnya</option>
                                  <option value="2">Semi Tembok</option>
                                  <option value="1">Tembok</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_dindingrmh"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Atap <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="ataprmh" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Rumbia, Ijuk atau Sejenisnya</option>
                                  <option value="4">Asbes</option>
                                  <option value="3">Alumunium atau Sejenisnya</option>
                                  <option value="2">Genteng Metal</option>
                                  <option value="1">Genteng Tanah Liat</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_ataprmh"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Lantai <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="lantairmh" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Tanah</option>
                                  <option value="4">Panggung</option>
                                  <option value="3">Semen</option>
                                  <option value="2">Keramik</option>
                                  <option value="1">Keramik dan List Keramik</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_lantairmh"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Alat Masak <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="alatmsk" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Kayu Bakar</option>
                                  <option value="4">Kompor Minyak</option>
                                  <option value="3">Kompor Gas 3 Kg</option>
                                  <option value="2">Kompor Gas 3 Kg Sebanyak 2 Buah (Untuk Usaha)</option>
                                  <option value="1">Kompor Gas 3 Kg Sebanyak 3 Buah (Untuk Usaha)</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_alatmsk"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Perabotan <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="perabotan" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Lemari, Kursi, Meja Maksimal 3 Buah</option>
                                  <option value="4">Lemari, Kursi, Meja Maksimal 4-7 Buah</option>
                                  <option value="3">Lemari, Kursi, Meja Maksimal 8-11 Buah</option>
                                  <option value="2">Lemari, Kursi, Meja Maksimal 12-15 Buah</option>
                                  <option value="1">Lemari, Kursi, Meja Maksimal > 16 Buah</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_perabotan"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Sumber Air <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="sumberair" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Sumur Bersama, Umum</option>
                                  <option value="4">Berbagi Sumur dengan Tetangga</option>
                                  <option value="3">Sumur Sendiri</option>
                                  <option value="2">Sumur Dan Pompa Air</option>
                                  <option value="1">PDAM Dan Pompa Air</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_sumberair"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">MCK <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="mck" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Sungai Atau Jamban Terbuka</option>
                                  <option value="4">MCK Umum Dan Tidak Layak</option>
                                  <option value="3">MCK Umum Dan Layak</option>
                                  <option value="2">Milik Sendiri Dan Kurang Layak</option>
                                  <option value="1">Milik Sendiri Dan Layak</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_mck"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Penerangan <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="penerangan" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Tidak Ada Listrik</option>
                                  <option value="4">Listrik Bersama Rumah Lainnya</option>
                                  <option value="3">Listrik Instalasi Sendiri 450 Watt</option>
                                  <option value="2">Listrik Instalasi Sendiri 900 Watt</option>
                                  <option value="1">Listrik Instalasi Sendiri 1300 Watt</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_penerangan"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Lokasi Rumah <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="lokasirmh" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Daerah 3T (Terdepan, Terluar, Tertinggal)</option>
                                  <option value="4">Daerah Kumuh</option>
                                  <option value="3">Perdesaan Jauh Dari Kota</option>
                                  <option value="2">Perdesaan Dekat Perkotaan</option>
                                  <option value="1">Perumahan</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_lokasirmh"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Tata Letak Rumah <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="tataletak" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Berantakan</option>
                                  <option value="4">50% Teratur</option>
                                  <option value="3">70% Teratur</option>
                                  <option value="2">> 80% Teratur</option>
                                  <option value="1">Tidak Ada Ruangan Yang Berantakan</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_tataletak"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Kepemilikan Tanah <sup class="text-danger" font-size="20px">* (Wajib) </sup> </label> 
                              <div>
                                <select name="miliktanah" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Milik Orang Lain</option>
                                  <option value="4">Milik Pemerintah (Hanya Numpang)</option>
                                  <option value="3">Milik Keluarga Tetapi Bukan Orang Tua</option>
                                  <option value="2">Milik Orang Tua</option>
                                  <option value="1">Milik Sendiri</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_miliktanah"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label class="text-justify" style="color : #0E8388">Kepemilikan Harta <sup class="text-danger" font-size="20px">* (Wajib) </sup></label> 
                              <div>
                                <select name="harta" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Tidak Punya Kendaraan</option>
                                  <option value="4">Mempunyai Motor 1 Milik Pribadi</option>
                                  <option value="3">Mempunyai Motor 1 Milik Keluarga/Kerabat</option>
                                  <option value="2">Mempunyai Motor lebih dari 1</option>
                                  <option value="1">Mempunyai Motor Nmax, Ninja dan lainnya</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col-12">
                              <label for="" class="text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib) </sup></label>
                              <textarea name="note_harta"  class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                          </div>                           
                      </div>

                   
                    <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                        <button type="submit"
                            class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Keputusan PMB
                        </button>
                        <a class="btn btn-success btn-sm-2 px-3 mb-2 mb-lg-0" href="{{ route('test-survey.create') }}">
                            <i class="fa-solid fa-arrows-rotate fa-spin fa-spin-reverse"></i>&nbsp;Refresh
                        </a>
                        
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
