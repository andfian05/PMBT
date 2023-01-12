@extends('backend.index')
@section('content')


    <div class="content-wrapper">
      
          <br><br>
 
          <div class="container">
          <div class="card">
              
              <div class="card-body">
                
              <h4 class="text-center">View Calon Mahasantri</h4>
               
              </div>
          </div>
          </div>



    <div class="container">
    <div class="card">
              <div class="card-header">
                
                <a class="btn btn-success btn-sm-2" href="{{ route('mahasantri.index') }}"><i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back</a>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
               

                  <thead>
                  <tr>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Anak Ke-</th>
                    <th>No Handphone</th>
                    <th>Email</th>
                    <th>Alamat</th>
                   
                    <th>Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Tahun Lulus</th>
                    <th>Cita-Cita</th>
                    <th>Prestasi</th>
                    <th>Penyakit</th>
                    <th>Perokok</th>

                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Pendidikan Ayah</th>
                    <th>Pendidikan Ibu</th>
                    <th>Jumlah Saudara</th>
                    <th>No.Handphone Keluarga</th>

                    <th>Jurusan</th>

                    <th>Provnsi</th>

                    <th>Informasi</th>

                    <th>Profil</th>

                    <th>Pengiriman</th>
                    <th>Scan Berkas</th>

                   
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                   
                    <td>{{ $row->nama  }}</td>
                    <td>{{ $row->tmp_lahir  }}</td>
                    <td>{{ date('d F Y', strtotime($row->tgl_lahir)) }}</td>
                    <td>{{ $row->anak  }}</td>
                    <td>{{ $row->no_hp  }}</td>
                    <td>{{ $row->email  }}</td>
                    <td>{{ $row->alamat  }}</td>

                    <td>{{ $row->pendidikan->n_sekolah  }}</td>
                    <td>{{ $row->pendidikan->jurusan  }}</td>
                    <td>{{ $row->pendidikan->thn_lulus  }}</td>
                    <td>{{ $row->pendidikan->citaCita  }}</td>
                    <td>{{ $row->pendidikan->prestasi  }}</td>
                    <td>{{ $row->pendidikan->penyakit  }}</td>
                    <td>{{ $row->pendidikan->perokok  }}</td>

                    <td>{{ $row->keluarga->namaAyah  }}</td>
                    <td>{{ $row->keluarga->namaIbu  }}</td>
                    <td>{{ $row->keluarga->pkjAyah  }}</td>
                    <td>{{ $row->keluarga->pkjIbu  }}</td>
                    <td>{{ $row->keluarga->pdkAyah  }}</td>
                    <td>{{ $row->keluarga->pdkIbu  }}</td>
                    <td>{{ $row->keluarga->jml_saudara  }}</td>
                    <td>{{ $row->keluarga->hpKeluarga  }}</td>

                    <td>{{ $row->jurusan->namaJurusan  }}</td>

                    <td>{{ $row->provinsi->namaProvinsi  }}</td>

                    <td>{{ $row->informasi->mediaInformasi  }}</td>

                    <td>{{ $row->profil->pengetahuanprofil  }}</td>

                    <td>{{ $row->berkas->pengiriman  }}</td>
                    <!-- nampilin berkasnya belum bisa -->
                    <td>{{ $row->berkas->scanBerkas  }}</td>
                   
                   

                  </tr>
                  
                 
                  
                  
                  </tbody>
                  <tfoot>
                  <!-- <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> -->
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
   

    
  
@endsection