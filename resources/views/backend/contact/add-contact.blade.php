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
              <li class="breadcrumb-item active">Contact</li>
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
              <a href="{{route('contacts.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>Contact list</a>
             </h3>
              <div class="card-body">
         

          <!-- form start -->
     
        <form action="{{route('contacts.store')}}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
                    
          <h3>Contact Add Form</h3>
          <div class="row">

            <div class="form-group col-md-4">
            <label for="address">Address</label>
            <input type="text" name="address" value="" id="address" class="form-control">
            </div>

            <div class="form-group col-md-4">
            <label for="mobile_no">Mobile_no</label>
            <input type="text" name="mobile_no" value="" id="mobile_no" class="form-control">
            </div> 

            <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="text" name="email" value="" id="email" class="form-control">
            </div>

            <div class="form-group col-md-4">
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" value="" id="facebook" class="form-control">
            </div>     

            <div class="form-group col-md-4">
            <label for="twiter">Twiter</label>
            <input type="text" name="twiter" value="" id="twiter" class="form-control">
            </div> 

            <div class="form-group col-md-4">
            <label for="youtube">Youtube</label>
            <input type="text" name="youtube" value="" id="youtube" class="form-control">
            </div>      


            <div class="form-group col-md-4">
            <label for="linkedin">Linkedin</label>
            <input type="text" name="linkedin" value="" id="linkedin" class="form-control">
            </div>

            <div class="form-group col-md-4">
            <label for="  google_plus"> Google_plus</label>
            <input type="text" name=" google_plus" value="" id=" google_plus" class="form-control">
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