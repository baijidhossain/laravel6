@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">contact</li>
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
             <h3>Add contact
              <a href="{{route('contacts.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>contact list</a>
             </h3>
              <div class="card-body">
         

          <!-- form start -->
     
        <form action="{{route('contacts.update',$editData->id)}}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    
          <h3>contact Add Form</h3>
          <div class="row">

            <div class="form-group col-md-8">
            <label for="address">address</label>
            <input type="text" name="address" value="{{$editData->address}}" id="address" class="form-control">
            </div>

            <div class="form-group col-md-8">
            <label for="mobile_no">mobile_no</label>
            <input type="text" name="mobile_no" value="{{$editData->mobile_no}}" id="mobile_no" class="form-control">
            </div> 

            <div class="form-group col-md-8">
            <label for="email">email</label>
            <input type="text" name="email" value="{{$editData->email}}" id="email" class="form-control">
            </div>

            <div class="form-group col-md-8">
            <label for="facebook">facebook</label>
            <input type="text" name="facebook" value="{{$editData->facebook}}" id="facebook" class="form-control">
            </div>     

            <div class="form-group col-md-8">
            <label for="twiter">twiter</label>
            <input type="text" name="twiter" value="{{$editData->twiter}}" id="twiter" class="form-control">
            </div> 

            <div class="form-group col-md-8">
            <label for="youtube">youtube</label>
            <input type="text" name="youtube" value="{{$editData->youtube}}" id="youtube" class="form-control">
            </div>         


               <div class="form-group col-md-8">
            <label for="linkedin">Linkedin</label>
            <input type="text" name="linkedin" value="{{$editData->linkedin}}" id="linkedin" class="form-control">
            </div>

            <div class="form-group col-md-8">
            <label for="  google_plus"> google_plus</label>
            <input type="text" name=" google_plus" value="{{$editData->google_plus}}" id=" google_plus" class="form-control">
            </div>


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