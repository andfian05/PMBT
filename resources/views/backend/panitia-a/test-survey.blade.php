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
                            <label for="">Calon Mahasantri</label>
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
                            <label for="">Nama Pewawancara Survei</label>
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
                            <label for="keterangan">Tempat Seleksi</label>
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


                    {{-- Kriteria Pendapatan --}}
                    <div class="container ">
                        <div class="card">
                            <div class="bg-info">
                                <h6 class="text-center mt-2">Kelayakan Pendapatan Keluarga</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Surat Keterangan Tidak Mampu (SKTM) Dari Sekolah/Kelurahan/DKM</label>
                                <div>
                                    <select name="sktm" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Ya, Saya Berhak Menerima Bantuan</option>
                                        <option value="0">TidaK, Saya Sudah Mampu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_sktm" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
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
                            <div class="form-group col-md-12">
                                <label>Apakah Yang Bersangkutan Dan Keluarga Saat Ini Sedang Mengikuti Program Serupa
                                    Dari Lembaga Lain?</label>
                                <div>
                                    <select name="progbeasiswa" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="0">Ya, Saya Mengikuti Program Lainnya.</option>
                                        <option value="10">Tidak, Saya Tidak Mengikuti Program Lainnya.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_progbea" class="form-control" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Apakah Yang Bersangkutan Mendapat Izin Dari Orang Tua Untuk Mengikuti Beasiswa
                                    Pendidikan Pesantren PeTIK Jombang?</label>
                                <div>
                                    <select name="izinbeasiswa" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Ya, Saya Siap Mengikuti Program Beasiswa PeTIK Jombang
                                        </option>
                                        <option value="0">Tidak, Saya Mengundurkan Diri Dari Program Beasiswa PeTIK
                                            Jombang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="orm-group col-md-12">
                                <label>Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_izinbeasiswa" class="form-control" cols="4" rows="4"></textarea>
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
                            <div class="form-group col-md-12">
                                <label>Status Dalam Keluarga</label>
                                <div>
                                    <select name="statuskel" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Anak Asuh (Panti)</option>
                                        <option value="10">Keponakan</option>
                                        <option value="10">Anak Tiri</option>
                                        <option value="10">Anak Angkat</option>
                                        <option value="10">Anak Kandung</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_statuskel" class="form-control" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Pendidikan Terakhir Kepala Keluarga</label>
                                <div>
                                    <select name="pendkel" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Tidak Sekolah</option>
                                        <option value="10">Sekolah Dasar</option>
                                        <option value="10">Sekolah Menengah Pertama</option>
                                        <option value="10">Sekolah Menengah Atas / Sekolah Menengah Kejuruan / Madrasah
                                            Aliyah</option>
                                        <option value="0">Diploma (D1/D2/D3/D4)</option>
                                        <option value="0">Strata-1 (S1)</option>
                                        <option value="0">Strata-2 (S2)</option>
                                        <option value="0">Strata-3 (S2)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_pendkel" class="form-control" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Usia Program Pendidikan Kepala Keluarga</label>
                                <div>
                                    <select name="usiapend" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">
                                            < 17 Tahun</option> 
                                        <option value="5">17 Tahun</option>
                                        <option value="5">18 Tahun</option>
                                        <option value="0">19 Tahun</option>
                                        <option value="0">20 Tahun</option>
                                        <option value="0">21 Tahun</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_usiapend" class="form-control" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Kondisi Kesehatan Kepala Keluarga</label>
                                <div>
                                    <select name="kesehatankel" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Sakit Menahun</option>
                                        <option value="10">Sakit Tua(Manula)</option>
                                        <option value="10">Perawatan</option>
                                        <option value="5">Sehat Dan Tidak Bekerja</option>
                                        <option value="5">Sehat Dan Bekerja</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_kesehatankel" class="form-control" id="" cols="4"
                                    rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Jenis Pekerjaan Kepala Keluarga</label>
                                <div>
                                    <select name="jenispekrj" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Serabutan</option>
                                        <option value="10">Pedagang Kecil</option>
                                        <option value="10">Karyawan, Gaji Dibawah UMR</option>
                                        <option value="10">Karyawan/Honorer/ Namun Pendapatan Dibawah UMR</option>
                                        <option value="0">PNS dan Jabatan Terpandang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_jenispekrj" class="form-control" id="" cols="4"
                                    rows="4"></textarea>
                            </div>
                        </div>
                    </div><br>

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
                            <div class="form-group col-md-12">
                                <label>Status</label>
                                <div>
                                    <select name="statusrmh" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Tuna Wisma</option>
                                        <option value="10">Menumpang</option>
                                        <option value="10">Mengontrak</option>
                                        <option value="5">Milik Keluarga</option>
                                        <option value="5">Milik Sendiri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_statusrmh" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Luas</label>
                                <div>
                                    <select name="luasrmh" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Sangat Kecil</option>
                                        <option value="10">Kecil 3 x 3 Meter</option>
                                        <option value="10">Kecil 4 x 4 Meter</option>
                                        <option value="0">Tipe 29</option>
                                        <option value="0">Tipe 36</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_luasrmh" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Dinding</label>
                                <div>
                                    <select name="dindingrmh" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Kardus/Kertas</option>
                                        <option value="10">Bilik Bambu Atau Sejenisnya</option>
                                        <option value="5">Alumunium Atau Sejenisnya</option>
                                        <option value="5">Semi Tembok</option>
                                        <option value="5">Tembok</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_dindingrmh" class="form-control" id="" cols="4"
                                    rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Atap</label>
                                <div>
                                    <select name="ataprmh" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Rumbia, Ijuk Atau Sejenisnya</option>
                                        <option value="10">Asbes</option>
                                        <option value="0">Alumunium</option>
                                        <option value="0">Genteng Metal</option>
                                        <option value="10">Genteng Tanah Liat</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_ataprmh" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Lantai</label>
                                <div>
                                    <select name="lantairmh" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Tanah</option>
                                        <option value="10">Panggung</option>
                                        <option value="10">Semen</option>
                                        <option value="0">Keramik</option>
                                        <option value="0">Keramik Dan List Keramik</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_lantairmh" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Alat Masak</label>
                                <div>
                                    <select name="alatmsk" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Kayu Bakar</option>
                                        <option value="10">Kompor Minyak</option>
                                        <option value="10">Kompor Gas 3 Kg</option>
                                        <option value="0">Kompor Gas 3 Kg Sebanyak 2 Buah (Untuk Usaha)</option>
                                        <option value="0">Kompor Gas 3 Kg Sebanyak 3 Buah (Untuk Usaha)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_alatmsk" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Perabotan</label>
                                <div>
                                    <select name="perabotan" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Lemari, Kursi, Meja Maksimal 3 Buah</option>
                                        <option value="0">Lemari, Kursi, Meja Maksimal 4-7 Buah</option>
                                        <option value="0">Lemari, Kursi, Meja Maksimal 8-11 Buah</option>
                                        <option value="0">Lemari, Kursi, Meja Maksimal 12-15 Buah</option>
                                        <option value="0">Lemari, Kursi, Meja Maksimal > 16 Buah</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_perabotan" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Sumber Air</label>
                                <div>
                                    <select name="sumberair" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Sumur Bersama, Umum</option>
                                        <option value="10">Sumur Sendiri</option>
                                        <option value="10">Sumur Dan Pompa Air</option>
                                        <option value="0">PDAM Dan Pompa Air</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_sumberair" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>MCK</label>
                                <div>
                                    <select name="mck" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Sungai Atau Jamban Terbuka</option>
                                        <option value="10">MCK Umum Dan Tidak Layak</option>
                                        <option value="10">MCK Umum Dan Layak</option>
                                        <option value="10">Milik Sendiri Dan Kurang Layak</option>
                                        <option value="5">Milik Sendiri Dan Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_mck" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Penerangan</label>
                                <div>
                                    <select name="penerangan" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Tidak Ada Listrik</option>
                                        <option value="10">Listrik Bersama Rumah Lainnya</option>
                                        <option value="10">Listrik Instalasi Sendiri 450 Watt</option>
                                        <option value="5">Listrik Instalasi Sendiri 900 Watt</option>
                                        <option value="0">Listrik Instalasi Sendiri 1300 Watt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_penerangan" class="form-control" id="" cols="4"
                                    rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Lokasi Rumah</label>
                                <div>
                                    <select name="lokasirmh" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Daerah 3T (Terdepan, Terluar, Tertinggal)</option>
                                        <option value="10">Daerah Kumuh</option>
                                        <option value="10">Perdesaan Jauh Dari Kota</option>
                                        <option value="5">Perdesaan Dekat Perkotaan</option>
                                        <option value="0">Perumahan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_lokasirmh" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Tata Letak Rumah</label>
                                <div>
                                    <select name="tataletak" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Berantakan</option>
                                        <option value="5">50% Teratur</option>
                                        <option value="5">70% Teratur</option>
                                        <option value="5">> 80% Teratur</option>
                                        <option value="5">Tidak Ada Ruangan Yang Berantakan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_tataletak" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Kepemilikan Tanah</label>
                                <div>
                                    <select name="miliktanah" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Milik Orang Lain</option>
                                        <option value="10">Milik Pemerintah (Hanya Numpang)</option>
                                        <option value="10">Milik Keluarga Tetapi Bukan Orang Tua</option>
                                        <option value="10">Milik Orang Tua</option>
                                        <option value="5">Milik Sendiri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_miliktanah" class="form-control" id="" cols="4"
                                    rows="4"></textarea>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label>Kepemilikan Harta Tidak Bergerak</label>
                                <div>
                                    <select name="harta" class="custom-select" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 10X UMK)
                                        </option>
                                        <option value="0">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 20X UMK)
                                        </option>
                                        <option value="0">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 30X UMK)
                                        </option>
                                        <option value="0">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 40X UMK)
                                        </option>
                                        <option value="0">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 50X UMK)
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <label for="">Catatan, Apabila Tidak Ada Tuliskan (-)</label>
                                <textarea name="note_harta" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                   
                    <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                        <button type="submit"
                            class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Keputusan PMB
                        </button>
                        <a class="btn btn-success btn-sm-2 px-3 mb-2 mb-lg-0" href="{{ route('test-survey.create') }}">
                            <i class="fa-solid fa-arrows-rotate"></i>&nbsp;Refresh
                        </a>
                        
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
