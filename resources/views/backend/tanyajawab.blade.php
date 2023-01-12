@extends('backend.index')
@section('content')


<div class="content-wrapper">
 
      <br><br>
      
      <div class="container">
      <div class="card">
          
          <div class="card-body">
            
          <h4 class="text-center">Penilaian Tes Tanya Jawab Calon Mahasantri</h4>
            
          </div>
      </div>
      </div>

   
    <div class="container"> 
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Tes Tanya Jawab Calon Mahasantri</h3>
              </div>
              <div class="card-body">

                <div class="container">
                <div class="card">
        
                  <div class="bg-info">
          
                    <h6 class="text-center mt-2">Data Calon Mahasantri</h6>
          
                  </div>
                </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nama Calon Mahasantri</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Asal Daerah</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="container">
                <div class="card">
        
                  <div class="bg-info">
          
                    <h6 class="text-center mt-2">Data Pewawancara</h6>
          
                  </div>
                </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nama Pewawancara</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="container">
                <div class="card">
        
                  <div class="bg-info">
          
                    <h6 class="text-center mt-2">Tempat Seleksi Tes Tanya Jawab</h6>
          
                  </div>
                </div>
                </div>


                <!-- <div class="form-group">
                  <label class="col-12">Tempat Seleksi</label> 
                  <div class="col-12">
                    <select id="berkas" name="berkas" class="custom-select" required="required">
                        <option value="">-- Pilihan --</option>
                        <option value="1">Virtual</option>
                        <option value="2">PeTIK Jombang</option>
                        <option value="3">YBM PLN</option>
                        
                        
                       
                    </select>
                  </div> 
                </div>  -->

                <div class="form-group">
                    <form action="" method="GET" id="form1" name="form1"  class="col-12">
                        <div class="form-group">
                            <label for="keterangan">Tempat Seleksi</label> 
                            <div class="form-group">
                            <select id="keterangan" name="keterangan" class="custom-select" required="required" onclick="tampilkan()">
                                <option value="">-- Pilihan --</option>
                                <option value="1">Virtual</option>
                                <option value="2">PeTIK Jombang</option>
                                <option value="3">YBM PLN</option>
                            </select>
                            </div>
                        </div> 
                        <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                        <script>
                            function tampilkan(){
                            
                            var pesan=document.getElementById("form1").keterangan.value;
                            var p_kontainer=document.getElementById("container");
                            
                            if (pesan=="1")
                                {
                                    p_kontainer.innerHTML=`<p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Melalui Secara Virtual</b></p>`;
                                }
                            else if (pesan=="2")
                                {
                                    p_kontainer.innerHTML=`<p align="center" class="text-danger"><b>Tes Tanya Jawab Ini Di Lakukan Di PeTIK Jombang</b></p>`;
                                }
                            else if (pesan=="3")
                                {
                                    p_kontainer.innerHTML=`
                                    <div class="form-group">
                                    <label class="col-12">Tempat Seleksi</label> 
                                    <div class="col-12">
                                      <select id="berkas" name="berkas" class="custom-select" required="required">
                                          <option value="">-- Pilihan --</option>
                                          <option value="1">YBM PLN Pusat</option>
                                          <option value="2">YBM PLN Divisi Provinsi Aceh</option>
                                          <option value="3">YBM PLN Divisi Provinsi Sumatera Utara</option>
                                          <option value="4">YBM PLN Divisi Provinsi Sumatera Barat</option>
                                          <option value="5">YBM PLN Divisi Provinsi Riau</option>
                                          <option value="6">YBM PLN Divisi Provinsi Jambi</option>
                                          <option value="7">YBM PLN Divisi Provinsi Sumatera Selatan</option>
                                          <option value="8">YBM PLN Divisi Provinsi Bengkulu</option>
                                          <option value="9">YBM PLN Divisi Provinsi Lampung</option>
                                          <option value="10">YBM PLN Divisi Provinsi Kepulauan Bangka Belitung</option>
                                          <option value="11">YBM PLN Divisi Provinsi Kepulauan Riau</option>
                                          <option value="12">YBM PLN Divisi Provinsi Jawa Barat</option>
                                          <option value="13">YBM PLN Divisi Provinsi Jawa Tengah</option>
                                          <option value="14">YBM PLN Divisi Provinsi D.I Yogyakarta</option>
                                          <option value="15">YBM PLN Divisi Provinsi Jawa Timur</option>
                                          <option value="16">YBM PLN Divisi Provinsi Banten</option>
                                          <option value="17">YBM PLN Divisi Provinsi Bali</option>
                                          <option value="18">YBM PLN Divisi Provinsi Nusa Tenggara Barat</option>
                                          <option value="19">YBM PLN Divisi Provinsi Nusa Tenggara Timur</option>
                                          <option value="20">YBM PLN Divisi Provinsi Kalimantan Barat</option>
                                          <option value="21">YBM PLN Divisi Provinsi Kalimantan Timur</option>
                                          <option value="22">YBM PLN Divisi Provinsi Kalimantan Tengah</option>
                                          <option value="23">YBM PLN Divisi Provinsi Kalimantan Selatan</option>
                                          <option value="24">YBM PLN Divisi Provinsi Kalimantan Utara</option>
                                          <option value="25">YBM PLN Divisi Provinsi Sulawesi Utara</option>
                                          <option value="26">YBM PLN Divisi Provinsi Sulawesi Selatan</option>
                                          <option value="27">YBM PLN Divisi Provinsi Sulawesi Tenggara</option>
                                          <option value="28">YBM PLN Divisi Provinsi Sulawesi Barat</option>
                                          <option value="29">YBM PLN Divisi Provinsi Gorontalo</option>
                                          <option value="30">YBM PLN Divisi Provinsi Maluku</option>
                                          <option value="31">YBM PLN Divisi Provinsi Maluku Utara</option>
                                          <option value="32">YBM PLN Divisi Provinsi Papua Barat</option>
                                          <option value="33">YBM PLN Divisi Provinsi Papus</option>
                                          


                                          
                                          
                                        
                                      </select>
                                    </div> 
                                    </div>
                                    
                                    `;
                                }
                            }
                        </script>
                        <div class="container">
                            <p id="container"></p>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <!-- <button name="submit" type="submit" class="btn btn-primary">Selanjutnya&nbsp; <i class="fa-solid fa-circle-chevron-right"></i></button> -->
                            </div>
                        </div>
                    </form>
                    
                </div>
      


                <!-- Tutup Formulir Keseluruhan -->

                <div class="col-md-12">
                  <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="{{ url('/admin4a') }}">Mulai Tes</a>
                </div>
               

                
                  
                 
              </div>
            </div>
        </div>







  
  </div>
  
@endsection