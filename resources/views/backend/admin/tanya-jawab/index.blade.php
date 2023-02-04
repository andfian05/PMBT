@extends('backend.admin.index')
@section('content')

    <div class="content-wrapper">
      <br><br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center">Data Penilaian Tes Tanya Jawab Mahasantri</h4>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Tambah Data Penilaian Tes Tanya Jawab" 
              href="{{ route('tanya-jawab.create') }}">
              <i class="fa-solid fa-circle-plus"></i>&nbsp;Add Data
            </a>
            <a class="btn btn-danger px-3 mb-2 mb-lg-0" title="Export Data Penilaian Tes Tanya Jawab" 
              href="{{ route('tanya-jawab.pdf') }}">
              <i class="fa-solid fa-file-pdf"></i>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive" id="no-more-tables">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Mahasantri</th>
                    <th>No. Hp</th>
                    <th>Nama Pewawancara</th>
                    <th>Tempat Seleksi</th>
                    <th>Nilai Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  @php $no = 1; @endphp
                  @foreach ($wawancaras as $wawancara)
                    <tr>
                      <td scope="row" data-title="No">{{ $no++ }}</td>
                      <td data-title="Nama Mahasantri">{{ $wawancara->mahasantri['nama'] }}</td>
                      <td data-title="No. Hp">{{ $wawancara->mahasantri['no_hp'] }}</td>
                      <td data-title="Nama Pewawancara">{{ $wawancara->nama_pewawancara }}</td>
                      <td data-title="Tempat Seleksi">{{ $wawancara->tmp_seleksi }}</td>
                      <td data-title="Nilai Total">{{ $wawancara->visimisi + $wawancara->komitmen + $wawancara->tanggungjawab + $wawancara->kejujuran + $wawancara->pekerjakeras + $wawancara->bekerjasama + $wawancara->kemandirian + $wawancara->tolongmenolong + $wawancara->peduli + $wawancara->pembelajar + $wawancara->menghargaiprestasi + $wawancara->percayadiri + $wawancara->demokratis + $wawancara->disiplinwaktu + $wawancara->menjaganamabaik + $wawancara->salam + $wawancara->motivasi + $wawancara->brgpolutan + $wawancara->brgharam + $wawancara->riwayatpenyakit + $wawancara->ceritasingkat + $wawancara->medkom }}</td>
                      <th class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-sm me-2"
                            href="{{ route('tanya-jawab.show', $wawancara->id) }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                        <form method="POST" action="{{ route('tanya-jawab.destroy', $wawancara->id) }}"
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
                <tfoot>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
  
@endsection