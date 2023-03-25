@extends('backend.admin.index')
@section('content')
  <div class="content-wrapper">
    <br><br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="text-center">Tambah Data User Management</h5>
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
          <form action="{{ route('manage-user.store') }}" method="POST" id="form1" name="form1" enctype="multipart/form-data">
            @csrf
            {{-- Biodata Diri --}}
            <div class="container mt-2 col-md-6">
              <div class="card">
                <div class="bg-info">
                  <h6 class="text-center mt-2 ">Data Akun User</h6>
                </div>
              </div>
            </div>
            <div class="row mb-3 mt-6">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label for="nama">Nama Lengkap </label>
                  <input class="form-control" name="nama" id="nama" type="text" required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label for="username">Username </label>
                  <input class="form-control" name="username" id="username" type="text" required />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Password </label>
                  <input class="form-control" name="password" type="password" required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Confirm Password</label>
                  <input class="form-control" name="password_confirmation" type="password" required />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form mb-3 mb-md-0">
                  <label>Email </label>
                  <input class="form-control" name="email" type="email" required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form">
                  <label>Role</label>
                  <div class="form-group -ml-3col-12">
                    <select name="role"  class="custom-select" required>
                      <option value="">--- Pilih Role ---</option>
                      @foreach ($roles as $role)
                        <option value="{{ $role }}">{{ $role }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Photo </label>
              <input class="form-control" name="photo" type="file" />
            </div>
            <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
              <button type="submit" class="btn btn-primary bg-gradient-primary-to-secondary  px-3 mb-2 mb-lg-0"
                style="margin-right: 10px;">Save
              </button>
              <a class="btn btn-success btn-sm-2 px-3 mb-2 mb-lg-0" href="{{ route('manage-user.index') }}">
                Back
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>

@endsection