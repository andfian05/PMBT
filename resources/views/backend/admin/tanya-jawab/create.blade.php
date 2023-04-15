@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h5 class="text-center">Tambah Data Tes Tanya Jawab Calon Mahasantri</h5>
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
                          <label for="" class="form-label text-justify" style="color : #0E8388">Nama Calon Mahasantri <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label for="" class="form-label text-justify" style="color : #0E8388">Nama Pewawancara Tes Tanya Jawab <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <input class="form-control" name="nama_pewawancara" id="" type="text"/>
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
                          <label for="keterangan" class="form-label text-justify" style="color : #0E8388">Tempat Seleksi <sup class="text-danger" font-size="20px">* (Wajib)</sup></label> 
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
                      </div><br>

                      {{-- Rekam Jejak Calon Mahasantri --}}
                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Visi Misi</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Visi Dan Misi Hidup Pribadi <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="visimisi" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Baik dalam merumuskan Visi dan Misi</option>
                                  <option value="3">Baik dalam merumuskan Visi dan Misi</option>
                                  <option value="2">Cukup Baik dalam merumuskan Visi dan Misi</option>
                                  <option value="1">Kurang Baik dalam merumuskan Visi dan Misi</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan,Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Sanksi Apa Yang Menurut Anda Paling Berat Saat Anda Menerima Hukuman Di
                              Sekolah/Pesantren? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="komitmen" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Tidak Pernah mendapatkan Sanksi/Hukuman dari Sekolah/Pesantren</option>
                                  <option value="3">Pernah mendapatkan Sanksi/Hukuman dari Sekolah/Pesantren</option>
                                  <option value="2">Sering mendapatkan Sanksi/Hukuman dari Sekolah/Pesantren</option>
                                  <option value="1">Sangat Sering mendapatkan Sanksi/Hukuman dari Sekolah/Pesantren</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Realisasi Tanggung Jawab Apa Yang Pernah Anda Lakukan? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="tanggungjawab" class="custom-select" required>
                                <option value="">-- Pilihan --</option>
                                <option value="4">Sangat Sering menjadi Ketua/Pemimin selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                                <option value="3">Sering menjadi Ketua/Pemimpin selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                                <option value="2">Pernah menjadi Ketua/Pemimpin selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                                <option value="1">Tidak Pernah menjadi Ketua/Pemimpin selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Pernah Anda Mendapatkan Amanah Sebagai (Bendahara Atau Jabatan Lainnya)
                              Untuk Menjaga Keutuhan Materi Atau Barang? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="kejujuran" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Sering menjadi (Bendahara Atau Jabatan Lainnya) selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                                  <option value="3">Sering menjadi (Bendahara Atau Jabatan Lainnya) selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                                  <option value="2">Pernah menjadi (Bendahara Atau Jabatan Lainnya) selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                                  <option value="1">Tidak Pernah menjadi (Bendahara Atau Jabatan Lainnya) selama di Sekolah/Pesantren/Lingkungan Saya Pribadi</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan,Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Ketika Anda Mendapatkan Tugas Dari Seseorang, Apa Yang Anda
                              Lakukan? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="pekerjakeras" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Antusias untuk menjalankan Tugas dari seseorang walaupun saya memiliki Tugas lain yang saya kerjakan secara optimal</option>
                                  <option value="3">Semampu saya dalam menjalankan Tugas dari seseorang</option>
                                  <option value="2">Biasa Saja dalam menjalankan Tugas dari seseorang</option>
                                  <option value="1">Tidak Peduli dalam menjalankan Tugas dari seseorang, karena saya memiliki Tugas lain yang lebih penting</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Apa Yang Memudahkan Anda Dalam Mengerjakan Tugas Pekerjaan? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="bekerjasama" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Antusias untuk melakukan Komunikasi/Kordinasi dan peduli terhadap sesama Teman/Rekan Kerja</option>
                                  <option value="3">Sering melakukan Komunikasi/Kordinasi dan peduli terhadap sesama Teman/Rekan Kerja</option>
                                  <option value="2">Jarang Sekali melakukan Komunikasi/Kordinasi dan peduli terhadap sesama Teman/Rekan Kerja</option>
                                  <option value="1">Tidak Pernah melakukan Komunikasi/Kordinasi dan Tidak Peduli terhadap sesama Teman/Rekan Kerja</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Pernahkah Anda Menginginkan Suatu Barang Atau Hal Lainnya Dengan Usahamu
                              Sendiri? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="kemandirian" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Tidak Pernah mendapatkan Bantuan dari Keluarga/Kerabat</option>
                                  <option value="3">Sesekali mendapatkan Bantuan dari Keluarga/Kerabat</option>
                                  <option value="2">Sering mendapatkan Bantuan dari Keluarga/Kerabat</option>
                                  <option value="1">Sangat Sering mendapatkan Bantuan dari Keluarga/Kerabat</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Pernahkah Anda Melihat Orang Lain Terjatuh Dang Bersangkutan Terduduk
                              Merasa Kesakitan. Silahkan Anda Ceritakan <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="tolongmenolong" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Berempati Tinggi untuk Menolognya/Menghiburnya dengan apa yang dialami oleh Penderita</option>
                                  <option value="3">Semampunya untuk membantu Penderitaan orang lain</option>
                                  <option value="2">Biasa Saja terhadap Penderitaan orang lain</option>
                                  <option value="1">Acuh Tak Acuh terhadap Penderita lalu meninggalkannya</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Pernahkah Anda Melihat Warga Sekitar Rumah Kamu Melakukan Kerja Bakti,
                              Silahkan Anda Ceritakan <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="peduli" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Sering mengikuti Kerja Bakti di lingkungan</option>
                                  <option value="3">Sering mengikuti Kerja Bakti di lingkungan</option>
                                  <option value="2">Pernah ikut namun Tidak banyak membantu</option>
                                  <option value="1">Tidak Pernah melihat warga disekitar rumah saya dalam kegiatan Kerja Bakti</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Jika Anda Memulai Menyalakan Media Elektronik/Komunikasi, Informasi Apa
                              Yang Anda Cari? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="pembelajar" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Mencari Informasi yang Berkaitan dengan Ilmu Teknologi</option>
                                  <option value="3">Mencari Berita Terkini</option>
                                  <option value="2">Membuka Media Sosial (Instagram, Facebook, Twiter dan lain-lain)</option>
                                  <option value="1">Lebih Tertarik dengan Hiburan (Game, Musik, dan Lain-lain)</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Pernahkah Anda Melihat Orang Lain (Teman, Saudara, Dsb) Yang Meraih
                              Prestasi, Coba Ceritakan? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="menghargaiprestasi" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Senang dan Antusias dalam memberi Selamat atas Keberhasilannya</option>
                                  <option value="3">Senang dan Memberi Selamat atas Keberhasilannya</option>
                                  <option value="2">Biasa Saja dalam memberikan ucapan atas Keberhasilan Seseorang</option>
                                  <option value="1">Tidak Tertarik untuk memberikan ucapan atas Keberhasilan Seseorang</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Mengapa Anda Berhasil? Siapa Yang Paling Banyak Berkontribusi Atas
                              Keberhasilan Anda? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="percayadiri" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Keberhasilan disebabkan karena Saya Pribadi</option>
                                  <option value="3">Keberhasilan disebabkan karena Saya Pribadi dan didukung oleh Keluarga</option>
                                  <option value="2">Keberhasilan disebabkan karena Saya Pribadi dan Bantuan Orang Lain</option>
                                  <option value="1">Keberhasilan Saya Pribadi disebabkan karena Kontribusi Orang Lain</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Ketika Ada Teman Anda Yang Sedang Menyampaikan Pendapat/Usulan Yang Tidak
                              Sepemikiran Dengan Anda, Apa Yang Anda Lakukan? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="demokratis" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Mendengarkan dengan Baik lalu memberikan Argumentasi yang Selaras</option>
                                  <option value="3">Mendengarkan dengan Baik lalu Memotong/Menyela Pendapat/Usulan Pihak Lain yang Tidak Sepemikiran dengan Anda</option>
                                  <option value="2">Langsung memberikan Argumentasi yang Selaras</option>
                                  <option value="1">Langsung Memotong/Menyela Pendapat/Usulan Pihak Lain yang Tidak Sepemikiran dengan Anda</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Bila Anda Diundang Rapat Penting, Dalam Surat Tersebut Tertera Pukul
                              08.00. Apa Yang Anda Lakukan? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="disiplinwaktu" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Datang lebih Awal untuk mempersiapkan hal yang diperlukan</option>
                                  <option value="3">Sesekali Telat menghadiri Undangan Rapat tanpa ada udzur syar'i</option>
                                  <option value="2">Selalu Telat menghadiri Undangan Rapat tanpa ada udzur syar'i</option>
                                  <option value="1">Tidak menghadiri Undangan Rapat tanpa ada udzur syar'i</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Menurut Anda, Sikap Dan Perilaku Terbaik Yang Seperti Apa Saat Anda
                              Menjalin Hubungan Dengan Masyarakat? Uraikan Pendapat Anda? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="menjaganamabaik" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Bisa menguraikan Pendapat yang berhubungan dengan Adab Masyarakat dengan Sangat Baik</option>
                                  <option value="3">Bisa menguraikan Pendapat yang berhubungan dengan Adab Masyarakat dengan Baik</option>
                                  <option value="2">Bisa menguraikan Pendapat yang berhubungan dengan Adab Masyarakat dengan Cukup Baik</option>
                                  <option value="1">Belum Bisa menguraikan Pendapat yang berhubungan dengan Adab Masyarakat</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Calon Mahasantri Mengucapkan Salam Saat Masuk Dan Keluar Ke Dan Dari Ruang
                              Wawancara? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="salam" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Secara Reflek dan Alami langsung Mengucapkan Salam, dan diakhiri dengan Ucapan Terimakasih</option>
                                  <option value="3">Mengucapkan Salam, namun lupa mengucapkan Terima Kasih</option>
                                  <option value="2">Mengucapkan Salam, namun masih disertai dengan Rasa Canggung</option>
                                  <option value="1">Terlihat Kaku dan Ragu ketika hendak Mengucapkan Salam dan lupa Mengucapkan Terima Kasih</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Apa Yang Melatar Belakangin Anda Mendaftarkan Diri Di Pesantren PeTIK
                              Jombang? Apakah Dengan Dorongan Keluarga Atau Niat Anda Pribadi? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="motivasi" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Mendaftarkan di Pesantren PeTIK Jombang ini lebih banyak oleh Dorongan Diri Sendiri</option>
                                  <option value="3">Mendaftarkan di Pesantren PeTIK Jombang ini atas Dorongan Diri Sendiri dan Keluarga</option>
                                  <option value="2">Mendaftarkan di Pesantren PeTIK Jombang ini atas Dorongan Keluarga</option>
                                  <option value="1">Mendaftarkan di Pesantren PeTIK Jombang ini dengan Dorongan Orang Lain</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Manfaat Rokok Bagi Seseorang? Merek Rokok Terkenal Yang Paling Diminati
                              Oleh Banyak Kebanyakan Orang? Apa Hukum Syari'at Merokok? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="brgpolutan" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Tidak Pernah Merokok sama sekali</option>
                                  <option value="3">Pernah sekali Merokok </option>
                                  <option value="2">Pernah Merokok, namun sudah Berhenti Merokok lama sekali</option>
                                  <option value="1">Masih Merokok</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Sebutkan Jenis Narkoba Dan Minuman Keras Yang Banyak Beredar Di Indonesia?
                              Adakah Kerabat Atau Teman Dekat Yang Menggunakan Narkoba Atau Minuman Keras Hingga Saat Ini?
                              Sejauh Mana Anda Mengenali Cara Peredaran Narkoba Atau Minuman Keras? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="brgharam" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Tidak Pernah menggunakan sama sekali</option>
                                  <option value="3">Tidak Pernah menggunakan Narkoba, namun Pernah mengkonsumsi Minuman Keras</option>
                                  <option value="2">Pernah menggunakan Narkoba atau mencicipi Minuman Keras, namun sudah Berhenti mengkonsumsinya</option>
                                  <option value="1">Pernah menkonsumsi Minuman Keras dan belum berhenti</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Apakah Anda Memiliki Riwayat Penyakit? Sudahkah Anda Dirawat Di Rumah
                              Sakit? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="riwayatpenyakit" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Tidak Pernah menggidap Penyakit Berat dan Menular</option>
                                  <option value="3">Pernah Diagnosa mengidap Penyakit Sedang, namun tidak dirawat di Rumah Sakit</option>
                                  <option value="2">Pernah Diagnosa mengidap Penyakit Berat dan Tidak Menular serta dirawat di Rumah Sakit</option>
                                  <option value="1">Pernah Diagnosa mengidap Penyakit Berat dan Menular serta dirawat di Rumah Sakit</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Deskripsikan Secara Tulis Aktivitas 3 Bulan Terakhir? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="ceritasingkat" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Mampu menjelaskan Aktivitas</option>
                                  <option value="3">Mampu menjelaskan Aktivitas</option>
                                  <option value="2">Cukup Mampu menjelaskan Aktivitas</option>
                                  <option value="1">Kurang Mampu menjelaskan Aktivitas</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Apakah Anda Memiliki Media Sosial Seperti Whatsapp, Instagram, Facebook,
                              Dan Lainnya? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="medkom" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Hasil Penelusuran Sangat Selaras</option>
                                  <option value="3">Hasil Penelusuran Selaras</option>
                                  <option value="2">Hasil Penelusuran Cukup Selaras</option>
                                  <option value="1">Hasil Penelusuran Tidak Selaras</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                              <textarea name="note_medkom" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Alasan Cinta NKRI</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Kenapa kita harus Cinta NKRI? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="nkri" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Bisa dalam menjelaskan</option>
                                  <option value="3">Bisa dalam menjelaskan</option>
                                  <option value="2">Cukup Bisa dalam menjelaskan</option>
                                  <option value="1">Tidak Bisa dalam menjelaskan</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                              <textarea name="note_nkri" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Penerapan Sistem Khilafah</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Apakah di Indonesia bisa menerapkan sistem Khilafah? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="khilafah" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Sangat Mampu dalam menjawab dan menjelaskan</option>
                                  <option value="3">Mampu dalam menjawab dan menjelaskan</option>
                                  <option value="2">Cukup Mampu dalam menjawab dan menjelaskan</option>
                                  <option value="1">Ragu-ragu dalam menjawab dan menjelaskan</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                              <textarea name="note_khilafah" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>

                      <div class="container">
                          <div class="card">
                              <div class="bg-info">
                                  <h6 class="text-center mt-2">Tentang PeTIK Jombang & YBM PLN</h6>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-12" class="form-label text-justify" style="color : #0E8388">Apa yang kamu ketahui tentang PeTIK Jombang dan YBM PLN <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                          <div class="col-12">
                              <select name="tentang" class="custom-select" required>
                                  <option value="">-- Pilihan --</option>
                                  <option value="4">Mampu menjelaskan tentang PeTIK Jombang dan YBM PLN</option>
                                  <option value="3">Mampu menjelaskan tentang PeTIK Jombang, namun tidak mengetahui tentang YBM PLN</option>
                                  <option value="2">Ragu-ragu menjelaskan tentang PeTIK Jombang dan YBM PLN</option>
                                  <option value="1">Tidak Mampu menjelaskan tentang PeTIK Jombang dan YBM PLN</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                              <textarea name="note_tentang" class="form-control" id="" cols="2" rows="2"></textarea>
                          </div>
                      </div><br>
                   

                      <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                          <button type="submit"
                              class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                              style="margin-right: 10px;">Keputusan PMB
                          </button>
                          <a class="btn btn-success btn-sm-2 px-3 mb-2 mb-lg-0" href="{{ route('tanya-jawab.index') }}">
                            Back
                          </a>
                      </div>
                  </form>
                 
                </div>
            </div>
        </div>
    </div>
@endsection