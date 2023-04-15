@extends('backend.admin.index')
@section('content')

    <div class="content-wrapper">
      <br><br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center">Data Survei Calon Mahasantri</h5>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Tambah Data Survei" href="{{ route('survei.create') }}">
              <i class="fa-solid fa-circle-plus"></i>&nbsp;Add Data
            </a>
            <a class="btn btn-danger px-3 mb-2 mb-lg-0" title="Export Data Penilaian Survei" href="{{ route('survei.pdf') }}">
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
                    <!-- <th scope="col">Lokasi</th> -->
                    <th scope="col">Nilai Total</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
               
                
                  @php $no = 1 + (($surveis->currentPage()-1) * $surveis->perPage()); @endphp
                  @foreach ($surveis as $survei)
                    <tr>
                      <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                      <td data-title="Nama Mahasantri">{{ $survei->mahasantri['nama'] }}</td>
                      <td data-title="No. Handphone">{{ $survei->mahasantri['no_hp'] }}</td>
                      <td data-title="N.Pewawancara">{{ $survei->nama_pewawancara }}</td>
                      <td data-title="Tempat Seleksi">{{ $survei->tmp_seleksi }}</td>
                      <!-- <td data-title="Lokasi"> {{ $survei->lks_seleksi }}</td> -->
                      <td data-title="Nilai Total">{{ $survei->izinbeasiswa + $survei->statuskel + $survei->pendkel + $survei->usiapend + $survei->kesehatankel + $survei->jenispekrj + $survei->statusrmh + $survei->luasrmh + $survei->dindingrmh + $survei->ataprmh + $survei->lantairmh + $survei->alatmsk + $survei->perabotan + $survei->sumberair + $survei->mck + $survei->penerangan + $survei->lokasirmh + $survei->tataletak + $survei->miliktanah + $survei->harta }}</td>
                      <th class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-sm me-2"
                            href="{{ route('survei.show', $survei->id) }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                        <form method="POST" action="{{ route('survei.destroy', $survei->id) }}"
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

              {!! $surveis->appends(Request::except('page'))->render() !!}
            </div>
          </div>
        </div>
      </div>
  
@endsection