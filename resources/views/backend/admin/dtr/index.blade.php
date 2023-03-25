@extends('backend.admin.index')
@section('content')

  {{-- @if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
  @endif  --}}

  <div class="content-wrapper">
    <br><br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Data Hasil Seleksi PMB</h5>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-header">
          <a class="btn btn-danger px-3 mb-2 mb-lg-0" title="Export Data DTR Mahasantri"
            href="{{ route('dtr.pdf') }}">
            <i class="fa-solid fa-file-pdf"></i>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive" id="no-more-tables">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Mahasantri</th>
                  <th scope="col">No. Handphone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Domisili</th>
                  <th scope="col">Status</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @php $no = 1; @endphp
                @foreach($dtrs as $dtr)
                  <tr>
                    <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                    <td data-title="Nama Lengkap">{{ $dtr->mahasantri->nama }}</td>
                    <td data-title="No. Handphone">{{ $dtr->mahasantri->no_hp }}</td>
                    <td data-title="Email">{{ $dtr->mahasantri->email }}</td>
                    <td data-title="Domisili">{{ $dtr->mahasantri->kabupaten->nama }}</td>
                    <td data-title="Status">
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
                    </td>
                    <th class="d-flex justify-content-center">
                      <a class="btn btn-primary btn-sm me-2" href="{{ route('dtr.show', $dtr->id) }}">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i> Detail
                      </a>
                      <form method="POST" action="{{ route('dtr.destroy', $dtr->id) }}"
                        style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                          onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete
                        </button>
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
