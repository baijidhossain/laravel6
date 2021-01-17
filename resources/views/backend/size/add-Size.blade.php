@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage size</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">size</li>
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
               <h3>
                @if(isset($editData) )
                Edit size
                @else
                Add size
                @endif
              <a href="{{ route('sizes.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>size list</a>
             </h3>
</div>
              <div class="card-body">
          <!-- form start -->
        <form action="{{(@$editData)?route('sizes.update',$editData->id):route('sizes.store')}}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    
          <h3>
                @if(@$editData)
                size Edit Form
                @else
                size Add Form
                @endif
          </h3>
          <div class="row">
                 <div class="col-md-6">
                   <input type="text" name="name" id="name" value="{{@$editData->name}}" class="form-control">
                 </div>
          </div>



           <button type="submit" class="btn btn-primary mt-4"> {{(@$editData)?"Update":"Submit"}}</button> 

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