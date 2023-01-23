@extends('backend.admin.index')
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

        <!-- Main content -->
        <!-- <section class="content"> -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-mt-2 md-12">


                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @empty($user->photo)
                                    <img src="{{asset('foto/profile/no-photo.png')}}" style="height: 10rem;"
                                        class="img-circle elevation-2" alt="Image {{ $user->username }}">
                                    @else
                                    <img src="{{asset('foto/profile')}}/{{ $user->photo }}" style="height: 10rem;"
                                        class="img-circle elevation-2" alt="Image {{ $user->username }}">
                                    @endempty
                                </div>

                                <h3 class="profile-username text-center">{{ $user->nama }}</h3>

                                <p class="text-muted text-center">{{ $user->role }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Username</b> <a class="float-right">{{ $user->username }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                                    </li>
                                   
                                </ul>

                                <a href="{{ route('manage-user.index') }}" class="btn btn-success btn-block"><b>Back</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        <!-- </section> -->
        <!-- /.content -->


    </div>
</div>

    @endsection
