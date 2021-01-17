@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-4 offset-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img style="height: 70px;width: 70px;" class="profile-user-img  img-circle"
                       src="{{(!empty($user->image))?url('public/upload/user_image/'.$user->image):url('public/upload/no_image.png')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>
                <p class="text-muted text-center">Address:{{$user->address}}</p>
                    <table class="table table-bordered w-100">
                      <tbody>
                        <tr>
                          <td>Mobile no</td>
                          <td>{{$user->mobile}}</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>{{$user->email}}</td>
                        </tr>
                      </tbody>
                    </table>

             <a href="{{route('profiles.edit')}}" class="btn btn-primary btn-block"><b>Edit profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
     
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection