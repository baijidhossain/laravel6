@extends('backend.layouts.master')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage color</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">color</li>
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
               <h3>color view
              <a href="{{route('colors.add')}}" class="btn btn-success float-right btn-sm"> <i class="fa fa-plus-circle" ></i>Add color </a>
             </h3>
</div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl.</th>
                    <th>id</th>
                    <th>color name</th>
                    <th>Created_by</th>
                    <th>Updated_by</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th width="12%">Action</th>
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($allData as $key => $color)

                    @php
                    $count_color=App\model\productcolor::where('color_id',$color->id)->count();

                    @endphp

                 <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$color->id}}</td>
                 <td>{{$color->name}}</td>
                 <td>{{$color->created_by}}</td>
                 <td >
                    <a href="" class="btn btn-sm w-100 @php if($color->updated_by){echo 'btn-danger'; } else{echo 'btn-primary';}  @endphp">
                     @php $update= $color->updated_by; if($update) {echo "All ready edited by";} else{echo "Not edited";} @endphp
                   </a>
                </td>
                 <td>{{$color->created_at}}</td>
                 <td>{{$color->updated_at}}</td>
                 <td> 
                  <a title="Edit" class="btn btn-sm btn-primary" href="{{route('colors.edit',$color->id)}}"> <i class="fa fa-edit"></i> </a>

                  @if($count_color<1)
                  <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('colors.delete',$color->id)}}"> <i class="fa fa-trash"></i> </a>
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