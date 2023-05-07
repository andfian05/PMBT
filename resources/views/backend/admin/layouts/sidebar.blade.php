
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
      <img src="{{asset('foto/Logo (2).png')}} " alt="AdminLTE Logo" class="brand-image img-box elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PeTIK Jombang</span>
    </a>


    <div class="sidebar">
  
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('foto/profile/no-photo.png')}} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/admin') }}" class="d-block">Administrator</a>
        </div>
      </div>

 
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{ (Request::is('admin') ? 'menu-open' : '') }}">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item 
            {{ (Request::is('admin/manage-user') ? 'menu-open' : '') }}
            {{ (Request::is('admin/manage-user/create') ? 'menu-open' : '') }}
            {{ (Request::is('admin/manage-user/{manage_user}') ? 'menu-open' : '') }}
            {{ (Request::is('admin/manage-user{manage_user}/edit') ? 'menu-open' : '') }}">
            <a href="{{ route('manage-user.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user-group"></i>
              <p>
                Manage Users
              </p>
            </a>
          </li>
         
        
          <li class="nav-header">Master Data</li>
          
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Data Global Seleksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item 
                {{ (Request::is('admin/mahasantri') ? 'menu-open' : '') }}
                {{ (Request::is('admin/mahasantri/create') ? 'menu-open' : '') }}
                {{ (Request::is('admin/mahasantri/{mahasantri}') ? 'menu-open' : '') }}
                {{ (Request::is('admin/mahasantri{mahasantri}/edit') ? 'menu-open' : '') }}">
                <a href="{{ route('mahasantri.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasantri</p>
                </a>
              </li>
              <li class="nav-item
                {{ (Request::is('admin/survei') ? 'menu-open' : '') }}
                {{ (Request::is('admin/survei/create') ? 'menu-open' : '') }}
                {{ (Request::is('admin/survei/{survei}') ? 'menu-open' : '') }}">
                <a href="{{ route('survei.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Survei</p>
                </a>
              </li>
              <li class="nav-item 
              {{ (Request::is('admin/baca-quran') ? 'menu-open' : '') }}
              {{ (Request::is('admin/baca-quran/create') ? 'menu-open' : '') }}
              {{ (Request::is('admin/baca-quran/{baca_quran}') ? 'menu-open' : '') }}">
                <a href="{{ route('baca-quran.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bacaan Al Qur'an</p>
                </a>
              </li>
              <li class="nav-item
              {{ (Request::is('admin/tanya-jawab') ? 'menu-open' : '') }}
              {{ (Request::is('admin/tanya-jawab/create') ? 'menu-open' : '') }}
              {{ (Request::is('admin/tanya-jawab/{tanya_jawab}') ? 'menu-open' : '') }}">
                <a href="{{ route('tanya-jawab.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tanya Jawab</p>
                </a>
              </li>
              <li class="nav-item
              {{ (Request::is('admin/potensi-akademik') ? 'menu-open' : '') }}">
                <a href="{{ route('potensi-akademik.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Potensi Akademik</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Hitung Seleksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item
              {{ (Request::is('admin/perhitungan') ? 'menu-open' : '') }}
              {{ (Request::is('admin/perhitungan-done') ? 'menu-open' : '') }}">
                <a href="{{ route('perhitungan.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perhitungan</p>
                </a>
              </li>
              
           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Hasil Seleksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item
              {{ (Request::is('admin/dtr') ? 'menu-open' : '') }}
              {{ (Request::is('admin/dtr/{dtr}') ? 'menu-open' : '') }}">
                <a href="{{ route('dtr.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Seleksi</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
 
     </div>

</aside>