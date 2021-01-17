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
              <div class="card-header">           
                <h3>User List
              <a href="{{route('users.add')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-plus-circle" ></i>Add user </a>
             </h3>
           </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl.</th>
                    <th>id</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($allData as $key => $user)
                 <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$user->id}}</td>
                 <td>{{$user->usertype}}</td>
                 <td>{{$user->name}}</td>
                 <td>{{$user->email}}</td>
                 <td> 
                  <a title="Edit" class="btn btn-sm btn-primary" href="{{route('users.edit',$user->id)}}"> <i class="fa fa-edit"></i> </a>
                  <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('users.delete',$user->id)}}"> <i class="fa fa-trash"></i> </a>
                   </td>
               
               </tr>
                    @endforeach
                  </tbody>

                </table>


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