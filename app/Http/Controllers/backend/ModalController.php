<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\model\Category;
use App\model\brand;
use App\model\color;
use App\model\size;
use App\model\product;
use App\model\productcolor;
use App\model\productsize;
use App\model\productsubimage;
use DB;
use Auth;

class ModalController extends Controller
{
    public function edit($id){



       //      $data['editData']=product::find($id);

	      //   $data['categories']=Category::all();
	     	// $data['brands']=brand::all();
	     	// $data['colors']=color::all();
	     	// $data['sizes']=size::all();

	     	// $data['color_array']=productcolor::select('color_id')->where('product_id',$data['editData']->id)->orderBy('id','asc')->get()->toArray();
       //       $data['size_array']=productsize::select('size_id')->where('product_id',$data['editData']->id)->orderBy('id','asc')->get()->toArray();

	      //   return view('backend.product.view-Product',$data);
    }
}
