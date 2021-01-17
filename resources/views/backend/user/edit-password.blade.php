@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Password</li>
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
             <h3>Edit password
              <a href="{{route('users.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list" ></i>User List </a>
             </h3>
              <div class="card-body">
         
  <div class="col-md-7">

          <!-- form start -->
                <form action="{{route('profiles.password.update')}}" method="post" id="myform">
                    @csrf
                
                  <h3>Password change Form</h3>

                  <div class="form-group">
                  <label for="Current_password">Current password</label>
                  <input type="password" name="current_password" id="current_password" class="form-control">
                  </div> 

                  <div class="form-group">
                  <label for="">New Password</label>
                  <input type="password" name="new_password" id="new_password" class="form-control">
                  </div>  

                   <div class="form-group">
                   <label for="confirm_password">Confirm Password</label>
                   <input type="password" name="confirm_password" id="confirm_password" class="form-control">
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
<!-- end content-wrapper -->


<!--start input field validation -->
<script>
$(function () {
  $.validator.setDefaults({

  });
  $('#myform').validate({
    rules: {
          current_password: 
          {
            required: true,
          },
          new_password:
           {
            required: true,
            minlength: 6,
          },
          confirm_password: 
          {
            required: true,
            equalTo:'#new_password',
          },
    },
    messages: 
    {
          current_password: 
          {
            required: "Please provide a current password",
          },
          new_password: 
          {
            required: "Please provide a new password",
            minlength: "Your password must be at least 6 characters long",
          },
          confirm_password: 
          {
            required: "Please enter confirm password",
            equalTo: "Confirm password is does not match",
          },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<!--end input field validation -->


@endsection