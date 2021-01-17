@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Product </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{url('home')}} ">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
             <h3>Product details
              <a href="{{route('products.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>Product list </a>
             </h3>
             </div>
              <div class="card-body">

               <table id="example1" class="table table-bordered  table-sm">
                  <thead>
              
                  </thead>
                  <tbody>
                  	
                  	<tr>
                   <td width="50%">Product image</td>
                   <td width="50%"><img style="width: 70px;height: 70px; border:1px solid; " src="{{(!empty($product->image))?url('public/upload/product_image/'.$product->image):url('public/upload/no_image.png')}}" alt=""> 
                   </td>
                  </tr>

                  <tr>
                   <td width="50%">Category</td>
                   <td width="50%">{{$product['category']['name']}}</td>
                  </tr>

                  <tr>
                   <td width="50%">Brand</td>
                   <td width="50%">{{$product['brand']['name']}}</td>
                  </tr>

                  <tr>
                   <td width="50%">Product name</td>
                   <td width="50%">{{$product->name}}</td>
                  </tr>

                   <tr>
                   <td width="50%">Price</td>
                   <td width="50%">{{$product->price}}</td>
                  </tr>

                   <tr>
                   <td width="50%">Short description</td>
                   <td width="50%">{{$product->short_desc}}</td>
                  </tr>

                   <tr>
                   <td width="50%">Long description</td>
                   <td width="50%">{{$product->long_desc}}</td>
                  </tr>             


                   <tr>
                   <td width="50%">Color</td>
                   <td width="50%">
							@php
							$colors=App\model\productcolor::where('product_id',$product->id)->get()
							@endphp
							@foreach($colors as $c)
							{{$c['color']['name']}},
							@endforeach
                    </td>
                  </tr>             

                   <tr>
                   <td width="50%">Size</td>
                   <td width="50%">
							@php
							$colors=App\model\productsize::where('product_id',$product->id)->get()
							@endphp
							@foreach($colors as $s)
							{{$s['size']['name']}},
							@endforeach
                    </td>
                  </tr> 


                   <td width="50%">Sub image</td>
                   <td width="50%">
							@php
							$sub_image=App\model\productsubimage::where('product_id',$product->id)->get()
							@endphp
							@foreach($sub_image as $img)
							<img style="width: 70px;height: 70px; border:1px solid; " src="{{url('public/upload/product_sub_image/'.$img->sub_image)}}"> 
							@endforeach
                    </td>
                  </tr> 

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