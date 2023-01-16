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

    <form action="" method="post">

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
                    

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label>Surat Keterangan Tidak Mampu (SKTM) Dari Sekolah/Kelurahan/DKM</label>
                                <div>
                                    <select id="berkas" name="berkas" class="custom-select" required="required">
                                        <option value="">-- Pilihan --</option>
                                        <option value="10">Ya, Saya Berhak Menerima Bantuan</option>
                                        <option value="0">TidaK, Saya Sudah Mampu</option>
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
                    </div><br></div>



                    <div class="container">
                        <div class="card">

                            <div class="bg-info">

                                <h6 class="text-center mt-2">Dukungan Dalam Menjalankan Program</h6>

                            </div>
                        </div>
                    


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label>Apakah Yang Bersangkutan Dan Keluarga Saat Ini Sedang Mengikuti Program Serupa
                                    Dari Lembaga Lain?</label>
                                <div>
                                    <select id="berkas" name="berkas" class="custom-select" required="required">
                                        <option value="">-- Pilihan --</option>
                                        <option value="0">Ya, Saya Mengikuti Program Lainnya.</option>
                                        <option value="10">Tidak, Saya Tidak Mengikuti Program Lainnya.</option>
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
                                        <option value="10">Ya, Saya Siap Mengikuti Program Beasiswa PeTIK Jombang
                                        </option>
                                        <option value="0">Tidak, Saya Mengundurkan Diri Dari Program Beasiswa PeTIK
                                            Jombang</option>
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
                    </div><br></div>





                    <div class="container">
                        <div class="card">

                            <div class="bg-info">

                                <h6 class="text-center mt-2">Indentitas Mustahiq</h6>

                            </div>
                        </div>
                    


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label>Status Dalam Keluarga</label>
                                <div>
                                    <select id="berkas" name="berkas" class="custom-select" required="required">
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
                                        <option value="10">
                                            < 17 Tahun</option> <option value="5">17 Tahun
                                        </option>
                                        <option value="5">18 Tahun</option>
                                        <option value="5">19 Tahun</option>
                                        <option value="0">20 Tahun</option>
                                        <option value="0">21 Tahun</option>
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
                            <div class="form">
                                <label for="">Catatan</label>
                                <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div><br></div>




                    <div class="container">
                        <div class="card">

                            <div class="bg-info">

                                <h6 class="text-center mt-2">Kondisi Rumah Atau Tempat Tinggal</h6>

                            </div>
                        </div>
                    



                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form mb-3 mb-md-0">
                                <label>Status Rumah</label>
                                <div>
                                    <select id="berkas" name="berkas" class="custom-select" required="required">
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
                                        <option value="10">Kardus/Kertas</option>
                                        <option value="10">Bilik Bambu Atau Sejenisnya</option>
                                        <option value="0">Alumunium Atau Sejenisnya</option>
                                        <option value="5">Semi Tembok</option>
                                        <option value="5">Tembok</option>
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
                                        <option value="10">Sumur Bersama, Umum</option>
                                        <option value="10">Sumur Sendiri</option>
                                        <option value="10">Sumur Dan Pompa Air</option>
                                        <option value="0">PDAM Dan Pompa Air</option>
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
                            <div class="form">
                                <label for="">Catatan</label>
                                <textarea name="" class="form-control" id="" cols="4" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <br></div>




                    <!-- Tutup Formulir Keseluruhan -->



                    <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                        <button type="submit"
                            class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Keputusan Tes Survei
                        </button>

                    </div>

    </form>







</div>
</div>
</div>








</div>

@endsection
