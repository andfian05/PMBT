@extends('backend.admin.index')
@section('content')
    <div class="content-wrapper">
    
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                  <h5 class="text-center">Detail Tes Tanya Jawab Calon Mahasantri</h5>
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
                      <div class="form-group col-md-12">
                        <label for="">Nama Calon Mahasantri</label>
                        <select id="" name="mhs_id" class="custom-select" disabled>
                          <option value="{{ $wawancara->mahasantri->id }}">{{ $wawancara->mahasantri->nama }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group col-md-12">
                        <label for="">No. Handphone Calon Mahasantri</label>
                        <select id="" name="mhs_id" class="custom-select" disabled>
                          <option value="{{ $wawancara->mahasantri->id }}">{{ $wawancara->mahasantri->no_hp }}</option>
                        </select>
                      </div>
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
                      <label for="">Nama Pewawancara Tes Tanya Jawab</label>
                      <input class="form-control" name="nama_pewawancara" id="" type="text" value="{{ $wawancara->nama_pewawancara }}" disabled/>
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
                        <select id="keterangan" name="tmp_seleksi" class="custom-select" disabled onclick="tampilkan()">
                          <option value="{{ $wawancara->tmp_seleksi }}">{{ $wawancara->tmp_seleksi }}</option>
                        </select>
                      </div>
                    </div> 
                    <div class="form-group col-md-12">
                        <label class="col-12">Lokasi</label> 
                        <input type="text" name="lks_seleksi" class="form-control" value="{{ $wawancara->lks_seleksi }}" disabled>
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
                      <label class="col-12">Visi Dan Misi Hidup Pribadi</label>
                      <div class="col-12">
                          <select name="visimisi" class="custom-select" disabled>
                              <option value="{{ $wawancara->visimisi }}">{{ $wawancara->visimisi }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_visimisi" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_visimisi }}
                          </textarea>
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
                          <select name="komitmen" class="custom-select" disabled>
                              <option value="{{ $wawancara->komitmen }}">{{ $wawancara->komitmen }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_komitmen" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_komitmen }}
                          </textarea>
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
                          <select name="tanggungjawab" class="custom-select" disabled>
                              <option value="{{ $wawancara->tanggungjawab }}">{{ $wawancara->tanggungjawab }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_tanggungjwb" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_tanggungjwb }}
                          </textarea>
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
                          <select name="kejujuran" class="custom-select" disabled>
                              <option value="{{ $wawancara->kejujuran }}">{{ $wawancara->kejujuran }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_kejujuran" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_kejujuran }}
                          </textarea>
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
                          <select name="pekerjakeras" class="custom-select" disabled>
                              <option value="{{ $wawancara->pekerjakeras }}">{{ $wawancara->pekerjakeras }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_pekerjakrs" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_pekerjakrs }}
                          </textarea>
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
                          <select name="bekerjasama" class="custom-select" disabled>
                              <option value="{{ $wawancara->bekerjasama }}">{{ $wawancara->bekerjasama }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_bekerjasama" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_bekerjasama }}
                          </textarea>
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
                          <select name="kemandirian" class="custom-select" disabled>
                              <option value="{{ $wawancara->kemandirian }}">{{ $wawancara->kemandirian }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_kemandirian" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_kemandirian }}
                          </textarea>
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
                          <select name="tolongmenolong" class="custom-select" disabled>
                              <option value="{{ $wawancara->tolongmenolong }}">{{ $wawancara->tolongmenolong }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_menolong" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_menolong }}
                          </textarea>
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
                          <select name="peduli" class="custom-select" disabled>
                              <option value="{{ $wawancara->peduli }}">{{ $wawancara->peduli }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_peduli" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_peduli }}
                          </textarea>
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
                          <select name="pembelajar" class="custom-select" disabled>
                              <option value="{{ $wawancara->pembelajar }}">{{ $wawancara->pembelajar }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_pembelajar" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_pembelajar }}
                          </textarea>
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
                          <select name="menghargaiprestasi" class="custom-select" disabled>
                              <option value="{{ $wawancara->menghargaiprestasi }}">{{ $wawancara->menghargaiprestasi }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_hargaipres" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_hargaipres }}
                          </textarea>
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
                          <select name="percayadiri" class="custom-select" disabled>
                              <option value="{{ $wawancara->percayadiri }}">{{ $wawancara->percayadiri }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_pd" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_pd }}
                          </textarea>
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
                          <select name="demokratis" class="custom-select" disabled>
                              <option value="{{ $wawancara->demokratis }}">{{ $wawancara->demokratis }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_demokratis" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_demokratis }}
                          </textarea>
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
                          <select name="disiplinwaktu" class="custom-select" disabled>
                              <option value="{{ $wawancara->disiplinwaktu }}">{{ $wawancara->disiplinwaktu }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_disiplinwkt" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_disiplinwkt }}
                          </textarea>
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
                          <select name="menjaganamabaik" class="custom-select" disabled>
                              <option value="{{ $wawancara->menjaganamabaik }}">{{ $wawancara->menjaganamabaik }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_jaganmbaik" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_jaganmbaik }}
                          </textarea>
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
                          <select name="salam" class="custom-select" disabled>
                              <option value="{{ $wawancara->salam }}">{{ $wawancara->salam }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_salam" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_salam }}
                          </textarea>
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
                          <select name="motivasi" class="custom-select" disabled>
                              <option value="{{ $wawancara->motivasi }}">{{ $wawancara->motivasi }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_motivasi" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_motivasi }}
                          </textarea>
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
                          <select name="brgpolutan" class="custom-select" disabled>
                              <option value="{{ $wawancara->brgpolutan }}">{{ $wawancara->brgpolutan }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_brgpolutan" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_brgpolutan }}
                          </textarea>
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
                          <select name="brgharam" class="custom-select" disabled>
                              <option value="{{ $wawancara->brgharam }}">{{ $wawancara->brgharam }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_brgharam" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_brgharam }}
                          </textarea>
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
                          <select name="riwayatpenyakit" class="custom-select" disabled>
                              <option value="{{ $wawancara->riwayatpenyakit }}">{{ $wawancara->riwayatpenyakit }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_rytpenyakit" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_rytpenyakit }}
                          </textarea>
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
                          <select name="ceritasingkat" class="custom-select" disabled>
                              <option value="{{ $wawancara->ceritasingkat }}">{{ $wawancara->ceritasingkat }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_crtsingkat" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_crtsingkat }}
                          </textarea>
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
                          <select name="medkom" class="custom-select" disabled>
                              <option value="{{ $wawancara->medkom }}">{{ $wawancara->medkom }}</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="note_medkom" class="form-control" id="" cols="2" rows="2" disabled>
                            {{ $wawancara->note_medkom }}
                          </textarea>
                      </div>
                  </div><br>
                </div>
            </div>
        </div>
    </div>
@endsection