@extends('backend.index')
@section('content')


<div class="content-wrapper">
 
    
          <br><br>
 
          <div class="container">
          <div class="card">
              
              <div class="card-body">
                
              <h4 class="text-center">Datatables Tanya Jawab Mahasantri</h4>
               
              </div>
          </div>
          </div>


    <div class="container">
    <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Data Calon Mahasantri</h3> -->
                <button class="btn btn-primary px-3 mb-2 mb-lg-0" type="button"><i class="fa-solid fa-circle-plus"></i>&nbsp;Tambah Data</button>
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
               

                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama Mahasantri</th>
                    <th>Asal Domisili</th>
                    <th>Nama Pewawancara</th>
                    <th>Tempat Seleksi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Bakrie Yusuf</td>
                    <td>Jakarta</td>
                    <td>35 Agustus 1945</td>
                    <td>2</td>
                    <td>085714118514</td>
                   
                    <td class="text-center">
                      <a class="btn btn-primary btn-sm-2" href="{{ url('/view2a') }}">View</a>
                      <a class="btn btn-danger btn-sm-2" href="{{ url('/delbio') }}">Delete</a>
                      <a class="btn btn-success btn-sm-2" href="{{ url('/editbio') }}">Update</a>
                    </td> 
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