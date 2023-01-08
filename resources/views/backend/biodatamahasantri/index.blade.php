@extends('backend.index')
@section('content')


<div class="content-wrapper">

    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">

                <h4 class="text-center">Datatables Calon Mahasantri</h4>

            </div>
        </div>
    </div>
    @if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
    @endif



    <div class="container">
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">Data Calon Mahasantri</h3> -->
                <!-- <button class="btn btn-primary px-3 d-grid gap-2" type="button"><i class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data</button> -->
                <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Tambah Biodata Mahasantri"
                    href="{{ route('mahasantri.create') }}"><i class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data</a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">


                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>


                            <th>Email</th>

                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $no= 1; @endphp
                        @foreach($mahasantri as $row)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->tmp_lahir }}</td>
                            <td>{{ date('d F Y', strtotime($row->tgl_lahir)) }}</td>
                            <td>{{ $row->email }}</td>


                            <td class="text-center">
                                <a class="btn btn-primary btn-sm-2" title="Detail Mahasantri"
                                    href="{{ route('mahasantri.show', $row->id) }}">View</a>

                                <a class="btn btn-danger btn-sm-2" title="Detail Mahasantri"
                                    href="{{ url('/delbio') }}">Delete</a>
                                <a class="btn btn-success btn-sm-2" title="Detail Mahasantri"
                                    href="{{ url('/editbio') }}">Update</a>

                            </td>

                        </tr>

                        @endforeach


                    </tbody>
                    <tfoot>

                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>




    @endsection
