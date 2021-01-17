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
               <h3>brand view
              <a href="{{route('brands.add')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-plus-circle" ></i>Add brand </a>
             </h3>
</div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl.</th>
                    <th>id</th>
                    <th>brand name</th>
                    <th>Created_by</th>
                    <th>Updated_by</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th width="13%">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($allData as $key => $brand)
                    @php
                    $count_brand=App\model\product::where('brand_id',$brand->id)->count();

                    @endphp

                 <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$brand->id}}</td>
                 <td>{{$brand->name}}</td>
                 <td>{{$brand->created_by}}</td>
                 <td >
                    <a href="" class="btn btn-sm w-100 @php if($brand->updated_by){echo 'btn-danger'; } else{echo 'btn-primary';}  @endphp">
                     @php $update= $brand->updated_by; if($update) {echo "All ready edited by";} else{echo "Not edited";} @endphp
                   </a>
                </td>
                 <td>{{$brand->created_at}}</td>
                 <td>{{$brand->updated_at}}</td>
                 <td> 
                  <a title="Edit" class="btn btn-sm btn-primary" href="{{route('brands.edit',$brand->id)}}"> <i class="fa fa-edit"></i> </a>
                      @if($count_brand<1)

                  <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('brands.delete',$brand->id)}}"> <i class="fa fa-trash"></i> </a>
                          @else
                           <a href="{{ route('products.view')}}" class="btn btn-sm btn-primary">Used</a>
                          @endif

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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection