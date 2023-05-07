@extends('backend.admin.index')
@section('content')

    <div class="content-wrapper">

        <br><br>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Perhitungan Tes Keseluruhan</h5>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-body bg-gradient-gray">
                    <p class="text-center">Kriteria Tes Keseluruhan :  NT > 250 (Lulus) | NT < 250 (Tidak Lulus) | NT = 250 + Akhlak Baik + Hafalan Baik + Memiliki Catatan Baik (Rekomendasi) </h4>
                </div>
                
            </div> -->
            <!-- <div class="card">
                <div class="card-body bg-fuchsia">
                    <p class="text-center">Kriteria Tes Survei : NT > 220-151 (Nilai Tinggi) | 150 + Catatan Baik (Nilai Sedang) | NT < 150 (Nilai Rendah)  </h4>
                   
                </div>
                
            </div>
            <div class="card">
                <div class="card-body bg-blue">
                  
                    <p class="text-center">Kriteria Tes Al Qur'an : NT > 490-301 (Nilai Tinggi) | 300 + Catatan Baik (Nilai Sedang) | NT < 300 (Nilai Rendah)   </h4>
                   
                </div>
                
                
            </div>
            <div class="card">
                <div class="card-body bg-cyan">
                   
                    <p class="text-center">Kriteria Tes Wawancara : NT > 220-151 (Nilai Tinggi) | 150 + Catatan Baik (Nilai Sedang) | NT < 150 (Nilai Rendah)  </h4>
                </div>
                
            </div> -->
        </div>
        <br><br>

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
                                    <label for="" class="form-label text-justify" style="color : #0E8388">Nama Calon Mahasantri <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                                    <select id="mahasantri" name="mhs_id" class="custom-select" value="{{ old('mhs_id') }}" required>
                                      <option value="">-- Pilihan --</option>
                                      @foreach ($mahasantris as $mahasantri)
                                        <option value="{{ $mahasantri->id }}">Nama: {{ $mahasantri->nama }} | No. Hp: {{ $mahasantri->no_hp }} | Email: {{ $mahasantri->email }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                        </div><br>
        
                        
        
                        <div class="container mt-2 col-md-12">
                            <div class="card">
                                <div class="bg-info">
                                    <h6 class="text-center mt-2">Penilaian Mengikuti Tes Survei</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form mb-3 mb-md-0">
                                        <label class="form-label text-justify" style="color : #0E8388">Bagaimana Keputusan Tes Survei? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                                        <div>
                                            <select id="survei" name="nilai_survei" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                {{-- @foreach ($survei as $surve)
                                                    <option value="{{ $surve->ntotal_survei * (30/100) }}">{{ $surve->ntotal_survei * (30/100) }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                                        <label class="form-label text-justify" style="color : #0E8388">Bagaimana Keputusan Tes Wawancara? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                                        <div>
                                            <select id="wawancara" name="nilai_wawancara" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                {{-- @foreach ($wawancara as $wacara)
                                                    <option value="{{ $wacara->ntotal_wawancara * (25/100) }}">{{ $wacara->ntotal_wawancara * (25/100) }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                                        <label class="form-label text-justify" style="color : #0E8388">Bagaimana Keputusan Tes Baca Dan Hafalan Al Qur'an? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                                        <div>
                                            <select id="quran" name="nilai_quran" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                {{-- @foreach ($baca_quran as $quran)
                                                    <option value="{{ $quran->ntotal_bq * (30/100) }}">{{ $quran->ntotal_bq * (30/100) }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
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
                                        <label class="form-label text-justify" style="color : #0E8388">Bagaimana Keputusan Tes Akademik? <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                                        <div>
                                            <select id="akademik" name="nilai_akademik" class="custom-select" required>
                                                <option value="">-- Pilihan --</option>
                                                {{-- @foreach ($potensi_akademik as $akademik)
                                                    <option value="{{ $akademik->ntotal_pa * (15/100) }}">{{ $akademik->ntotal_pa * (15/100) }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="" class="form-label text-justify" style="color : #0E8388">Catatan, Apabila Tidak Ada Tuliskan (-) <sup class="text-danger" font-size="20px">* (Wajib)</sup></label>
                                        <textarea name="note_akademik" class="form-control" id="" cols="4" rows="4"></textarea>
                                    </div>
                                </div>
                            </div><br><br>
                        </div>
        
                      
        
                        <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                            <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                                style="margin-right: 10px;">Keputusan PMB
                            </button>
                        </div>
        
                     
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection