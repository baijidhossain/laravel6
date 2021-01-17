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
                  <div class="card-header">
                   <h3>contact List
                  @if($count<1) 
                       <a href="{{route('contacts.add')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-plus-circle" ></i>Add contact</a>
                        @else
                        <h5 class="text-right text-primary">Address already added</h5>
                  @endif
                  </h3>
                  </div>
              <div class="card-body">
                <table id="example1" class="table  table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sl.</th>
                    <th>Address</th>
                    <th>Mobile no</th>
                    <th>Email</th>
                    <th>Facebook</th>
            
                    <th width="12%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($allData as $key => $contact)
                 <tr>
                 <td>{{$key+1}}</td>
                  <td> {{$contact->address}} </td>
                  <td> {{$contact->mobile_no}} </td>
                  <td> {{$contact->email}} </td>
                  <td> {{$contact->facebook}} </td>
          
                 <td class="d-flex "> 
                  <a title="Edit" class="btn btn-sm btn-primary mr-1" href="{{route('contacts.edit',$contact->id)}}"> <i class="fa fa-edit"></i> </a>
                  <a title="Delete" id="delete" class="btn btn-sm btn-danger mr-1" href="{{route('contacts.delete',$contact->id)}}"> <i class="fa fa-trash"></i> </a> 

                  <a title="Details"  class="btn btn-sm btn-primary" href="#"  data-toggle="modal" data-target="#myModal"> <i class="fa fa-eye"></i>
                  </a>

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





        <div class="container">

  <!-- Trigger the modal with a button -->
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header d-flex">
           <h4 class="modal-title">Contact details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
         <table class="table table-bordered ">
           <tbody>
               @foreach($allData as $key => $contact)
                 <tr>
                  <td> <b>Address:</b> &nbsp;&nbsp; {{$contact->address}} </td>
                </tr>
                  <tr>
                    <td> <b>Mobile:</b>&nbsp;&nbsp; {{$contact->mobile_no}} </td>
                  </tr>
                  <tr>
                    <td> <b>Email:</b>&nbsp;&nbsp;   {{$contact->email}}</td>
                  </tr>
                  <tr>
                    <td> <b>Facebook:</b>&nbsp;&nbsp;   {{$contact->facebook}}</td>
                  </tr>                
                    <tr>
                    <td> <b>Twitter:</b>&nbsp;&nbsp;   {{$contact->twiter}}</td>
                  </tr>              
                      <tr>
                    <td> <b>bLinkedin:</b> &nbsp;&nbsp;   {{$contact->linkedin}}</td>
                  </tr>
               @endforeach
           </tbody>
         </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection