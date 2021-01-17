@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card p-2 ">
             <h3>Edit user
              <a href="{{route('users.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list" ></i>User List </a>
             </h3>
              <div class="card-body">
         
  <div class="col-md-7">
          <!-- form start -->
        <form action="{{route('users.update',$editData->id)}}" method="post" id="myform">
                    @csrf
          <h3>User update  Form</h3>
            <div class="form-group">
              <label for="">User Role</label>
             <select name="usertype" id="usertype" class="form-control">
               <option value="">Select Role</option>
               <option value="Admin" {{($editData->usertype=="Admin")?"selected":""}} >Admin</option>
               <option value="User"  {{($editData->usertype=="User")?"selected":""}}  >User</option>
             </select>
            </div>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" value="{{$editData->name}}" id="name" class="form-control">
            </div>
                  <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" value="{{$editData->email}}" id="email" class="form-control">

                  </div>

                  <button type="submit" class="btn btn-primary">Update</button>
              </form>
              </div>

              </div><!-- /.card-body -->
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