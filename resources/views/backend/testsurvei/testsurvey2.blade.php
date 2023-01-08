@extends('backend.index')
@section('content')


<div class="content-wrapper">

    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">

                <h4 class="text-center">Tes Survei Calon Mahasantri</h4>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Formulir Assesmen, Penerima Manfaat Beasiswa Pesantren PeTIK Jombang</h3>
            </div>
            <div class="card-body">

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
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Ya, Saya Berhak Menerima Bantuan</option>
                                    <option value="30">TidaK, Saya Sudah Mampu</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>



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
                            <label>Apakah Yang Bersangkutan Dan Keluarga Saat Ini Sedang Mengikuti Program Serupa Dari
                                Lembaga Lain?</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="30">Ya, Saya Mengikuti Program Lainnya.</option>
                                    <option value="80">Tidak, Saya Tidak Mengikuti Program Lainnya.</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Apakah Yang Bersangkutan Mendapat Izin Dari Orang Tua Untuk Mengikuti Beasiswa
                                Pendidikan Pesantren PeTIK Jombang?</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Ya, Saya Siap Mengikuti Program Beasiswa PeTIK Jombang</option>
                                    <option value="30">Tidak, Saya Mengundurkan Diri Dari Program Beasiswa PeTIK Jombang
                                    </option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>





                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Indentitas Mustahiq</h6>

                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Status Dalam Keluarga</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Anak Asuh (Panti)</option>
                                    <option value="80">Keponakan</option>
                                    <option value="80">Anak Tiri</option>
                                    <option value="80">Anak Angkat</option>
                                    <option value="80">Anak Kandung</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Pendidikan Terakhir Kepala Keluarga</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Tidak Sekolah</option>
                                    <option value="80">Sekolah Dasar</option>
                                    <option value="80">Sekolah Menengah Pertama</option>
                                    <option value="80">Sekolah Menengah Atas / Sekolah Menengah Kejuruan / Madrasah
                                        Aliyah</option>
                                    <option value="50">Diploma (D1/D2/D3/D4)</option>
                                    <option value="60">Strata-1 (S1)</option>
                                    <option value="70">Strata-2 (S2)</option>
                                    <option value="50">Strata-3 (S2)</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Usia Program Pendidikan Kepala Keluarga</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">17 Tahun</option>
                                    <option value="50">18 Tahun</option>
                                    <option value="30">19 Tahun</option>
                                    <option value="30">20 Tahun</option>
                                    <option value="30">21 Tahun</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Kondisi Kesehatan Kepala Keluarga</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Sakit Menahun</option>
                                    <option value="80">Sakit Tua(Manula)</option>
                                    <option value="80">Perawatan</option>
                                    <option value="80">Sehat Dan Tidak Bekerja</option>
                                    <option value="80">Sehat Dan Bekerja</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Jenis Pekerjaan Kepala Keluarga</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Serabutan</option>
                                    <option value="80">Pedagang Kecil</option>
                                    <option value="80">Karyawan, Gaji Dibawah UMR</option>
                                    <option value="80">Karyawan/Honorer/ Namun Pendapatan Dibawah UMR</option>



                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>




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
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Tuna Wisma</option>
                                    <option value="80">Menumpang</option>
                                    <option value="80">Mengontrak</option>
                                    <option value="80">Milik Keluarga</option>
                                    <option value="80">Milik Sendiri</option>



                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Luas</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Sangat Kecil</option>
                                    <option value="80">Kecil 3 x 3 Meter</option>
                                    <option value="80">Kecil 4 x 4 Meter</option>
                                    <option value="80">Tipe 29</option>
                                    <option value="80">Tipe 36</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>



                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Dinding</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Kardus/Kertas</option>
                                    <option value="80">Bilik Bambu Atau Sejenisnya</option>
                                    <option value="80">Alumunium Atau Sejenisnya</option>
                                    <option value="80">Semi Tembok</option>
                                    <option value="80">Tembok</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Atap</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Rumbia, Ijuk Atau Sejenisnya</option>
                                    <option value="80">Asbes</option>
                                    <option value="80">Alumunium</option>
                                    <option value="80">Genteng Metal</option>
                                    <option value="80">Genteng, Genteng Keramik</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Lantai</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Tanah</option>
                                    <option value="80">Panggung</option>
                                    <option value="80">Semen</option>
                                    <option value="80">Keramik</option>
                                    <option value="80">Keramik Dan List Keramik</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Alat Masak</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Kayu Bakar</option>
                                    <option value="80">Kompor Minyak</option>
                                    <option value="80">Kompor Gas 3 Kg</option>
                                    <option value="50">Kompor Gas 3 Kg Sebanyak 2 Buah (Untuk Usaha)</option>
                                    <option value="50">Kompor Gas 3 Kg Sebanyak 3 Buah (Untuk Usaha)</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Perabotan</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Lemari, Kursi, Meja Maksimal 3 Buah</option>
                                    <option value="60">Lemari, Kursi, Meja Maksimal 4-7 Buah</option>
                                    <option value="50">Lemari, Kursi, Meja Maksimal 8-11 Buah</option>
                                    <option value="10">Lemari, Kursi, Meja Maksimal 12-15 Buah</option>
                                    <option value="10">Lemari, Kursi, Meja Maksimal > 16 Buah</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Sumber Air</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Sumur Bersama, Umum</option>
                                    <option value="60">Sumur Sendiri</option>
                                    <option value="50">Sumur Dan Pompa Air</option>
                                    <option value="10">PDAM Dan Pompa Air</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>



                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>MCK</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Sungai Atau Jamban Terbuka</option>
                                    <option value="80">MCK Umum Dan Tidak Layak</option>
                                    <option value="50">MCK Umum Dan Layak</option>
                                    <option value="50">Milik Sendiri Dan Kurang Layak</option>
                                    <option value="50">Milik Sendiri Dan Layak</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Penerangan</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Tidak Ada Listrik</option>
                                    <option value="80">Listrik Bersama Rumah Lainnya</option>
                                    <option value="80">Listrik Instalasi Sendiri 450 Watt</option>
                                    <option value="50">Listrik Instalasi Sendiri 900 Watt</option>
                                    <option value="50">Listrik Instalasi Sendiri 1300 Watt</option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Lokasi Rumah</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Daerah 3T (Terdepan, Terluar, Tertinggal)</option>
                                    <option value="80">Daerah Kumuh</option>
                                    <option value="80">Perdesaan Jauh Dari Kota</option>
                                    <option value="50">Perdesaan Dekat Perkotaan</option>
                                    <option value="10">Perumahan</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Tata Letak Rumah</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Berantakan</option>
                                    <option value="80">50% Teratur</option>
                                    <option value="80">70% Teratur</option>
                                    <option value="50">> 80% Teratur</option>
                                    <option value="10">Tidak Ada Ruangan Yang Berantakan</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Kepemilikan Tanah</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Milik Orang Lain</option>
                                    <option value="80">Milik Pemerintah (Hanya Numpang)</option>
                                    <option value="80">Milik Keluarga Tetapi Bukan Orang Tua</option>
                                    <option value="80">Milik Orang Tua</option>
                                    <option value="20">Milik Sendiri</option>





                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Kepemilikan Harta Tidak Bergerak</label>
                            <div>
                                <select id="berkas" name="berkas" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="80">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 10X UMK)
                                    </option>
                                    <option value="70">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 20X UMK)
                                    </option>
                                    <option value="20">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 30X UMK)
                                    </option>
                                    <option value="20">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 40X UMK)
                                    </option>
                                    <option value="20">Tanah, Kebun, Sawah, Dan Lainnya (Perkiraan Maksimal 50X UMK)
                                    </option>




                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <br>




                <!-- Tutup Formulir Keseluruhan -->

                <div class="col-md-12">
                    <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg"
                        href="{{ url('/admin4') }}">Nilai</a>
                </div>





            </div>
        </div>
    </div>








</div>

@endsection
