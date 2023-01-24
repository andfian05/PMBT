@extends('backend.admin.index')
@section('content')
<!-- @if (session('success'))
  <p class="alert alert-success">{{ session('success') }}</p>
@endif -->

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
            <a class="btn btn-danger px-3 mb-2 mb-lg-0" title="Export Data Mahasantri" href="{{ route('mahasantri.pdf') }}">
              <i class="fa-solid fa-file-pdf"></i>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive" id="no-more-tables">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">No.Hp</th>
                    <th scope="col">Action</th> 
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  @php $no = 1; @endphp
                  @foreach($mahasantris as $mahasantri)
                    <tr>
                      <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                      <td data-title="Nama Lengkap">{{ $mahasantri->nama }}</td>
                      <td data-title="Tempat Lahir">{{ $mahasantri->tmp_lahir }}</td>
                      <td data-title="Tanggal Lahir">{{ date('d F Y', strtotime($mahasantri->tgl_lahir)) }}</td>
                      <td data-title="No. Handphone">{{ $mahasantri->no_hp }}</td>
                      <th class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-sm me-2"
                            href="{{ route('mahasantri.show', $mahasantri->id) }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                        <a class="btn btn-success btn-sm me-2"
                            href="{{ route('mahasantri.edit', $mahasantri->id) }}"><i class="fa-solid fa-pencil"></i> Update</a>
                        <form method="POST" action="{{ route('mahasantri.destroy', $mahasantri->id) }}"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete</button>
                        </form>
                      </th>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection