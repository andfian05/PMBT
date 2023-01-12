@extends('backend.index')
@section('content')


<div class="content-wrapper">
 
   

    <br><br>
 
    <div class="container">
    <div class="card">
        
        <div class="card-body">
          
        <!-- <h4 class="text-center">Form Tambah Data Calon Mahasantri</h4> -->
        <a class="btn btn-success btn-sm-2" href="{{ route('mahasantri.index') }}"><i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back</a>
          
        </div>
    </div>
    </div>

    
   
    <div class="container"> 
    <div class="card card-info">


              <div class="card-header">
                <h3 class="card-title">Data Input Calon Mahasantri</h3>
              </div>
              <div class="card-body">

            <div class="container">
                <div class="card">
        
                 
                </div>
                </div>

                
          <form action="/" method="POST" id="form1" name="form1">
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Tempat Lahir</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input class="form-control" name="" id="" type="date"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Anak Ke-</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">No Handphone</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input class="form-control" name="" id="" type="email"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Pendidikan</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Jurusan</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Cita-Cita</label>
                      <textarea name=""  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Prestasi</label>
                      <textarea name=""  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Penyakit</label>
                      <textarea name=""  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Apakah Anda Perokok?</label> 
                        <div class="col-13">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="perokok" id="perokok_0" type="radio" class="custom-control-input" value="ya" required="required"> 
                            <label for="perokok_0" class="custom-control-label">Ya, Saya Perokok Aktif</label>
                          </div>
                          

                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="perokok" id="perokok_1" type="radio" class="custom-control-input" value="tidak" required="required"> 
                            <label for="perokok_1" class="custom-control-label">Tidak, Saya Tidak Perokok</label>
                          </div>
                          

                        </div>
                      </div> 
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nama Ayah</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nama Ibu</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Pekerjaan Ayah</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Pekerjaan Ibu</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Pendidikan Ayah</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Pendidikan Ibu</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Jumlah Saudara</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">No. Handphone Keluarga</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Jurusan</label> 
                        <div class="col-13">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="jurusan" id="jurusan_0" type="radio" class="custom-control-input" value="ya" required="required"> 
                            <label for="jurusan_0" class="custom-control-label">Ya, Saya Perokok Aktif</label>
                          </div>
                          

                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="jurusan" id="jurusan_1" type="radio" class="custom-control-input" value="tidak" required="required"> 
                            <label for="jurusan_1" class="custom-control-label">Tidak, Saya Tidak Perokok</label>
                          </div>
                          

                        </div>
                    </div> 
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Kota</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Provinsi/Kabupaten</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Kecamatan</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Kelurahan</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Profil PeTIK Jombang</label>
                      <textarea name=""  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                    </div>
                </div>

                

                
                        <div class="form-group col-md-12">
                            <label for="keterangan">Metode Pengiriman Berkas</label> 
                            <div class="form-group -ml-3col-12">
                            <select id="keterangan" name="keterangan" class="custom-select" required="required" onclick="tampilkan()">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                            </select>
                            </div>
                        </div> 
                        <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                        <script>
                            function tampilkan(){
                            
                            var pesan=document.getElementById("form1").keterangan.value;
                            var p_kontainer=document.getElementById("container");
                            
                            if (pesan=="online")
                                {
                                    p_kontainer.innerHTML=`
                                    <div class="form-group">
                                    <label for="" class="col-12 mt-3">Silahkan Upload Semua Berkas Persyaratan Yang Telah Ditentukan Lalu Jadikan Satu File .PDF atau .Word :</label>
                                      <div class="col-12">
                                        <ol>
                                          <li>Surat Keterangan Tidak Mampu</li>
                                          <li>Surat Keterangan Sehat</li>
                                          <li>Kartu Tanda Penduduk Atau Kartu Pelajar</li>
                                          <li>Kartu Keluarga</li>
                                          <li>Salinan Ijazah/Surat Keterangan Siswa Aktif Bersekolah (SMA/SMK/Aliyah)</li>
                                        </ol>
                                      </div>
                                      
                                    </div>
                                    <div class="form-group">
                                      <div class="col-12">
                                        <label for="" class="form-label text-center">Upload Berkas :</label>
                                        <input type="file" class="form-control" id="" multiple>
                                      </div>
                                    </div>
                                    
                                    `;
                                }
                            else if (pesan=="offline")
                                {
                                    p_kontainer.innerHTML=`
                                    <div class="form-group">
                                      <label for="" class="col-12 mt-3 text-center">Alamat Kami : <b>Pesantren Teknologi Informasi Dan Komunikasi YBM PLN, Plosogeneng, Jombang, Kec. Jombang, Jawa Timur 61416.</b> </label>
        
                                    </div>
                                    `;
                                }
                            else if (pesan=="email")
                                {
                                    p_kontainer.innerHTML=`
                                    <div class="form-group">
                                      <label for="" class="col-12 mt-3 text-center">Alamat Email : petikjombang@gmail.com </label>
        
                                    </div>
                                    `;
                                }
                            }
                        </script>

                        <div class="container">
                            <p id="container"></p>
                        </div>

                        

                    </form>

              

                <!-- Tutup Formulir Keseluruhan -->

                <div class="col-md-12">
                  <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="">Tambah Data</a>
                </div>

                <!-- Harus kasih data info pakai extension sweet alert -->
               

                
                  
                 
              </div>
            </div>
        </div>







  
  </div>
  
@endsection