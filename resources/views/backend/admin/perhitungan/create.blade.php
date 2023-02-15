@extends('backend.admin.index')
@section('content')

    <div class="content-wrapper">

        <br><br>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Perhitungan Tes Keseluruhan</h4>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="text-center">Kriteria : Lulus Seleksi (Nilai = 500) Tidak Lulus Seleksi (Nilai < 250) Rekomendasi (Nilai > 250 + Akhlak Baik + Hafalan Baik + Memiliki Catatan Baik) </h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Data Hitung PMB</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('perhitungan.store') }}" method="POST" id="form1" 
                      enctype="multipart/form-data">
                      @csrf
                        <div class="container mt-2 col-md-12">
                            <div class="card">
                                <div class="bg-info">
                                    <h6 class="text-center mt-2">Data Kepemilikan Berkas</h6>
                                </div>
                            </div>
                            <div class="col-md-13">
                                <div class="form-group">
                                    <label for="">Nama Calon Mahasantri</label>
                                    <select id="" name="mhs_id" class="custom-select" required>
                                      <option value="">-- Pilihan --</option>
                                      @foreach ($mahasantris as $mahasantri)
                                        <option value="{{ $mahasantri->id }}">Nama: {{ $mahasantri->nama }} | No. Hp: {{ $mahasantri->no_hp }} | Email: {{ $mahasantri->email }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
        
                        <div class="container mt-2 col-md-12">
                            <div class="card">
                                <div class="bg-info">
                                    <h6 class="text-center mt-2">Penilaian Berkas File Upload</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form mb-3 mb-md-0">
                                        <label>Bagaimana Keputusan Berkas Pendaftaran Yang Telah Diupload?</label>
                                        <div>
                                            <select id="" name="nilai_berkas" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                <option value="100">Lulus Seleksi</option>
                                                <option value="0">Tidak Lulus Seleksi</option>
                                                <option value="50">Rekomendasi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="">Catatan</label>
                                        <textarea name="note_berkas" class="form-control" id="" cols="4" rows="4"
                                            required></textarea>
                                    </div>
                                </div>
                            </div><br>
                        </div>
        
                        <div class="container mt-2 col-md-12">
                            <div class="card">
                                <div class="bg-info">
                                    <h6 class="text-center mt-2">Penilaian Mengikuti Tes Survei</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form mb-3 mb-md-0">
                                        <label>Bagaimana Keputusan Tes Survei?</label>
                                        <div>
                                            <select id="" name="nilai_survei" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                <option value="100">Nilai Total Tinggi</option>
                                                <option value="50">Nilai Total Sedang</option>
                                                <option value="30">Nilai Total Rendah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="">Catatan</label>
                                        <textarea name="note_survei" class="form-control" id="" cols="4" rows="4"></textarea>
                                    </div>
                                </div>
                            </div><br>
                        </div>
        
                        <div class="container mt-2 col-md-12">
                            <div class="card">
                                <div class="bg-info">
                                    <h6 class="text-center mt-2">Penilaian Mengikuti Tes Wawancara</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form mb-3 mb-md-0">
                                        <label>Bagaimana Keputusan Tes Wawancara?</label>
                                        <div>
                                            <select id="" name="nilai_wawancara" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                <option value="100">Nilai Total Tinggi</option>
                                                <option value="50">Nilai Total Sedang</option>
                                                <option value="30">Nilai Total Rendah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="">Catatan</label>
                                        <textarea name="note_wawancara" class="form-control" id="" cols="4" rows="4"></textarea>
                                    </div>
                                </div>
                            </div><br>
                        </div>
        
                        <div class="container mt-2 col-md-12">
                            <div class="card">
                                <div class="bg-info">
                                    <h6 class="text-center mt-2">Penilaian Mengikuti Tes Baca Dan Hafalan Al Qur'an</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form mb-3 mb-md-0">
                                        <label>Bagaimana Keputusan Tes Baca Dan Hafalan Al Qur'an?</label>
                                        <div>
                                            <select id="" name="nilai_quran" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                <option value="100">Nilai Total Tinggi</option>
                                                <option value="50">Nilai Total Sedang</option>
                                                <option value="30">Nilai Total Rendah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="">Catatan</label>
                                        <textarea name="note_quran" class="form-control" id="" cols="4" rows="4"></textarea>
                                    </div>
                                </div>
                            </div><br>
                        </div>
        
                        <div class="container mt-2 col-md-12">
                            <div class="card">
                                <div class="bg-info">
                                    <h6 class="text-center mt-2">Penilaian Mengikuti Tes Akademik</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form mb-3 mb-md-0">
                                        <label>Bagaimana Keputusan Tes Akademik?</label>
                                        <div>
                                            <select id="" name="nilai_akademik" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                <option value="100">Nilai Total Tinggi</option>
                                                <option value="50">Nilai Total Sedang</option>
                                                <option value="30">Nilai Total Rendah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="">Catatan</label>
                                        <textarea name="note_akademik" class="form-control" id="" cols="4" rows="4"></textarea>
                                    </div>
                                </div>
                            </div><br><br>
                        </div>
        
                        <!-- Tutup Formulir Keseluruhan -->
        
                        <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                            <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                                style="margin-right: 10px;">Keputusan PMB
                            </button>
                        </div>
        
                        <!-- Harus kasih data info pakai extension sweet alert -->
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection