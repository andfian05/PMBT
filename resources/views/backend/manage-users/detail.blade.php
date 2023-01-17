@extends('backend.index')
@section('content')
  <div class="content-wrapper">
    <br><br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center">Detail Data User</h4>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <a class="btn btn-success btn-sm-2" href="{{ route('manage-user.index') }}">
            <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Back
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card card-info">
        <div class="card-body">
          <div class="row mb-3 mt-6">
            <div class="col-md-2">
              @empty($user->photo)
                <img src="{{asset('foto/profile/no-photo.png')}}" 
                  style="height: 10rem;" 
                  class="img-circle elevation-2" alt="Image {{ $user->username }}">
              @else
                <img src="{{asset('foto/profile')}}/{{ $user->photo }}" 
                  style="height: 10rem;" 
                  class="img-circle elevation-2" alt="Image {{ $user->username }}">
              @endempty
            </div>
            <div class="col-md-10">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-2">Nama Lengkap</div>
                    <div class="col-md-10">: {{ $user->nama }}</div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-2">Username</div>
                    <div class="col-md-10">: {{ $user->username }}</div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-2">Email</div>
                    <div class="col-md-10">: {{ $user->email }}</div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-md-2">Role</div>
                    <div class="col-md-10">: {{ $user->role }}</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection