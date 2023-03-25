@extends('backend.admin.index')
@section('content')

    <div class="content-wrapper">
      <br><br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center">Data Tes Baca dan Hafalan Al-Qur'an Calon Mahasantri</h5>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Tambah Data Penilaian Tes Baca dan Hafalan Al-Qur'an" 
              href="{{ route('baca-quran.create') }}">
              <i class="fa-solid fa-circle-plus"></i>&nbsp;Add Data
            </a>
            <a class="btn btn-danger px-3 mb-2 mb-lg-0" title="Export Data Penilaian Tes Baca dan Hafalan Al-Qur'an" 
              href="{{ route('baca-quran.pdf') }}">
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
                    <th scope="col">No. Handphone</th>
                    <th scope="col">N.Pewawancara</th>
                    <th scope="col">@sortablelink('tmp_seleksi','Temp.Seleksi')</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Nilai Total</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                 
                  @php $no = 1 + (($baca_qurans->currentPage()-1) * $baca_qurans->perPage()); @endphp
                  @foreach ($baca_qurans as $baca_quran)
                    <tr>
                      <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                      <td data-title="Nama Mahasantri">{{ $baca_quran->mahasantri['nama'] }}</td>
                      <td data-title="No. Handphone">{{ $baca_quran->mahasantri['no_hp'] }}</td>
                      <td data-title="N.Pewawancara">{{ $baca_quran->nama_pewawancara }}</td>
                      <td data-title="Tempat Seleksi">{{ $baca_quran->tmp_seleksi }}</td>
                      <td data-title="Lokasi"> {{ $baca_quran->lks_seleksi }}</td>
                      <td data-title="Nilai Total">{{ $baca_quran->nilaibacaan + $baca_quran->tajwidbacaan + $baca_quran->nilaihafalan + $baca_quran->tajwidhafalan + $baca_quran->kemampuanhafalan }}</td>
                      <th class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-sm me-2"
                            href="{{ route('baca-quran.show', $baca_quran->id) }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                        <form method="POST" action="{{ route('baca-quran.destroy', $baca_quran->id) }}"
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

              {!! $baca_qurans->appends(Request::except('page'))->render() !!}
            </div>
          </div>
        </div>
      </div>
  
@endsection