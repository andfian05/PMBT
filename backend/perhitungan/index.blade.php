@extends('backend.index')
@section('content')


<div class="content-wrapper">



    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">

                <h4 class="text-center">Perhitungan Tes Keseluruhan</h4>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="card card-info">


            <div class="card-header">
                <h3 class="card-title">Data Ceklis PMB</h3>
            </div>
            <div class="card-body">

                <div class="container mt-2 col-md-12">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Data Kepemilikan Berkas</h6>

                        </div>
                    </div>
                

                <div class="col-md-13">
                    <div class="form-group">
                        <label for="">Nama Calon Mahasantri</label>
                        <input class="form-control" name="" id="" type="text" />
                    </div>
                </div>

                <div class="col-md-13">
                    <div class="form-group">
                        <label for="">No. Handphone</label>
                        <input class="form-control" name="" id="" type="text" />
                    </div>
                </div>

                <div class="col-md-13">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" name="" id="" type="text" />
                    </div>
                </div>

                <div class="col-md-13">
                    <div class="form-group">
                        <label for="">Domisili</label>
                        <input class="form-control" name="" id="" type="text" />
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
                            <label>Bagaimana Keputusan Surat Pendaftaran Yang Telah Diupload?</label>
                            <div>
                                <select id="" name="" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="">Lulus Seleksi</option>
                                    <option value="">Tidak Lulus Seleksi</option>
                                    <option value="">Rekomendasi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <label for="">Catatan</label>
                            <textarea name="" class="form-control" id="" cols="4" rows="4"
                                required="required"></textarea>
                        </div>
                    </div>
                </div><br></div>


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
                               <select id="" name="" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="">Nilai Total Tinggi</option>
                                    <option value="">Nilai Total Sedang</option>
                                    <option value="">Nilai Total Rendah</option>
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
                              <select id="" name="" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="">Nilai Total Tinggi</option>
                                    <option value="">Nilai Total Sedang</option>
                                    <option value="">Nilai Total Rendah</option>
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
                </div><br>
                </div>


                <div class="container mt-2 col-md-12">
                    <div class="card">

                        <div class="bg-info">

                            <h6 class="text-center mt-2">Penilaian Mengikuti Tes Bacaan Dan Hafalan Al Qur'an</h6>

                        </div>
                    </div>
                


                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form mb-3 mb-md-0">
                            <label>Bagaimana Keputusan Tes Bacaan Dan Hafalan Al Qur'an?</label>
                            <div>
                              <select id="" name="" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="">Nilai Total Tinggi</option>
                                    <option value="">Nilai Total Sedang</option>
                                    <option value="">Nilai Total Rendah</option>
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
                              <select id="" name="" class="custom-select" required="required">
                                    <option value="">-- Pilihan --</option>
                                    <option value="">Nilai Total Tinggi</option>
                                    <option value="">Nilai Total Sedang</option>
                                    <option value="">Nilai Total Rendah</option>
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
                </div><br><br>
                </div>





                <!-- Tutup Formulir Keseluruhan -->

               
                <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                    <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                        style="margin-right: 10px;">Keputusan PMB
                    </button>
                    
                </div>

                <!-- Harus kasih data info pakai extension sweet alert -->





            </div>
        </div>
    </div>








</div>

@endsection
