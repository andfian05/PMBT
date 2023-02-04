@extends('backend.panitia-c.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h4 class="text-center">Add Penilaian Tes Tanya Jawab Calon Mahasantri</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
              <div class="card-body">
                <a class="btn btn-success btn-sm-2" href="{{ route('tanya-jawab.index') }}">
                  <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                </a>
              </div>
            </div>
        </div>

        <div class="container"> 
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Penilaian Tes Tanya Jawab Calon Mahasantri, Rekam Jejak Lisan</h3>
                </div>
                <div class="card-body">
                  <form action="{{ route('tanya-jawab.store') }}" method="POST" id="form1" name="form1">
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
                          <label for="">Nama Pewawancara Tes Tanya Jawab</label>
                          <input class="form-control" name="nama_pewawancara" id="" type="text"/>
                        </div>
                      </div>
                      {{-- Tempat dilaksanakannya Seleksi --}}
                      <div class="container">
                        <div class="card">
                          <div class="bg-info">
                            <h6 class="text-center mt-2">Tempat Seleksi Tes Tanya Jawab</h6>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-group">
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
                        <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
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
                                        <input type="text" name="lks_seleksi" placeholder="YBM PLN ..." class="form-control">
                                      </div>
                                      
                                      `;
                                  }
                          }
                        </script>
                        <div class="container">
                          <p id="container"></p>
                        </div>
                      </div>
                      {{-- Rekam Jejak Calon Mahasantri --}}
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
                              <select name="visimisi" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Kebingungan Untuk Menentukan Visi Dan Misi</option>
                                  <option value="5">Mampu Merumuskan Visi Dan Misinya, Namun Jangkauan Sempit</option>
                                  <option value="10">Mampu Merumuskan Visi Dan Misinya, Namun Jangkauan Luas</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_visimisi" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="komitmen" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Seringkali Mendapatkan Sanksi/Hukuman Dari Sekolah/Pesantren.</option>
                                  <option value="5">Kadang-kadang Mendapatkan Sanksi/Hukuman Dari Sekolah/Pesantren.
                                  </option>
                                  <option value="10">Jarang Sekali Mendapatkan Sanksi/Hukuman Dari Sekolah/Pesantren.
                                  </option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_komitmen" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="tanggungjawab" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Tidak Pernah Menjadi Ketua/Pemimpin Selama Di
                                      Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                                  <option value="5">Pernah Sekali Saja Menjadi Ketua/Pemimpin Selama Di
                                      Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                                  <option value="10">Sering Sekali Menjadi Ketua/Pemimin Selama Di
                                      Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_tanggungjwb" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Kejujuran</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Pernah Anda Mendapatkan Amanah Sebagai (Bendahara Atau Jabatan Lainnya)
                              Untuk Menjaga Keutuhan Materi Atau Barang?</label>
                          <div class="col-12">
                              <select name="kejujuran" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Tidak Pernah Menjadi (Bendahara Atau Jabatan Lainnya) Selama Di
                                      Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                                  <option value="5">Pernah Sekali Saja Menjadi (Bendahara Atau Jabatan Lainnya) Selama Di
                                      Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                                  <option value="10">Sering Sekali Menjadi (Bendahara Atau Jabatan Lainnya) Selama Di
                                      Sekolah/Pesantren/Lingkungan Saya Pribadi.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_kejujuran" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Pekerja Keras</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Ketika Anda Mendapatkan Tugas Dari Seseorang, Apa Yang Anda
                              Lakukan?</label>
                          <div class="col-12">
                              <select name="pekerjakeras" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Tidak Peduli Dalam Menjalankan Tugas Dari Seseorang, Karena Saya
                                      Memiliki Tugas Lain Yang Lebih Penting.</option>
                                  <option value="5">Semampu Saya Dalam Menjalankan Tugas Dari Seseorang.</option>
                                  <option value="10">Sangat Antusias Untuk Menjalankan Tugas Dari Seseorang Walaupun Saya
                                      Memiliki Tugas Lain Yang Saya Kerjakan Secara Optimal.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_pekerjakrs" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="bekerjasama" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Jarang Sekali Melakukan Komunikasi/Kordinasi Dan Peduli Terhadap
                                      Sesama Teman/Rekan Kerja.</option>
                                  <option value="5">Sering Melakukan Komunikasi/Kordinasi Dan Peduli Terhadap Sesama
                                      Teman/Rekan Kerja.</option>
                                  <option value="10">Sangat Antusias Untuk Melakukan Komunikasi/Kordinasi Dan Peduli
                                      Terhadap Sesama Teman/Rekan Kerja.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_bekerjasama" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="kemandirian" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Masih Sering Mendapatkan Bantuan Dari Keluarga/Kerabat.</option>
                                  <option value="5">Sesekali Mendapatkan Bantuan Dari Keluarga/Kerabat.</option>
                                  <option value="10">Tidak Pernah Mendapatkan Bantuan Dari Keluarga/Kerabat.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_kemandirian" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Tolong Menolong</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Pernahkah Anda Melihat Orang Lain Terjatuh Dang Bersangkutan Terduduk
                              Merasa Kesakitan. Silahkan Anda Ceritakan</label>
                          <div class="col-12">
                              <select name="tolongmenolong" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Acuh Tak Acuh Terhadap Penderita Lalu Meningkalnya.</option>
                                  <option value="0">Biasa Saja Terhadap Penderita Orang Lain.</option>
                                  <option value="10">Berempati Tinggi Untuk Menolognya/Menghiburnya Dengan Apa Yang
                                      Dialami Oleh Penderita.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_menolong" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="peduli" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Tidak Pernah Melihat Warga Disekitar Rumah Saya Dalam Kegiatan Kerja
                                      Bakti.</option>
                                  <option value="5">Pernah Ikut Namun Tidak Banyak Membantu</option>
                                  <option value="10">Sangat Sering Mengikuti Kerja Bakti Di Lingkungan Kami.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_peduli" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Pembelajar</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Jika Anda Memulai Menyalakan Media Elektronik/Komunikasi, Informasi Apa
                              Yang Anda Cari?</label>
                          <div class="col-12">
                              <select name="pembelajar" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Lebih Tertarik Dengan Hiburan.</option>
                                  <option value="5">Apa Saja Tertarik Yang Muncul Pada Beranda Media
                                      Elektronik/Komunikasi.</option>
                                  <option value="10">Menyukai Informasi Yang Meningkatkan Mutu Saya Pribadi.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_pembelajar" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Menghargai Prestasi</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Pernahkah Anda Melihat Orang Lain (Teman, Saudara, Dsb) Yang Meraih
                              Prestasi, Coba Ceritakan?</label>
                          <div class="col-12">
                              <select name="menghargaiprestasi" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Tidak Tertarik Untuk Memberikan Ucapan Atas Keberhasilan Seseorang.
                                  </option>
                                  <option value="0">Biasa Saja Dalam Memberikan Ucapan Atas Keberhasilan Seseorang.
                                  </option>
                                  <option value="10">Sangat Senang Sekali Dan Sangat Terpacu Untuk Lebih Baik Seperti Dia.
                                  </option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_hargaipres" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="percayadiri" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Keberhasilan Saya Pribadi Disebabkan Karena Kontribusi Orang Lain.
                                  </option>
                                  <option value="5">Keberhasilan Disebabkan Karena Saya Pribadi Dan Bantuan Orang Lain.
                                  </option>
                                  <option value="10">Keberhasilan Disebabkan Karena Saya Pribadi Yang Selalu Didukung
                                      Orang Lain Untuk Lebih Baik.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_pd" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="demokratis" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Langsung Memotong/Menyela Pendapat/Usulan Pihak Lain Yang Tidak
                                      Sepemikiran Dengan Anda.</option>
                                  <option value="0">Mendengarkan Dengan Baik Lalu Memotong/Menyela Pendapat/Usulan Pihak
                                      Lain Yang Tidak Sepemikiran Dengan Anda.</option>
                                  <option value="10">Mendengarkan Dengan Baik Lalu Memberikan Argumentasi Yang Selaras.
                                  </option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_demokratis" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Disiplin Waktu</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Bila Anda Diundang Rapat Penting, Dalam Surat Tersebut Tertera Pukul
                              08.00. Apa Yang Anda Lakukan? </label>
                          <div class="col-12">
                              <select name="disiplinwaktu" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Selalu Telat Menghandiri Undangan Rapat Tanpa Ada Udzur Syar'i.
                                  </option>
                                  <option value="0">Sesekali Telat Menghandiri Undangan Rapat Tanpa Ada Udzur Syar'i.
                                  </option>
                                  <option value="10">Datang Lebih Awal Untuk Mempersiapkan Hal Yang Diperlukan.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_disiplinwkt" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Menjaga Nama Baik</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Menurut Anda, Sikap Dan Perilaku Terbaik Yang Seperti Apa Saat Anda
                              Menjalin Hubungan Dengan Masyarakat? Uraikan Pendapat Anda?</label>
                          <div class="col-12">
                              <select name="menjaganamabaik" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Belum Bisa Menguraikan Pendapat Yang Berhubungan Dengan Adab
                                      Masyarakat Dengan Baik.</option>
                                  <option value="5">Bisa Menguraikan Pendapat Yang Berhubungan Dengan Adab Masyarakat
                                      Dengan Cukup Baik.</option>
                                  <option value="10">Bisa Menguraikan Pendapat Yang Berhubungan Dengan Adab Masyarakat
                                      Dengan Baik.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_jaganmbaik" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="salam" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Terlihat Kaku Dan Ragu ketika Hendak Mengucapkan Salam Dan Berjabat
                                      Tangan.</option>
                                  <option value="5">Berjabat Tangan Dan Mengucapkan Salam, Namun Masih Disertai Dengan
                                      Rasa Canggung.</option>
                                  <option value="10">Secara Reflek Dan Alami Langsung Berjabat Tangan, Mengucapkan Salam,
                                      Dan Diakhiri Dengan Ucapan Terimkasih. </option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_salam" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>


                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Motivasi</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Apa Yang Melatar Belakangin Anda Mendaftarkan Diri Di Pesantren PeTIK
                              Jombang? Apakah Dengan Dorongan Keluarga Atau Niat Anda Pribadi?</label>
                          <div class="col-12">
                              <select name="motivasi" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Mendaftarkan Di Pesantren PeTIK Jombang Ini Dengan Dorongan Orang Lain
                                      (Orang Tua/Saudara/Teman).</option>
                                  <option value="5">Mendaftarkan Di Pesantren PeTIK Jombang Ini Atas Dorongan Orang Lain
                                      (Orang Tua/Saudara/Teman) Dan Diri Sendiri.</option>
                                  <option value="10">Mendaftarkan Di Pesantren PeTIK Jombang Ini Lebih Banyak Oleh
                                      Dorongan Diri Sendiri, Selebihnya Dari Orang Lain.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_motivasi" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Mengenai Barang-Barang Yang Bersifat Polutan</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Manfaat Rokok Bagi Seseorang? Merek Rokok Terkenal Yang Paling Diminati
                              Oleh Banyak Kebanyakan Orang? Apa Hukum Syari'at Merokok?</label>
                          <div class="col-12">
                              <select name="brgpolutan" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Masih Merokok, Alasan Hukum Syariah Merokok Adalah Makhruh Dan
                                      Memiliki Manfaat Untuk Ketenangan.</option>
                                  <option value="0">Pernah Merokok, Namun Sudah Berhenti Merokok Lama Sekali.</option>
                                  <option value="10">Tidak Pernah Merokok Sama Sekali.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_brgpolutan" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>


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
                              <select name="brgharam" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Pernah Menggunakan Narkoba Atau Mencicipi Minuman Keras, Namun Sudah
                                      Berhenti Mengkonsumsinya.</option>
                                  <option value="0">Tidak Pernah Menggunakan Narkoba, Namun Pernah Mengkonsumsi Minuman
                                      Keras.</option>
                                  <option value="10">Tidak Pernah Menggunakan Sama Sekali.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_brgharam" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="riwayatpenyakit" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="5">Pernah Diagnosa Mengidap Penyakit Berat Dan Menular Serta Sempat
                                      Dirawat Dirumah Sakit.</option>
                                  <option value="5">Pernah Diagnosa Mengidap Penyakit Sedang Hingga Berat Dan Menular
                                      Serta Sempat Dirawat Dirumah Sakit. Namun Telah Dinyatakan Sembuh Oleh Dokter Yang
                                      Menanganinya.</option>
                                  <option value="10">Tidak Pernah Menggidap Penyakit Berat Dan Menular.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_rytpenyakit" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

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
                              <select name="ceritasingkat" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Tidak Mirip Dengan Wawancara Lisan.</option>
                                  <option value="5">Sedikit Mirip Dengan Wawancara Lisan.</option>
                                  <option value="5">Cukup Mirip Dengan Wawancara Lisan.</option>
                                  <option value="10">Banyak Kemiripan Dengan Wawancara Lisan.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_crtsingkat" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Media Komunikasi</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12">Apakah Anda Memiliki Media Sosial Seperti Whatsapp, Instagram, Facebook,
                              Dan Lainnya?</label>
                          <div class="col-12">
                              <select name="medkom" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="0">Hasil Penelusuran Tidak Selaras Dengan Wawancara.</option>
                                  <option value="5">Hasil Penelusuran Cukup Selaras Dengan Wawancara.</option>
                                  <option value="10">Hasil Penelusuran Selaras Dengan Wawancara.</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Catatan</label>
                              <textarea name="note_medkom" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>
                      <!-- Tutup Formulir Keseluruhan -->

                      <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                          <button type="submit"
                              class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                              style="margin-right: 10px;">Keputusan Tes Tanya Jawab
                          </button>
                      </div>
                  </form>
                  <!-- Tutup Formulir Keseluruhan -->
                </div>
            </div>
        </div>
    </div>
@endsection