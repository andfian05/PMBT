@extends('backend.index')
@section('content')


<div class="content-wrapper">

    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">

                <h4 class="text-center">View Hasil Seleksi Mahasantri</h4>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="card">
            <div class="card-header">

                <a class="btn btn-success btn-sm-2" href="{{ route('dataseleksi.index') }}"><i
                        class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back</a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">


                    <thead>
                        <tr>
                           
                            <th>Nama Mahasantri</th>
                            <th>Nomor Handphone</th>
                            <th>Diterima</th>
                            <th>Ditolak</th>
                            <th>Rekomendasi</th>
                            <th>Nilai Survei</th>
                            <th>Nilai Al Qur'an</th>
                            <th>Nilai Tanya Jawab</th>
                            <th>Nilai Total</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          
                            <td>{{ $row->NamaMahasantri }}</td>
                            <td>{{ $row->NoHandphone }}</td>
                            <td>{{ $row->Diterima }}</td>
                            <td>{{ $row->Ditolak }}</td>
                            <td>{{ $row->Rekomendasi }}</td>
                            <th>-</th>
                            <th>-</th>
                            <th>-</th>
                            <th>-</th>


                        </tr>




                    </tbody>
                    <tfoot>
                        <!-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> -->
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>




    @endsection
