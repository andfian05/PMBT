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



    <div class="container">
    <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Data Calon Mahasantri</h3> -->
                <button class="btn btn-primary px-3 d-grid gap-2" type="button"><i class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data</button>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
               

                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <!-- <th>No.Hp</th>
                    <th>Email</th> -->
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
                    <!-- <td>085714118514</td> -->
                   
                    <td class="text-center">
                      <a class="btn btn-primary btn-sm-2" href="{{ url('/viewbio') }}">View</a>
                      {{-- <!-- <a class="btn btn-primary btn-sm-2" href="{{ route('mahasantri.show', $row->id) }}">View</a> --> --}}
                      <a class="btn btn-danger btn-sm-2" href="{{ url('/delbio') }}">Delete</a>
                      <a class="btn btn-success btn-sm-2" href="{{ url('/editbio') }}">Update</a>
                      
                    </td> 
                   
                  </tr>
                  
                  @endforeach
                  
                  
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