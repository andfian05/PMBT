@extends('backend.admin.index')
@section('content')
    <div class="col-8">
      @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
    </div>

    <div class="content-wrapper">
      <br><br>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center">Data User</h4>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-header">
            <a class="btn btn-primary px-3 mb-2 mb-lg-0" title="Tambah User" href="{{ route('manage-user.create') }}">
              <i class="fa-solid fa-circle-plus"></i>&nbsp;Add Data
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive" id="no-more-tables">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th> 
                  </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach($users as $user)
                    <tr>
                      <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                      <td data-title="Nama Lengkap">{{ $user->nama }}</td>
                      <td data-title="Username">{{ $user->username }}</td>
                      <td data-title="Email">{{ $user->email }}</td>
                      <td data-title="Role">{{ $user->role }}</td>
                      <th class="d-flex justify-content-center">
                        <a class="btn btn-primary btn-sm me-2"
                            href="{{ route('manage-user.show', $user->id) }}"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                        <a class="btn btn-success btn-sm me-2"
                            href="{{ route('manage-user.edit', $user->id) }}"><i class="fa-solid fa-pencil"></i> Update</a>
                        <form method="POST" action="{{ route('manage-user.destroy', $user->id) }}"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete</button>
                        </form>
                      </th>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection