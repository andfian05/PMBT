@extends('backend.index')
@section('content')


    <div class="content-wrapper">
      
          <br><br>
 
          <div class="container">
          <div class="card">
              
              <div class="card-body">
                
              <h4 class="text-center">View Hasil Seleksi Mahasantri</h4>
               
              </div>
          </div>
          </div>



    <div class="container">
    <div class="card">
              <div class="card-header">
                
                <a class="btn btn-success btn-sm-2" href="{{ url('/adminS1') }}"><i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back</a>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
               

                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama Mahasantri</th>
                    <th>Diterima</th>
                    <th>Ditolak</th>
                    <th>Rekomendasi</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Bakrie Yusuf</td>
                    <td>Jakarta</td>
                    <td>35 Agustus 1945</td>
                    <td>Jakarta</td>
                    <td>35 Agustus 1945</td>
                   

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