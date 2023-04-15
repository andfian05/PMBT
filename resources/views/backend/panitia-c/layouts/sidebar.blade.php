
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('/panitia-c') }}" class="brand-link">
      <img src="{{asset('foto/Logo (2).png')}} " alt="" class="brand-image img-box elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PeTIK Jombang</span>
    </a>


    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('foto/profile/no-photo.png')}} " class="img-circle elevation-2" 
            alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/panitia-c') }}" class="d-block">Panitia PMB</a>
        </div>
      </div>

 
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"  
          data-accordion="false">
          <li class="nav-item {{ (Request::is('panitia-c') ? 'menu-open' : '') }}">
            <a href="{{ url('/panitia-c') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ (Request::is('panitia-c/test-wawancara') ? 'menu-open' : '') }}{{ (Request::is('panitia-c/test-wawancara-done') ? 'menu-open' : '') }}">
            <a href="{{ route('test-wawancara.store') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Tes Tanya Jawab</p>
            </a>
          </li>
        </ul>
      </nav>
     
     </div>

</aside>