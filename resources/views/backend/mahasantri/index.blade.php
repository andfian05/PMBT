@extends('backend.index')
@section('content')
@if (session('success'))
  <p class="alert alert-success">{{ session('success') }}</p>
@endif

    <div class="content-wrapper">
      <br><br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center">Data Calon Mahasantri</h4>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Tambah Biodata Mahasantri" href="{{ route('mahasantri.create') }}">
              <i class="fa-solid fa-circle-plus"></i>&nbsp;Add Data
            </a>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Anak ke-</th>
                  <th>No.Hp</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($mahasantris as $mahasantri)
                  <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $mahasantri->nama }}</td>
                    <td>{{ $mahasantri->tmp_lahir }}</td>
                    <td>{{ date('d F Y', strtotime($mahasantri->tgl_lahir)) }}</td>
                    <td>{{ $mahasantri->anak_ke }}</td>
                    <td>{{ $mahasantri->no_hp }}</td>
                    <td>{{ $mahasantri->email }}</td>
                    <td>{{ $mahasantri->alamat }}</td>
                    <td class="text-center d-flex">
                      <a class="btn btn-primary btn-sm me-2" href="{{ route('mahasantri.show', $mahasantri->id) }}">Detail</a>
                      <a class="btn btn-success btn-sm me-2" href="{{ route('mahasantri.edit', $mahasantri->id) }}">Update</a>
                      <form method="POST" action="{{ route('mahasantri.destroy', $mahasantri->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection