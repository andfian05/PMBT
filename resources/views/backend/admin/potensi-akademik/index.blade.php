@extends('backend.admin.index')
@section('content')

    <div class="content-wrapper">
      <br><br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center">Data Tes Potensi Akademik Calon Mahasantri</h5>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Tambah Data Penilaian Tes Potensi Akademik" 
              href="{{ route('potensi-akademik.create') }}">
              <i class="fa-solid fa-circle-plus"></i>&nbsp;Add Data
            </a>
            <a class="btn btn-danger px-3 mb-2 mb-lg-0" title="Export Data Penilaian Tes Tanya Jawab" 
              href="#">
              <i class="fa-solid fa-file-pdf"></i>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive" id="no-more-tables">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col">@sortablelink('mhs_id','Nama Lengkap')</th>
                    <th scope="col" class="text-center">Tes Bahasa Inggris</th>
                    <th scope="col" class="text-center">Tes Pengetahuan Komputer</th>
                    <th scope="col" class="text-center">Tes Aritmatika</th>
                    <!-- <th scope="col" class="text-center">Tes Mekanikal</th>
                    <th scope="col" class="text-center">Tes Analogi Simbol</th> -->
                    <th scope="col" class="text-center">Nilai Total</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  @php $no = 1 + (($potensi_akademik->currentPage()-1) * $potensi_akademik->perPage()); @endphp
                  @foreach ($potensi_akademik as $pa)
                    <tr>
                      <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                      <td data-title="Nama Mahasantri">{{ $pa->mahasantri['nama'] }}</td>
                      <td class="text-center" data-title="Tes Bahasa Inggris">{{ $pa->b_inggris }}</td>
                      <td class="text-center" data-title="Tes Pengetahuan Komputer">{{ $pa->komputer }}</td>
                      <td class="text-center" data-title="Tes Aritmatika">{{ $pa->aritmatika }}</td>
                      <!-- <td class="text-center" data-title="Tes Mekanikal"> {{ $pa->mekanikal }}</td>
                      <td class="text-center" data-title="Tes Analogi Simbol"> {{ $pa->simbol }}</td> -->
                      <td class="text-center" data-title="Nilai Total">{{ $pa->b_inggris + $pa->komputer + $pa->aritmatika + $pa->mekanikal + $pa->simbol }}</td>
                      <th class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-sm me-2"
                            href="{{ route('potensi-akademik.show', $pa->id) }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                        <form method="POST" action="{{ route('potensi-akademik.destroy', $pa->id) }}"
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

              {!! $potensi_akademik->appends(Request::except('page'))->render() !!}
            </div>
          </div>
        </div>
      </div>
  
@endsection