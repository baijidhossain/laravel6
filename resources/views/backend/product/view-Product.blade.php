@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">product</li>
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
            <div class="card p-2">

             <div class="card-header">
               
                            <h3>product view
              <a href="{{route('products.add')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-plus-circle pr-1" ></i>Add product </a>
             </h3>
             </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl.</th>
                    <th>id no</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Product name</th>
                    <th>Avilable Size</th>
                    <th>Avilable Color</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th width="14%">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($allData as $key => $product)
                 <tr class="{{$product->id}}">
                 <td>{{$key+1}}</td>
                 <td>{{$product->id}}</td>
                 <td>{{$product['category']['name']}}</td>
                 <td>{{$product['brand']['name']}}</td>
                 <td>{{$product->name}}</td>
                 <td> <a href="#"  data-toggle="modal" data-target="#myModal">Avilable Size</a></td>
                 <td> <a href="#"  data-toggle="modal" data-target="#myModal">Avilable Color</a></td>
                 <td>{{$product->price}}</td>
                 <td>  <img style="width: 70px;height: 70px; border:1px solid; " src="{{(!empty($product->image))?url('public/upload/product_image/'.$product->image):url('public/upload/no_image.png')}}" alt="">   </td>
   
                 <td> 
                  <a title="Edit" class="btn btn-sm btn-primary" href="{{route('products.edit',$product->id)}}"> <i class="fa fa-edit"></i>
                   </a>

                  <a title="Details" class="btn btn-sm btn-success" href="{{route('products.details',$product->id)}}"> <i class="fa fa-eye"></i>
                   </a>

                  <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('products.delete',$product->id)}}"> <i class="fa fa-trash"></i> 
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



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-info">
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Product details</p>

              <table>
                <thead>
                  <tr>
                    <th>Product name</th>
                    <th>Product price</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($allData as $key => $product)
                  <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    
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
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection