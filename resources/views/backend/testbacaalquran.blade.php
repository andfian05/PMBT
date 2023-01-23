@extends('backend.index')
@section('content')


<div class="content-wrapper">
 
   

    <br><br>
 
    <div class="container">
    <div class="card">
        
        <div class="card-body">
          
        <h4 class="text-center">Penilaian Tes Baca dan Hafalan Al Qur'an</h4>
          
        </div>
    </div>
    </div>
   
    <div class="container"> 
    <div class="card card-info">


              <div class="card-header">
                <h3 class="card-title">Data Tes Calon Mahasantri</h3>
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

                <div class="form-group">
                  <label class="col-12">Tempat Seleksi</label> 
                  <div class="col-12">
                    <select id="berkas" name="berkas" class="custom-select" required="required">
                        <option value="">-- Pilihan --</option>
                        <option value="1">Virtual</option>
                        <option value="2">PeTIK Jombang</option>
                        <option value="3">YBM PLN</option>
                        
                        
                       
                    </select>
                  </div> 
                </div> 


                <div class="container">
                <div class="card">
        
                  <div class="bg-info">
          
                    <h6 class="text-center mt-2">Penilaian Tes Bacaan Al Qur'an</h6>
          
                  </div>
                </div>
                </div>


                <div class="form-group">
                  <label class="col-12">Surah Al Qur'an Yang Diuji Untuk Bacaan</label> 
                  <div class="col-12">
                    <select id="berkas" name="berkas" class="custom-select" required="required">
                        <option value="">-- Pilihan Surah --</option>
                        <option value="1">Al Fatihah</option>
                        <option value="2">AL Baqarah</option>
                        <option value="3">Ali 'Imran</option>
                        <option value="4">An Nisa</option>
                        <option value="5">Al Ma'idah</option>
                        <option value="6">Al An'am</option>
                        <option value="7">Al A'raf</option>
                        <option value="8">Al Anfal</option>
                        <option value="9">At Taubah</option>
                        <option value="10">Yunus</option>
                        <option value="11">Hud</option>
                        <option value="12">Yusuf</option>
                        <option value="13">Ar Ra'd</option>
                        <option value="14">Ibrahim</option>
                        <option value="15">Al Hijr</option>
                        <option value="16">An Nahl</option>
                        <option value="17">Al Isra</option>
                        <option value="18">Al Kahf</option>
                        <option value="19">Maryam</option>
                        <option value="20">Taha</option>
                        <option value="21">Al Anbiya'</option>
                        <option value="22">Al Hajj</option>
                        <option value="23">Al Mu'munin</option>
                        <option value="24">An Nur</option>
                        <option value="25">Al Furqan</option>
                        <option value="26">Asy Syu'ara</option>
                        <option value="27">An Naml</option>
                        <option value="28">Al Qasas</option>
                        <option value="29">Al 'Ankabut</option>
                        <option value="30">Ar Rum</option>
                        <option value="31">Luqman</option>
                        <option value="32">As Sajdah</option>
                        <option value="33">Al Ahzab</option>
                        <option value="34">Saba'</option>
                        <option value="35">Fatir</option>
                        <option value="36">Yasin</option>
                        <option value="37">As Saffat</option>
                        <option value="38">Sad</option>
                        <option value="39">Az Zumar</option>
                        <option value="40">Gafir</option>
                        <option value="41">Fussilat</option>
                        <option value="42">Asy Syura</option>
                        <option value="43">Az Zuhruf</option>
                        <option value="44">Ad Dukhan</option>
                        <option value="45">Al Jasiyah</option>
                        <option value="46">Al Ahqaf</option>
                        <option value="47">Muhammad</option>
                        <option value="48">Al Fath</option>
                        <option value="49">Al Hujurat</option>
                        <option value="50">Qaf</option>
                        <option value="51">Az Zariyat</option>
                        <option value="52">At Tur</option>
                        <option value="53">An Najm</option>
                        <option value="54">Al Qamar</option>
                        <option value="55">Ar Rahman</option>
                        <option value="56">Al Waqi'ah</option>
                        <option value="57">Al Hadid</option>
                        <option value="58">Al Mujadalah</option>
                        <option value="59">Al Hasyr</option>
                        <option value="60">Al Mumtahanah</option>
                        <option value="61">As Saff</option>
                        <option value="62">Al Jumu'ah</option>
                        <option value="63">Al Munafiqun</option>
                        <option value="64">At Tagabun</option>
                        <option value="65">At Talaq</option>
                        <option value="66">At Tahrim</option>
                        <option value="67">Al Mulk</option>
                        <option value="68">Al Qalam</option>
                        <option value="69">Al Haqqah</option>
                        <option value="70">Al Ma'arij</option>
                        <option value="71">Nuh</option>
                        <option value="72">Al Jinn</option>
                        <option value="73">Al Muzzammil</option>
                        <option value="74">Al Muddassir</option>
                        <option value="75">Al Qiyamah</option>
                        <option value="76">Al Insan</option>
                        <option value="77">Al Mursalat</option>
                        <option value="78">An Naba'</option>
                        <option value="79">An Naziat</option>
                        <option value="80">Abasa</option>
                        <option value="81">At Takwir</option>
                        <option value="82">Al Infitar</option>
                        <option value="83">Al Mutaffifin</option>
                        <option value="84">Al Insyiqaq</option>
                        <option value="85">Al Buruj</option>
                        <option value="86">At Tariq</option>
                        <option value="87">Al A'la</option>
                        <option value="88">Al Gasyiyah</option>
                        <option value="89">Al Fajr</option>
                        <option value="90">Al Balad</option>
                        <option value="91">As Syams</option>
                        <option value="92">Al Lail</option>
                        <option value="93">Ad Dhuha</option>
                        <option value="94">Asy Syarh</option>
                        <option value="95">At Tin</option>
                        <option value="96">Al 'Alaq</option>
                        <option value="97">Al Qadr</option>
                        <option value="98">Al Bayyinah</option>
                        <option value="99">Al Zalzalah</option>
                        <option value="100">Al 'Adiyat</option>
                        <option value="101">Al Qari'ah</option>
                        <option value="102">At Takasur</option>
                        <option value="103">Al 'Asr</option>
                        <option value="104">Al Humazah</option>
                        <option value="105">Al Fil</option>
                        <option value="106">Quraisy</option>
                        <option value="107">Al Ma'un</option>
                        <option value="108">Al Kausar</option>
                        <option value="109">Al Kafirun</option>
                        <option value="110">An Nasr</option>
                        <option value="111">Al Lahab</option>
                        <option value="112">Al Ikhlas</option>
                        <option value="113">Al Falaq</option>
                        <option value="114">An Nas</option>
                    </select>
                  </div> 
                </div> 


                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nilai Kelancaran Membaca Al Qur'an</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nilai Tajwid Dalam Membaca Al Qur'an</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="container">
                <div class="card">
        
                  <div class="bg-info">
          
                    <h6 class="text-center mt-2">Penilaian Tes Hafalan Al Qur'an</h6>
          
                  </div>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-12">Surah Al Qur'an Yang Diuji Untuk Hafalan</label> 
                  <div class="col-12">
                    <select id="berkas" name="berkas" class="custom-select" required="required">
                        <option value="">-- Pilihan Surah --</option>
                        <option value="1">Al Fatihah</option>
                        <option value="2">AL Baqarah</option>
                        <option value="3">Ali 'Imran</option>
                        <option value="4">An Nisa</option>
                        <option value="5">Al Ma'idah</option>
                        <option value="6">Al An'am</option>
                        <option value="7">Al A'raf</option>
                        <option value="8">Al Anfal</option>
                        <option value="9">At Taubah</option>
                        <option value="10">Yunus</option>
                        <option value="11">Hud</option>
                        <option value="12">Yusuf</option>
                        <option value="13">Ar Ra'd</option>
                        <option value="14">Ibrahim</option>
                        <option value="15">Al Hijr</option>
                        <option value="16">An Nahl</option>
                        <option value="17">Al Isra</option>
                        <option value="18">Al Kahf</option>
                        <option value="19">Maryam</option>
                        <option value="20">Taha</option>
                        <option value="21">Al Anbiya'</option>
                        <option value="22">Al Hajj</option>
                        <option value="23">Al Mu'munin</option>
                        <option value="24">An Nur</option>
                        <option value="25">Al Furqan</option>
                        <option value="26">Asy Syu'ara</option>
                        <option value="27">An Naml</option>
                        <option value="28">Al Qasas</option>
                        <option value="29">Al 'Ankabut</option>
                        <option value="30">Ar Rum</option>
                        <option value="31">Luqman</option>
                        <option value="32">As Sajdah</option>
                        <option value="33">Al Ahzab</option>
                        <option value="34">Saba'</option>
                        <option value="35">Fatir</option>
                        <option value="36">Yasin</option>
                        <option value="37">As Saffat</option>
                        <option value="38">Sad</option>
                        <option value="39">Az Zumar</option>
                        <option value="40">Gafir</option>
                        <option value="41">Fussilat</option>
                        <option value="42">Asy Syura</option>
                        <option value="43">Az Zuhruf</option>
                        <option value="44">Ad Dukhan</option>
                        <option value="45">Al Jasiyah</option>
                        <option value="46">Al Ahqaf</option>
                        <option value="47">Muhammad</option>
                        <option value="48">Al Fath</option>
                        <option value="49">Al Hujurat</option>
                        <option value="50">Qaf</option>
                        <option value="51">Az Zariyat</option>
                        <option value="52">At Tur</option>
                        <option value="53">An Najm</option>
                        <option value="54">Al Qamar</option>
                        <option value="55">Ar Rahman</option>
                        <option value="56">Al Waqi'ah</option>
                        <option value="57">Al Hadid</option>
                        <option value="58">Al Mujadalah</option>
                        <option value="59">Al Hasyr</option>
                        <option value="60">Al Mumtahanah</option>
                        <option value="61">As Saff</option>
                        <option value="62">Al Jumu'ah</option>
                        <option value="63">Al Munafiqun</option>
                        <option value="64">At Tagabun</option>
                        <option value="65">At Talaq</option>
                        <option value="66">At Tahrim</option>
                        <option value="67">Al Mulk</option>
                        <option value="68">Al Qalam</option>
                        <option value="69">Al Haqqah</option>
                        <option value="70">Al Ma'arij</option>
                        <option value="71">Nuh</option>
                        <option value="72">Al Jinn</option>
                        <option value="73">Al Muzzammil</option>
                        <option value="74">Al Muddassir</option>
                        <option value="75">Al Qiyamah</option>
                        <option value="76">Al Insan</option>
                        <option value="77">Al Mursalat</option>
                        <option value="78">An Naba'</option>
                        <option value="79">An Naziat</option>
                        <option value="80">Abasa</option>
                        <option value="81">At Takwir</option>
                        <option value="82">Al Infitar</option>
                        <option value="83">Al Mutaffifin</option>
                        <option value="84">Al Insyiqaq</option>
                        <option value="85">Al Buruj</option>
                        <option value="86">At Tariq</option>
                        <option value="87">Al A'la</option>
                        <option value="88">Al Gasyiyah</option>
                        <option value="89">Al Fajr</option>
                        <option value="90">Al Balad</option>
                        <option value="91">As Syams</option>
                        <option value="92">Al Lail</option>
                        <option value="93">Ad Dhuha</option>
                        <option value="94">Asy Syarh</option>
                        <option value="95">At Tin</option>
                        <option value="96">Al 'Alaq</option>
                        <option value="97">Al Qadr</option>
                        <option value="98">Al Bayyinah</option>
                        <option value="99">Al Zalzalah</option>
                        <option value="100">Al 'Adiyat</option>
                        <option value="101">Al Qari'ah</option>
                        <option value="102">At Takasur</option>
                        <option value="103">Al 'Asr</option>
                        <option value="104">Al Humazah</option>
                        <option value="105">Al Fil</option>
                        <option value="106">Quraisy</option>
                        <option value="107">Al Ma'un</option>
                        <option value="108">Al Kausar</option>
                        <option value="109">Al Kafirun</option>
                        <option value="110">An Nasr</option>
                        <option value="111">Al Lahab</option>
                        <option value="112">Al Ikhlas</option>
                        <option value="113">Al Falaq</option>
                        <option value="114">An Nas</option>
                    </select>
                  </div> 
                </div> 
                
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Jumlah Hafalan</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nilai Kelancaran Hafalan Al Qur'an</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Nilai Tajwid Dalam Hafalan Al Qur'an</label>
                      <input class="form-control" name="" id="" type="text"/>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-12">Kemampuan Hafalan Al Qur'an</label> 
                  <div class="col-12">
                    <select id="berkas" name="berkas" class="custom-select" required="required">
                        <option value="">-- Pilihan --</option>
                        <option value="1">Kurang Baik</option>
                        <option value="2">Baik</option>
                        <option value="3">Sangat Baik</option>
                       
                       
                    </select>
                  </div> 
                </div> 


                <!-- Tutup Formulir Keseluruhan -->

                <div class="col-md-12">
                  <a class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0" href=""> Nilai</a>
                </div>

                <!-- Harus kasih data info pakai extension sweet alert -->
               

                
                  
                 
              </div>
            </div>
        </div>







  
  </div>
  
@endsection