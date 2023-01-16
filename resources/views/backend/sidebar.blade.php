<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('foto/LG.png')}}" alt="AdminLTE Logo" class="brand-image img-box elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PeTIK II Jombang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/logout') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
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
              <li class="nav-item">
                <a href="{{ route('mahasantri.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasantri</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('/admin2w') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Survei</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin2b') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bacaan Al Qur'an</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin2a') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tanya Jawab</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Data Perhitungan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/perhitungan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hitung Tes</p>
                </a>
              </li>
             
           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Lulus Seleksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/adminS1') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DTR</p>
                </a>
              </li>
             
           
            </ul>
          </li>
          
          
          <li class="nav-header">Optional</li>
          <li class="nav-item">
            <a href="{{ url('/admin5') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Test Survei</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin3') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Test Al Qur'an</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin4') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Test Tanya Jawab</p>
            </a>
          </li>
         
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
     </div>
    <!-- /.sidebar -->
</aside>