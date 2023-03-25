@extends('backend.admin.index')
@section('content')

    <div class="content-wrapper">

        <br><br>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Detail Hasil Seleksi PMB</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-success btn-sm-2" href="{{ route('dtr.index') }}">
                        <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Data Hitung PMB</h3>
                </div>

                <div class="card-body">
                    <div class="container mt-2 col-md-12">
                        <div class="card">
                            <div class="bg-info">
                                <h6 class="text-center mt-2">Data Kepemilikan Berkas</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Calon Mahasantri</label>
                                <input class="form-control" name="mhs_id" type="text" value="{{ $dtr->mahasantri->nama }}"  disabled/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">No. Handphone</label>
                                <input class="form-control" name="mhs_id" type="text" value="{{ $dtr->mahasantri->no_hp }}"  disabled/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" name="mhs_id" type="text" value="{{ $dtr->mahasantri->email }}"  disabled/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Domisili</label>
                                <input class="form-control" name="mhs_id" type="text" value="{{ $dtr->mahasantri->kabupaten->nama }}"  disabled/>
                            </div>
                        </div><br>
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
                                    <label>Bagaimana Keputusan Berkas Pendaftarann Yang Telah Diupload?</label>
                                    <div>
                                        <select name="" class="custom-select" disabled>
                                            <option value="{{ $dtr->nilai_berkas }}">{{ $dtr->nilai_berkas }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Catatan</label>
                                    <textarea name="" class="form-control" cols="4" rows="4" disabled>
                                        {{ $dtr->note_berkas }}
                                    </textarea>
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
                                        <select name="" class="custom-select" disabled>
                                            <option value="{{ $dtr->nilai_survei }}">{{ $dtr->nilai_survei }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Catatan</label>
                                    <textarea name="" class="form-control" cols="4" rows="4" disabled>
                                        {{ $dtr->note_survei }}
                                    </textarea>
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
                                        <select name="" class="custom-select" disabled>
                                            <option value="{{ $dtr->nilai_wawancara }}">{{ $dtr->nilai_wawancara }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Catatan</label>
                                    <textarea name="" class="form-control" cols="4" rows="4" disabled>
                                        {{ $dtr->note_wawancara }}
                                    </textarea>
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
                                        <select name="" class="custom-select" disabled>
                                            <option value="{{ $dtr->nilai_quran }}">{{ $dtr->nilai_quran }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Catatan</label>
                                    <textarea name="" class="form-control" cols="4" rows="4" disabled>
                                        {{ $dtr->note_quran }}
                                    </textarea>
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
                                        <select name="" class="custom-select" disabled>
                                            <option value="{{ $dtr->nilai_akademik }}">{{ $dtr->nilai_akademik }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Catatan</label>
                                    <textarea name="" class="form-control" cols="4" rows="4" disabled>
                                        {{ $dtr->note_akademik }}
                                    </textarea>
                                </div>
                            </div>
                        </div><br><br>
                    </div>

                    <div class="container mt-2 col-md-12">
                        <div class="card">
                            <div class="bg-info">
                                <h6 class="text-center mt-2">Hasil Akhir</h6>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form mb-3 mb-md-0">
                                    <label>Status</label>
                                    <div>
                                        <select name="" class="custom-select" disabled>
                                            <option value="">
                                                @php
                                                    $nilai = $dtr->nilai_berkas + $dtr->nilai_survei + $dtr->nilai_wawancara + $dtr->nilai_quran + $dtr->nilai_akademik;
                                                @endphp
                                                @if ($nilai == 500)
                                                    {{'Lulus Seleksi'}}
                                                @elseif($nilai > 250)
                                                    {{'Rekomendasi'}}
                                                @elseif($nilai < 250)
                                                    {{'Tidak Lulus Seleksi'}}
                                                @else
                                                    {{'Belum Ada Pengimputan'}}
                                                @endif
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
@endsection
