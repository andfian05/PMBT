<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('foto/LG.png')}} " alt="AdminLTE Logo" class="brand-image img-box elevation-3" style="opacity: .8">
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
          <a href="{{ url('/admin') }}" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"  
          data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/admin3') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Test Al-Qur'an</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
     </div>
    <!-- /.sidebar -->
</aside>