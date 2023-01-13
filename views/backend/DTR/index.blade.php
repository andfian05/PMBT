@extends('backend.index')
@section('content')


<div class="content-wrapper">



    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">

                <h4 class="text-center">Datatables Hasil Seleksi Mahasantri</h4>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">Data Calon Mahasantri</h3> -->
                <button class="btn btn-primary px-3 mb-2 mb-lg-0" type="button"><i
                        class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data</button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">


                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Mahasantri</th>
                            <th>Nomor Handphone</th>
                            <th>Diterima</th>
                            <th>Ditolak</th>
                            <th>Rekomendasi</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no= 1; @endphp
                        @foreach($dataseleksi as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->NamaMahasantri }}</td>
                            <td>{{ $row->NoHandphone }}</td>
                            <td>{{ $row->Diterima }}</td>
                            <td>{{ $row->Ditolak }}</td>
                            <td>{{ $row->Rekomendasi }}</td>
                            <td class="text-center">
                               
                                <a class="btn btn-primary btn-sm-2" title="Detail Seleksi"
                                    href="{{ route('dataseleksi.show', $row->id) }}">View</a>

                                <a class="btn btn-danger btn-sm-2" href="{{ url('/delbio') }}">Delete</a>
                                <a class="btn btn-success btn-sm-2" href="{{ url('/editbio') }}">Update</a>
                            </td>
                        </tr>

                        @endforeach



                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>




    @endsection
