
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('foto/graduation-cap-solid.svg')}}" alt="" height="60" width="60">
  </div>


 
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-bars"></i></a>
      </li>
     
    </ul>

   
    <ul class="navbar-nav ml-auto">
    

     
      <li class="nav-item">
        <a class="nav-link" data-widget="" href="#" role="button" 
          onclick="event.preventDefault(); document.getElementById('logout').submit()">
          <i class="fas fa-sign-out"></i>
          {{ __('Logout') }}
        </a>
        <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
      
    </ul>
  </nav>
