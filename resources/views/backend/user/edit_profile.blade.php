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
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card p-2 ">
             <h3>Edit profile
              <a href="{{route('profiles.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>Your profile</a>
             </h3>
              <div class="card-body">
         

          <!-- form start -->
     
        <form action="{{route('profiles.update')}}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    
          <h3>Profile update  Form</h3>
          <div class="row">
                        <div class="form-group col-md-6">
              <label for="">Name</label>
              <input type="text" name="name" value="{{$editData->name}}" id="name" class="form-control">
            </div>

              <div class="form-group col-md-6">
            <label for="">Email</label>
            <input type="email" name="email" value="{{$editData->email}}" id="email" class="form-control">
            </div>

              <div class="form-group col-md-6">
            <label for="">Address</label>
            <input type="text" name="address" value="{{$editData->address}}" id="address" class="form-control">
            </div>

            <div class="form-group col-md-6">
            <label for="">Mobile no</label>
            <input type="text" name="mobile" value="{{$editData->mobile}}" id="mobile" class="form-control">
            </div>

   
                        <div class="form-group col-md-6">
              <label for="">User gender</label>
             <select name="gender" id="gender" class="form-control">
               <option value="">Select gender</option>
               <option value="male" {{($editData->gender=="male")?"selected":""}} >male</option>
               <option value="femle"  {{($editData->gender=="femle")?"selected":""}}>femle</option>
             </select>
            </div>
          </div>

            <div class="form-group col-md-6">
            <label for="image">Image</label>
            <input type="file" name="image" value="" id="image" class="form-control">
            </div>

         <div class="form-group col-md-6">
        <img id="showImage"  src="{{(!empty($editData->image))?url('public/upload/user_image/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px;height: 160px; border:1px solid; " alt="">
        </div>
           <button type="submit" class="btn btn-primary">Update</button> 

              </form>
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