@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage sliders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
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
             <h3>Add slider
              <a href="{{route('logos.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>Slider list</a>
             </h3>
              <div class="card-body">
         

          <!-- form start -->
     
        <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    
          <h3>Slider Add Form</h3>
          <div class="row">

            <div class="form-group col-md-6">
            <label for="short_title">Short title</label>
            <input type="text" name="short_title" value="" id="short_title" class="form-control">
            </div>


            <div class="form-group col-md-6">
            <label for="image">Long title</label>
            <input type="text" name="long_title" value="" id="long_title" class="form-control">
            </div>

                 <div class="form-group col-md-6">
            <label for="image">Image</label>
            <input type="file" name="image" value="" id="image" class="form-control">
            </div>

   
         <div class="form-group col-md-6">
        <img id="showImage"  src="{{url('public/upload/no_image.png')}}" style="width: 150px;height: 160px; border:1px solid; " alt="">
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