@extends('backend.admin.index')
@section('content')


    <div class="content-wrapper">
      <br><br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center">Data Calon Mahasantri</h5>
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
                    <th scope="col" class="text-center">No</th>
                    <th scope="col">@sortablelink('nama','Nama Lengkap')</th>
                    <th scope="col">Domisili</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">No.Handphone</th>
                    <th scope="col" class="text-center">Action</th> 
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  @php $no = 1 + (($mahasantris->currentPage()-1) * $mahasantris->perPage()); @endphp
                  @foreach($mahasantris as $mahasantri)
                    <tr>
                      <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                      <td data-title="Nama Lengkap">{{ $mahasantri->nama }}</td>
                      <td data-title="Domisili">{{ $mahasantri->provinsi->nama }}</td>
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

              <!-- {{ $mahasantris->links() }} -->

              {!! $mahasantris->appends(Request::except('page'))->render() !!}
            </div>
          </div>
        </div>
      </div>
@endsection