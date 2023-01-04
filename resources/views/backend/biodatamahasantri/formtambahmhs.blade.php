@extends('backend.index')
@section('content')


<div class="content-wrapper">



    <br><br>

    <div class="container">
        <div class="card">

            <div class="card-body">


                <a class="btn btn-success btn-sm-2" href="{{ route('mahasantri.index') }}"><i
                        class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back</a>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="card card-info">


            <div class="card-header">
                <h3 class="card-title">Data Input Calon Mahasantri</h3>
            </div>
            <div class="card-body">


                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>Input Salah!<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif



                <form class="row g-3" method="POST" action="{{ route('mahasantri.store') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- <div class="col-12">
                        <label class="form-label">Nama Calon Mahasantri</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            placeholder="" value="nama">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> -->


                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input class="form-control" name="nama" id="" type="text" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Tempat Lahir</label>
                                    <input class="form-control" name="tmp_lahir" id="" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Tanggal Lahir</label>
                                    <input class="form-control" name="tgl_lahir" id="" type="date" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Anak Ke-</label>
                            <input class="form-control" name="anak" id="" type="text" />
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">No. Handphone</label>
                                    <input class="form-control" name="no_hp" id="" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Email</label>
                                    <input class="form-control" name="email" id="" type="email" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Pendidikan</label>
                                    <input class="form-control" name="pendidikan_id" id="" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Jurusan</label>
                                    <input class="form-control" name="jurusan_id" id="" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Cita-Cita</label>
                                    <textarea name="citaCita" class="form-control" id="" cols="12" rows="6"
                                        required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Prestasi</label>
                                    <textarea name="prestasi" class="form-control" id="" cols="12" rows="6"
                                        required="required"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Penyakit</label>
                            <textarea name="penyakit" class="form-control" id="" cols="12" rows="6"
                                required="required"></textarea>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-13">Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang?</label>
                        <div class="col-13">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="1">
                                <label for="" class="custom-control-label">Website</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="2">
                                <label for="info_1" class="custom-control-label">Alumni Pesantren PeTIK</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="3">
                                <label for="" class="custom-control-label">YBM PLN</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="4">
                                <label for="" class="custom-control-label">Keluarga / Sanak Saudara</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="5">
                                <label for="" class="custom-control-label">Media Sosial (Instagram Atau
                                    Facebook)</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="6">
                                <label for="" class="custom-control-label">Sekolah</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="7">
                                <label for="" class="custom-control-label">Kegiatan (Event)</label>
                            </div>
                            <br />
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="mediaInformasi" id="" type="radio" required="required"
                                    class="custom-control-input" value="8">
                                <label for="" class="custom-control-label">Teman / Sahabat</label>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Nama Ayah</label>
                                    <input class="form-control" name="namaAyah" id="" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="namaIbu">Nama Ibu</label>
                                    <input class="form-control" name="namaIbu" id="namaIbu" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Pekerjaan Ayah</label>
                                    <input class="form-control" name="pkjAyah" id="" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Pekerjaan Ibu</label>
                                    <input class="form-control" name="pkjIbu" id="" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Pendidikan Ayah</label>
                                    <input class="form-control" name="pdkAyah" id="" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Pendidikan Ibu</label>
                                    <input class="form-control" name="pdkIbu" id="" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Jumlah Saudara Kandung</label>
                                    <input class="form-control" name="jml_saudara" id="" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">No. Handphone Keluarga</label>
                                    <input class="form-control" name="hpkeluarga" id="" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Provinsi</label>
                                    <select id="" name="provinsi" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="">Via Online</option>
                                        <option value="">Via Offline Atau Kurir</option>
                                        <option value="">Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Kota/Kabupaten</label>
                                    <select id="" name="provinsi" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="">Via Online</option>
                                        <option value="">Via Offline Atau Kurir</option>
                                        <option value="">Email</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form mb-3 mb-md-0">
                                    <label for="">Kecamatan</label>
                                    <select id="" name="kecamatan" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="">Via Online</option>
                                        <option value="">Via Offline Atau Kurir</option>
                                        <option value="">Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <label for="">Kelurahan</label>
                                    <select id="" name="kelurahan" class="custom-select" required="required">
                                        <option value="">Pilihan</option>
                                        <option value="">Via Online</option>
                                        <option value="">Via Offline Atau Kurir</option>
                                        <option value="">Email</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Profil PeTIK Jombang</label>
                            <textarea name="pengetahuanprofil" class="form-control" id="" cols="12" rows="6"
                                required="required"></textarea>
                        </div>
                    </div>


                    <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                        <button type="submit"
                            class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Simpan Data</button>
                        <button type="reset"
                            class="btn btn-secondary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Batal Simpan</button>
                    </div>

                </form>

















































































































                <!-- 

               <form action="{{ route('mahasantri.store') }}" method="POST">
                    @csrf

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" name="nama" id="nama" type="text" />
                        </div>
                    </div>

                   <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">Tempat Lahir</label>
                             <input class="form-control" name="tmp_lahir" id="" type="text"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="">Tanggal Lahir</label>
                              <input class="form-control" name="tgl_lahir" id="" type="date"/>
                          </div>
                        </div>                           
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Anak Ke-</label>
                      <input class="form-control" name="anak" id="" type="text"/>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">No. Handphone</label>
                             <input class="form-control" name="no_handphone" id="" type="text"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="">Email</label>
                              <input class="form-control" name="email" id="" type="email"/>
                          </div>
                        </div>                           
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">Pendidikan</label>
                             <input class="form-control" name="pendidikan" id="" type="text"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="">Jurusan</label>
                              <input class="form-control" name="jurusan" id="" type="text"/>
                          </div>
                        </div>                           
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                            <label for="">Cita-Cita</label>
                            <textarea name="citaCita"  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                            <label for="">Prestasi</label>
                            <textarea name="prestasi"  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                          </div>
                        </div>                           
                    </div>
                 </div>


                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Penyakit</label>
                      <textarea name="penyakit"  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-12">
                        <label class="col-13">Darimana Anda Mengetahui Informasi Mengenai PeTIK Jombang?</label> 
                        <div class="col-13">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="" type="radio" required="required" class="custom-control-input" value="1"> 
                                    <label for="info_0" class="custom-control-label">Website</label>
                                </div>
                                <br/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="info_1" type="radio" required="required" class="custom-control-input" value="2"> 
                                    <label for="info_1" class="custom-control-label">Alumni Pesantren PeTIK</label>
                                </div>
                                <br/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="info_2" type="radio" required="required" class="custom-control-input" value="3"> 
                                    <label for="info_2" class="custom-control-label">YBM PLN</label>
                                </div>
                                <br/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="info_3" type="radio" required="required" class="custom-control-input" value="4"> 
                                    <label for="info_3" class="custom-control-label">Keluarga / Sanak Saudara</label>
                                </div>
                                <br/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="info_4" type="radio" required="required" class="custom-control-input" value="5"> 
                                    <label for="info_4" class="custom-control-label">Media Sosial (Instagram Atau Facebook)</label>
                                </div>
                                <br/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="info_5" type="radio" required="required" class="custom-control-input" value="6"> 
                                    <label for="info_5" class="custom-control-label">Sekolah</label>
                                </div>
                                <br/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="info_6" type="radio" required="required" class="custom-control-input" value="7"> 
                                    <label for="info_6" class="custom-control-label">Kegiatan (Event)</label>
                                </div>
                                <br/>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="info" id="info_7" type="radio" required="required" class="custom-control-input" value="8"> 
                                    <label for="info_7" class="custom-control-label">Teman / Sahabat</label>
                                </div>
                        </div>
                        </div> 

              

                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">Nama Ayah</label>
                             <input class="form-control" name="namaAyah" id="" type="text"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="namaIbu">Nama Ibu</label>
                              <input class="form-control" name="namaIbu" id="namaIbu" type="text"/>
                          </div>
                        </div>                           
                    </div>
                 </div>


                 <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">Pekerjaan Ayah</label>
                             <input class="form-control" name="pkjAyah" id="" type="text"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="pkjibu">Pekerjaan Ibu</label>
                              <input class="form-control" name="pkjibu" id="pkjibu" type="text"/>
                          </div>
                        </div>                           
                    </div>
                 </div>


                 <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">Pendidikan Ayah</label>
                             <input class="form-control" name="pdkAyah" id="" type="text"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="pdkIbu">Pendidikan Ibu</label>
                              <input class="form-control" name="pdkIbu" id="" type="text"/>
                          </div>
                        </div>                           
                    </div>
                 </div>

                 <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                              <label for="">Jumlah Saudara Kandung</label>
                              <input class="form-control" name="jml_saudara" id="" type="text"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="">No. Handphone Keluarga</label>
                              <input class="form-control" name="nokeluarga" id="" type="text"/>
                          </div>
                        </div>                           
                    </div>
                 </div>


            
                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">Provinsi</label>
                             <select id="" name="provinsi" class="custom-select" required="required">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                             </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="">Kota/Kabupaten</label>
                              <select id="" name="provinsi" class="custom-select" required="required">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                             </select>
                          </div>
                        </div>                           
                    </div>
                 </div>

                 <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form mb-3 mb-md-0">
                             <label for="">Kecamatan</label>
                             <select id="" name="kecamatan" class="custom-select" required="required">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                             </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form">
                              <label for="">Kelurahan</label>
                              <select id="" name="kelurahan" class="custom-select" required="required">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                             </select>
                          </div>
                        </div>                           
                    </div>
                 </div>

                


               <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Profil PeTIK Jombang</label>
                      <textarea name="profil"  class="form-control" id="" cols="12" rows="6" required="required"></textarea>
                    </div>
                </div>   -->






                <!-- <div class="col-md-12">
                    <div class="form-group">
                        <label>Jurusan Yang Kamu Minati?</label> 
                        <div class="col-13">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="PPL" id="" type="radio" class="custom-control-input" value="ya" required="required"> 
                            <label for="" class="custom-control-label">Pengembangan Perangkat Lunak</label>
                          </div>
                          

                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="DM" id="" type="radio" class="custom-control-input" value="tidak" required="required"> 
                            <label for="" class="custom-control-label">Digital Marketing</label>
                          </div>
                          

                        </div>
                    </div> 
                </div> -->




                <!-- <div class="col-md-12">
                    <div class="form-group">
                        <label>Perokok</label> 
                        <div class="col-13">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="PPL" id="" type="radio" class="custom-control-input" value="ya" required="required"> 
                            <label for="" class="custom-control-label">Ya, Saya Perokok</label>
                          </div>
                          

                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="DM" id="" type="radio" class="custom-control-input" value="tidak" required="required"> 
                            <label for="" class="custom-control-label">Tidak, Saya Tidak Perokok</label>
                          </div>
                          

                        </div>
                    </div> 
                </div> 

                    <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                        <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Simpan Data</button>
                        <button type="reset"
                            class="btn btn-secondary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                            style="margin-right: 10px;">Batalkan</button>
                    </div> 


                                 
                </form>

                    <form id="form1" name="form1">
                
                        <div class="form-group col-md-12">
                            <label for="keterangan">Metode Pengiriman Berkas</label> 
                            <div class="form-group -ml-3col-12">
                            <select id="metode" name="" class="custom-select" required="required" onclick="tampilkan()">
                                <option value="">Pilihan</option>
                                <option value="online">Via Online</option>
                                <option value="offline">Via Offline Atau Kurir</option>
                                <option value="email">Email</option>
                            </select>
                            </div>
                        </div> 
                        

                        <div class="container">
                            <p id="container"></p>
                        </div>

                        

                    </form>

                    <!-- Logic Script Menampilkan pesan Saat Salah Satu Option dipilih  -->
                <script>
                    function tampilkan() {

                        var pesan = document.getElementById("form1").keterangan.value;
                        var p_kontainer = document.getElementById("container");

                        if (pesan == "online") {
                            p_kontainer.innerHTML = `
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
                        } else if (pesan == "offline") {
                            p_kontainer.innerHTML = `
                                    <div class="form-group">
                                    <div>
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63287.4495946235!2d112.1531045436859!3d-7.524085847449887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783fab1dc80271%3A0x8c4c1651240d8951!2sPesantren%20PeTIK%20II%20Jombang%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1672736092825!5m2!1sid!2sid" width="100%" height="200%" style="border:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                      <label for="" class="col-12 mt-3 text-center">Alamat Kami : <b>Pesantren Teknologi Informasi Dan Komunikasi YBM PLN, Plosogeneng, Jombang, Kec. Jombang, Jawa Timur 61416.</b> </label>
                                    
        
                                    </div>
                                    `;
                        } else if (pesan == "email") {
                            p_kontainer.innerHTML = `
                                    <div class="form-group">
                                      <label for="" class="col-12 mt-3 text-center">Alamat Email : petikjombang@gmail.com </label>
        
                                    </div>
                                    `;
                        }
                    }

                </script>




                <!-- Tutup Formulir Keseluruhan -->

                <!-- <div class="col-md-12">
                  <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href=""  type="submit">Tambah Data</a>
                  <a class="btn btn-secondary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href="">Batal</a>
                </div> -->

                <!-- <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                    <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary px-3 mb-2 mb-lg-0" style="margin-right: 10px;">Simpan Data</button>
                    <button type="reset" class="btn btn-secondary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" style="margin-right: 10px;">Batalkan</button>
                </div> -->

                <!-- Harus kasih data info pakai extension sweet alert -->





            </div>
        </div>
    </div>








</div>

@endsection
