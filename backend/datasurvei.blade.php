@extends('backend.index')
@section('content')


<div class="content-wrapper">
 
    
          <br><br>
          <div class="container">
          <div class="card">
              
              <div class="card-body">
                
              <h4 class="text-center">Datatables Survei Mahasantri</h4>
               
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


              <!-- Sudah Responsive -->
              <div class="table-responsive" id="no-more-tables">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mahasantri</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. Handphone</th>
                            <th scope="col">Nama Pewawancara</th>
                            <th scope="col">Nilai Total</th>
                            <th scope="col">Action</th>

                          
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                       
                        <tr>
                            <td scope="row" data-title="No">-</td>
                            <td data-title="Nama Mahasantri">-</td>
                            <td data-title="Email">-</td>
                            <td data-title="No. Handphone">-</td>
                            <td data-title="Nama Pewawancara">-</td>
                            <td data-title="Nilai Total">-</td>
                            <th class="d-flex justify-content-center">
                                <a class="btn btn-primary btn-sm me-2"
                                    href="{{ url('/view2w') }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                                <a class="btn btn-success btn-sm me-2"
                                    href="{{ url('/editbio') }}"><i class="fa-solid fa-pencil"></i> Update</a>
                               
                            </th>
                        </tr>
                      
                        </tr>
                        
                    </tbody>
                </table><br><br>


              </div>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
   

    
  
@endsection