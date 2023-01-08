@extends('backend.index')
@section('content')


<div class="content-wrapper">

    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">

                <h4 class="text-center">Tes Tanya Jawab Calon Mahasantri</h4>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Rekam Jejak Lisan</h3>
            </div>
            <div class="card-body">

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Visi Misi</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Visi Dan Misi Hidup Pribadi</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="50">Kebingungan Untuk Menentukan Visi Dan Misi</option>
                            <option value="70">Mampu Merumuskan Visi Dan Misinya, Namun Jangkauan Sempit</option>
                            <option value="80">Mampu Merumuskan Visi Dan Misinya, Namun Jangkauan Luas</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Komitmen</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Sanksi Apa Yang Menurut Anda Paling Berat Saat Anda Menerima Hukuman Di
                        Sekolah/Pesantren?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="50">Seringkali Mendapatkan Sanksi/Hukuman Dari Sekolah/Pesantren.</option>
                            <option value="70">Kadang-kadang Mendapatkan Sanksi/Hukuman Dari Sekolah/Pesantren.</option>
                            <option value="80">Jarang Sekali Mendapatkan Sanksi/Hukuman Dari Sekolah/Pesantren.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>



                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Tanggung Jawab</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Realisasi Tanggung Jawab Apa Yang Pernah Anda Lakukan?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="50">Tidak Pernah Menjadi Ketua/Pemimpin Selama Di
                                Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                            <option value="70">Pernah Sekali Saja Menjadi Ketua/Pemimpin Selama Di
                                Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                            <option value="80">Sering Sekali Menjadi Ketua/Pemimin Selama Di
                                Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Kejujuran</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Pernah Anda Mendapatkan Amanah Sebagai (Bendahara Atau Jabatan Lainnya) Untuk
                        Menjaga Keutuhan Materi Atau Barang?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="50">Tidak Pernah Menjadi (Bendahara Atau Jabatan Lainnya) Selama Di
                                Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                            <option value="70">Pernah Sekali Saja Menjadi (Bendahara Atau Jabatan Lainnya) Selama Di
                                Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                            <option value="80">Sering Sekali Menjadi (Bendahara Atau Jabatan Lainnya) Selama Di
                                Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Pekerja Keras</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Ketika Anda Mendapatkan Tugas Dari Seseorang, Apa Yang Anda Lakukan?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Tidak Peduli Dalam Menjalankan Tugas Dari Seseorang, Karena Saya Memiliki
                                Tugas Lain Yang Lebih Penting.</option>
                            <option value="50">Semampu Saya Dalam Menjalankan Tugas Dari Seseorang.</option>
                            <option value="80">Sangat Antusias Untuk Menjalankan Tugas Dari Seseorang Walaupun Saya
                                Memiliki Tugas Lain Yang Saya Kerjakan Secara Optimal.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Bekerjasama</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Apa Yang Memudahkan Anda Dalam Mengerjakan Tugas Pekarjaan?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Jarang Sekali Melakukan Komunikasi/Kordinasi Dan Peduli Terhadap Sesama
                                Teman/Rekan Kerja.</option>
                            <option value="70">Sering Melakukan Komunikasi/Kordinasi Dan Peduli Terhadap Sesama
                                Teman/Rekan Kerja.</option>
                            <option value="80">Sangat Antusias Untuk Melakukan Komunikasi/Kordinasi Dan Peduli Terhadap
                                Sesama Teman/Rekan Kerja.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Kemandirian</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Pernahkah Anda Menginginkan Suatu Barang Atau Hal Lainnya Dengan Usahamu
                        Sendiri?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Masih Sering Mendapatkan Bantuan Dari Keluarga/Kerabat.</option>
                            <option value="70">Sesekali Mendapatkan Bantuan Dari Keluarga/Kerabat.</option>
                            <option value="80">Tidak Pernah Mendapatkan Bantuan Dari Keluarga/Kerabat.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Tolong Menolong</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Pernahkah Anda Melihat Orang Lain Terjatuh Dang Bersangkutan Terduduk Merasa
                        Kesakitan. Silahkan Anda Ceritakan</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Acuh Tak Acuh Terhadap Penderita Lalu Meningkalnya.</option>
                            <option value="70">Biasa Saja Terhadap Penderita Orang Lain.</option>
                            <option value="80">Berempati Tinggi Untuk Menolognya/Menghiburnya Dengan Apa Yang Dialami
                                Oleh Penderita.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Peduli Lingkungan/Sosial</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Pernahkah Anda Melihat Warga Sekitar Rumah Kamu Melakukan Kerja Bakti,
                        Silahkan Anda Ceritakan</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Tidak Pernah Melihat Warga Disekitar Rumah Saya Dalam Kegiatan Kerja
                                Bakti.</option>
                            <option value="70">Pernah Ikut Namun Tidak Banyak Membantu</option>
                            <option value="80">Sangat Sering Mengikuti Kerja Bakti Di Lingkungan Kami.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Pembelajar</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Jika Anda Memulai Menyalakan Media Elektronik/Komunikasi, Informasi Apa Yang
                        Anda Cari?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Lebih Tertarik Dengan Hiburan.</option>
                            <option value="50">Apa Saja Tertarik Yang Muncul Pada Beranda Media Elektronik/Komunikasi.
                            </option>
                            <option value="80">Menyukai Informasi Yang Meningkatkan Mutu Saya Pribadi.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Menghargai Prestasi</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Pernahkah Anda Melihat Orang Lain (Teman, Saudara, Dsb) Yang Meraih Prestasi,
                        Coba Ceritakan?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Tidak Tertarik Untuk Memberikan Ucapan Atas Keberhasilan Seseorang.
                            </option>
                            <option value="50">Biasa Saja Dalam Memberikan Ucapan Atas Keberhasilan Seseorang.</option>
                            <option value="80">Sangat Senang Sekali Dan Sangat Terpacu Untuk Lebih Baik Seperti Dia.
                            </option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Kepercayaan Diri</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Mengapa Anda Berhasil? Siapa Yang Paling Banyak Berkontribusi Atas
                        Keberhasilan Anda?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="30">Keberhasilan Saya Pribadi Disebabkan Karena Kontribusi Orang Lain.
                            </option>
                            <option value="50">Keberhasilan Disebabkan Karena Saya Pribadi Dan Bantuan Orang Lain.
                            </option>
                            <option value="80">Keberhasilan Disebabkan Karena Saya Pribadi Yang Selalu Didukung Orang
                                Lain Untuk Lebih Baik.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Demokratis</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Ketika Ada Teman Anda Yang Sedang Menyampaikan Pendapat/Usulan Yang Tidak
                        Sepemikiran Dengan Anda, Apa Yang Anda Lakukan?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Langsung Memotong/Menyela Pendapat/Usulan Pihak Lain Yang Tidak
                                Sepemikiran Dengan Anda.</option>
                            <option value="50">Mendengarkan Dengan Baik Lalu Memotong/Menyela Pendapat/Usulan Pihak Lain
                                Yang Tidak Sepemikiran Dengan Anda.</option>
                            <option value="80">Mendengarkan Dengan Baik Lalu Memberikan Argumentasi Yang Selaras.
                            </option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Disiplin Waktu</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Bila Anda Diundang Rapat Penting, Dalam Surat Tersebut Tertera Pukul 08.00.
                        Apa Yang Anda Lakukan? </label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Selalu Telat Menghandiri Undangan Rapat Tanpa Ada Udzur Syar'i.</option>
                            <option value="50">Sesekali Telat Menghandiri Undangan Rapat Tanpa Ada Udzur Syar'i.
                            </option>
                            <option value="80">Datang Lebih Awal Untuk Mempersiapkan Hal Yang Diperlukan.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Menjaga Nama Baik</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Menurut Anda, Sikap Dan Perilaku Terbaik Yang Seperti Apa Saat Anda Menjalin
                        Hubungan Dengan Masyarakat? Uraikan Pendapat Anda?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Belum Bisa Menguraikan Pendapat Yang Berhubungan Dengan Adab Masyarakat
                                Dengan Baik.</option>
                            <option value="50">Bisa Menguraikan Pendapat Yang Berhubungan Dengan Adab Masyarakat Dengan
                                Cukup Baik.</option>
                            <option value="80">Bisa Menguraikan Pendapat Yang Berhubungan Dengan Adab Masyarakat Dengan
                                Baik.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Mengucapkan Salam Dan Ucapan Terima Kasih</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Calon Mahasantri Mengucapkan Salam Saat Masuk Dan Keluar Ke Dan Dari Ruang
                        Wawancara?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Terlihat Kaku Dan Ragu ketika Hendak Mengucapkan Salam Dan Berjabat
                                Tangan.</option>
                            <option value="50">Berjabat Tangan Dan Mengucapkan Salam, Namun Masih Disertai Dengan Rasa
                                Canggung.</option>
                            <option value="80">Secara Reflek Dan Alami Langsung Berjabat Tangan, Mengucapkan Salam, Dan
                                Diakhiri Dengan Ucapan Terimkasih. </option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>


                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Motivasi</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Apa Yang Melatar Belakangin Anda Mendaftarkan Diri Di Pesantren PeTIK Jombang?
                        Apakah Dengan Dorongan Keluarga Atau Niat Anda Pribadi?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Mendaftarkan Di Pesantren PeTIK Jombang Ini Dengan Dorongan Orang Lain
                                (Orang Tua/Saudara/Teman).</option>
                            <option value="50">Mendaftarkan Di Pesantren PeTIK Jombang Ini Atas Dorongan Orang Lain
                                (Orang Tua/Saudara/Teman) Dan Diri Sendiri.</option>
                            <option value="80">Mendaftarkan Di Pesantren PeTIK Jombang Ini Lebih Banyak Oleh Dorongan
                                Diri Sendiri, Selebihnya Dari Orang Lain.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Mengenai Barang-Barang Yang Bersifat Polutan</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Manfaat Rokok Bagi Seseorang? Merek Rokok Terkenal Yang Paling Diminati Oleh
                        Banyak Kebanyakan Orang? Apa Hukum Syari'at Merokok?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Masih Merokok, Alasan Hukum Syariah Merokok Adalah Makhruh Dan Memiliki
                                Manfaat Untuk Ketenangan.</option>
                            <option value="50">Pernah Merokok, Namun Sudah Berhenti Merokok Lama Sekali.</option>
                            <option value="80">Tidak Pernah Merokok Sama Sekali.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>


                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Penggunaan Barang-Barang Haram Dan Terlarang</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Sebutkan Jenis Narkoba Dan Minuman Keras Yang Banyak Beredar Di Indonesia?
                        Adakah Kerabat Atau Teman Dekat Yang Menggunakan Narkoba Atau Minuman Keras Hingga Saat Ini?
                        Sejauh Mana Anda Mengenali Cara Peredaran Narkoba Atau Minuman Keras?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Pernah Menggunakan Narkoba Atau Mencicipi Minuman Keras, Namun Sudah
                                Berhenti Mengkonsumsinya.</option>
                            <option value="50">Tidak Pernah Menggunakan Narkoba, Namun Pernah Mengkonsumsi Minuman
                                Keras.</option>
                            <option value="80">Tidak Pernah Menggunakan Sama Sekali.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Riwayat Penyakit Yang Diderita</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Apakah Anda Memiliki Riwayat Penyakit? Sudahkah Anda Dirawat Di Rumah
                        Sakit?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Pernah Diagnosa Mengidap Penyakit Berat Dan Menular Serta Sempat Dirawat
                                Dirumah Sakit.</option>
                            <option value="50">Pernah Diagnosa Mengidap Penyakit Sedang Hingga Berat Dan Menular Serta
                                Sempat Dirawat Dirumah Sakit. Namun Telah Dinyatakan Sembuh Oleh Dokter Yang
                                Menanganinya.</option>
                            <option value="80">Tidak Pernah Menggidap Penyakit Berat Dan Menular.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Cerita Singkat Aktivitas Calon Mahasantri</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Deskripsikan Secara Tulis Aktivitas 3 Bulan Terakhir?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Sedikit Mirip Dengan Wawancara Lisan.</option>
                            <option value="50">Cukup Mirip Dengan Wawancara Lisan.</option>
                            <option value="80">Banyak Kemiripan Dengan Wawancara Lisan.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="container">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Media Komunikasi</h6>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-12">Apakah Anda Memiliki Media Sosial Seperti Whatsapp, Instagram, Facebook, Dan
                        Lainnya?</label>
                    <div class="col-12">
                        <select id="berkas" name="berkas" class="custom-select" required="required">
                            <option value="">-- Pilihan --</option>
                            <option value="10">Hasil Penelusuran Tidak Selaras Dengan Wawancara.</option>
                            <option value="50">Hasil Penelusuran Cukup Selaras Dengan Wawancara.</option>
                            <option value="80">Hasil Penelusuran Selaras Dengan Wawancara.</option>




                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" class="form-control" id="" cols="2" rows="2"></textarea>
                    </div>
                </div>








                <!-- Tutup Formulir Keseluruhan -->

                <div class="col-md-12">
                    <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                        href="{{ url('/admin4') }}">Nilai</a>
                </div>





            </div>
        </div>
    </div>








</div>

@endsection
