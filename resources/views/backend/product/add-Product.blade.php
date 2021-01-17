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
            <div class="card p-2 ">


             <div class="card-header">
                            <h3>
                @if(isset($editData) )
                Edit product
                @else
                Add product
                @endif
              <a href="{{ route('products.view')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-list pr-1" ></i>product list</a>
             </h3>

             </div>
              <div class="card-body">
          <!-- form start -->
     
        <form action="{{(@$editData)?route('products.update',$editData->id):route('products.store')}}" method="post" enctype="multipart/form-data" id="myform">
                    @csrf
    
          <div class="row">

              <div class="form-group col-md-4">
                 <label for="">Select category</label>
                 <select name="category_id" class="form-control select2 form-control-sm " id="">
                 <option value="" >Select category</option>
                  @foreach($categories as $category)
               <option  value=" {{$category->id}} "    {{(@$editData->category_id==$category->id)?"selected":""}}>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>


              <div class="form-group col-md-4">
                <label for="">Select brand</label>
                <select name="brand_id" class="form-control select2 form-control-sm" id="">
                 <option value="">Select brand</option>
                  @foreach($brands as $brand)
               <option  value=" {{$brand->id}}"   {{(@$editData->brand_id==$brand->id)?"selected":""}}>{{$brand->name}}</option>
                  @endforeach
                </select>
              </div>


                 <div class="form-group col-md-4">
                   <label for="">Product name</label>
                   <input type="text" name="name" id="name" value="{{@$editData->name}}" class="form-control form-control-sm ">
                 </div>

               <div class="form-group col-md-6">
                <label for="">Select color</label>
                <select name="color_id[]" class="form-control select2 " multiple id="">
                  @foreach($colors as $color)
               <option  value=" {{$color->id}} "  {{(@in_array(['color_id'=>$color->id],$color_array))?"selected":""}} >{{$color->name}}</option>
                  @endforeach
                </select>
               </div>


               <div class="form-group col-md-6">
                <label for="">Select size</label>
                <select name="size_id[]" class="form-control select2 " multiple >
                  @foreach($sizes as $size)
               <option  value=" {{$size->id}} "  {{(@in_array(['size_id'=>$size->id],$size_array))?"selected":""}} >{{$size->name}}</option>
                  @endforeach
                </select>
               </div>


                  <div class="form-group col-md-12">
                   <label for="">Short description</label>
                 <textarea name="short_desc" class="form-control">
                  {{@$editData->short_desc}}
                 </textarea>
                 </div>

                <div class="form-group col-md-12">
                <label for="">Long description</label>
                 <textarea name="long_desc" class="form-control" rows="4">
                 {{@$editData->long_desc}}
                 </textarea>
                 </div>

                 <div class="form-group col-md-3">
                <label for="">Price</label>
                   <input type="number" name="price" value="{{@$editData->price}}" class="form-control">
                 </div>


                <div class="form-group col-md-4">
                <label for="">Image</label>
                 <input type="file" name="image"  id="image" class="form-control ">
                 </div>

        <div class="form-group col-md-2">
        <img id="showImage"  src="{{(!empty($editData->image))?url('public/upload/product_image/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 100px;height: 105px; border:1px solid; " alt="">

        </div>


                <div class="form-group col-md-3">
                <label for="">Sub image</label>
                   <input type="file" name="sub_image[]" class="form-control " multiple>
                </div>
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