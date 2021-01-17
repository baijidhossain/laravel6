@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage brand</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">brand</li>
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
               <h3>Add brand
              <a href="{{route('brands.update')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>brand list</a>
             </h3>
</div>
              <div class="card-body">
          <!-- form start -->
        <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    
          <h3>brand Add Form</h3>
          <div class="row">
   <div class="col-md-6">
     <input type="text" name="name" id="name" value="{{$editData->name}}" class="form-control">
   </div>
          </div>



           <button type="submit" class="btn btn-primary">Submit</button> 

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