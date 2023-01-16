@extends('backend.index')
@section('content')


<div class="content-wrapper">

    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">

                <h4 class="text-center">View Survei Mahasantri</h4>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="card">
            <div class="card-header">

                <a class="btn btn-success btn-sm-2" href="{{ url('/admin2w') }}"><i
                        class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back</a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">


                <div class="table-responsive" id="no-more-tables">
                    <table class="table">
                        <thead>
                            <tr>



                                <th scope="col">Nama Mahasantri</th>
                                <th scope="col">Nama Pewawancara</th>
                                <th scope="col">Tempat Seleksi</th>

                                <th scope="col">SKTM</th>
                                <th scope="col">Catatan SKTM</th>
                                <th scope="col">Program Beasiswa</th>
                                <th scope="col">Catatan Program Beasiswa</th>
                                <th scope="col">Izin Beasiswa</th>
                                <th scope="col">Catatan Izin Beasiswa</th>
                                <th scope="col">Status Keluarga</th>
                                <th scope="col">Catatan Status Keluarga</th>
                                <th scope="col">Pendidikan Keluarga</th>
                                <th scope="col">Catatan Pendidikan Keluarga</th>
                                <th scope="col">Usia Pendidikan</th>
                                <th scope="col">Catatan Usia Pendidikan</th>
                                <th scope="col">Kesehatan Keluarga</th>
                                <th scope="col">Catatan Kesehatan Keluarga</th>
                                <th scope="col">Jenis Pekerjaan</th>
                                <th scope="col">Catatan Jenis Pekerjaan</th>
                                <th scope="col">Status Rumah</th>
                                <th scope="col">Catatan Status Rumah</th>
                                <th scope="col">Luas Rumah</th>
                                <th scope="col">Catatan Luas Rumah</th>
                                <th scope="col">Dinding Rumah</th>
                                <th scope="col">Catatan Dinding Rumah</th>
                                <th scope="col">Atap Rumah</th>
                                <th scope="col">Catatan Atap Rumah</th>
                                <th scope="col">Lantai Rumah</th>
                                <th scope="col">Catatan Lantai Rumah</th>
                                <th scope="col">Alat Masak</th>
                                <th scope="col">Catatan Alat Masak</th>
                                <th scope="col">Perabotan</th>
                                <th scope="col">Catatan Perabotan</th>
                                <th scope="col">Sumber Air</th>
                                <th scope="col">Catatan Sumber Air</th>
                                <th scope="col">MCK</th>
                                <th scope="col">Catatan MCK</th>
                                <th scope="col">Penerangan</th>
                                <th scope="col">Catatan Penerangan</th>
                                <th scope="col">Lokasi Rumah</th>
                                <th scope="col">Catatan Lokasi Rumah</th>
                                <th scope="col">Tata Letak</th>
                                <th scope="col">Catatan Tata Letak</th>
                                <th scope="col">Milik Tanah</th>
                                <th scope="col">Catatan Milik Tanah</th>
                                <th scope="col">Harta</th>
                                <th scope="col">Catatan Harta</th>
                                <th scope="col">Mahasantri_ID</th>


                            </tr>
                        </thead>
                        <tbody class="table-group-divider">

                            <tr>
                              
                                <td data-title="Nama Mahasantri">Nama Mahasantri</td>
                                <td data-title="Nama Pewawancara">Nama Pewawancara</td>
                                <td data-title="Tempat Seleksi">Tempat Seleksi</td>

                                <td data-title="SKTM">SKTM</td>
                                <td data-title="Catatan SKTM">Catatan SKTM</td>
                                <td data-title="Program Beasiswa">Program Beasiswa</td>
                                <td data-title="Catatan Program Beasiswa">Catatan Program Beasiswa</td>
                                <td data-title="Izin Beasiswa">Izin Beasiswa</td>
                                <td data-title="Catatan Izin Beasiswa">Catatan Izin Beasiswa</td>
                                <td data-title="Status Keluarga">Status Keluarga</td>
                                <td data-title="Catatan Status Keluarga">Catatan Status Keluarga</td>
                                <td data-title="Pendidikan Keluarga">Pendidikan Keluarga</td>
                                <td data-title="Catatan Pendidikan Keluarga">Catatan Pendidikan Keluarga</td>
                                <td data-title="Usia Pendidikan">Usia Pendidikan</td>
                                <td data-title="Catatan Usia Pendidikan">Catatan Usia Pendidikan</td>
                                <td data-title="Kesehatan Keluarga">Kesehatan Keluarga</td>
                                <td data-title="Catatan Kesehatan Keluarga">Catatan Kesehatan Keluarga</td>
                                <td data-title="Jenis Pekerjaan">Jenis Pekerjaan</td>
                                <td data-title="Catatan Jenis Pekerjaan">Catatan Jenis Pekerjaan</td>
                                <td data-title="Status Rumah">Status Rumah</td>
                                <td data-title="Catatan Status Rumah">Catatan Status Rumah</td>
                                <td data-title="Luas Rumah">Luas Rumah</td>
                                <td data-title="Catatan Luas Rumah">Catatan Luas Rumah</td>
                                <td data-title="Dinding Rumah">Dinding Rumah</td>
                                <td data-title="Catatan Dinding Rumah">Catatan Dinding Rumah</td>
                                <td data-title="Atap Rumah">Atap Rumah</td>
                                <td data-title="Catatan Atap Rumah">Catatan Atap Rumah</td>
                                <td data-title="Lantai Rumah">Lantai Rumah</td>
                                <td data-title="Catatan Lantai Rumah">Catatan Lantai Rumah</td>
                                <td data-title="Alat Masak">Alat Masak</td>
                                <td data-title="Catatan Alat Masak">Catatan Alat Masak</td>
                                <td data-title="Perabotan">Perabotan</td>
                                <td data-title="Catatan Perabotan">Catatan Perabotan</td>
                                <td data-title="Sumber Air">Sumber Air</td>
                                <td data-title="Catatan Sumber Air">Catatan Sumber Air</td>
                                <td data-title="MCK">MCK</td>
                                <td data-title="Catatan MCK">Catatan MCK</td>
                                <td data-title="Penerangan">Penerangan</td>
                                <td data-title="Catatan Penerangan">Catatan Penerangan</td>
                                <td data-title="Lokasi Rumah">Lokasi Rumah</td>
                                <td data-title="Catatan Lokasi Rumah">Catatan Lokasi Rumah</td>
                                <td data-title="Tata Letak">Tata Letak</td>
                                <td data-title="Catatan Tata Letak">Catatan Tata Letak</td>
                                <td data-title="Milik Tanah">Milik Tanah</td>
                                <td data-title="Catatan Milik Tanah">Catatan Milik Tanah</td>
                                <td data-title="Harta">Harta</td>
                                <td data-title="Catatan Harta">Catatan Harta</td>
                                <td data-title="Mahasantri_ID">Mahasantri_ID</td>

                            </tr>



                        </tbody>
                    </table><br><br>


                </div>



            </div>
            <!-- /.card-body -->
        </div>
    </div>




    @endsection
