<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\model\Logo;
use App\model\slider;
use App\model\contact;
use App\model\product;
use App\model\brand;
use App\model\productsubimage;
use App\model\productsize;
use App\model\productcolor;
use App\model\size;
use App\model\color;
use DB;
use Cart;

class CartController extends Controller
{
    public function addtocard(Request $request){

       $this->validate($request,[
'size_id'=>'required',
'color_id'=>'required'

       ]);
      $product =product::where('id',$request->id)->first();
      $product_size=size::where('id',$request->size_id)->first();
      $product_color=color::where('id',$request->color_id)->first();
       Cart::add([

          'id'=> $product->id,
          'qty'=>$request->qty,
          'price'=>$product->price,
          'name'=>$product->name,
          'weight'=>550,

          'options'=>[
				'size_id'=>$request->size_id,
				'size_name'=>$product_size->name,
				'color_id'=>$request->color_id,
				'color_name'=>$product_color->name,
				'image'=>$product->image,
          ],

       ]);
       return redirect()->route('show.cart')->with('success','product added successfully');

    }

    public function showcard(){
    $data['logo']=Logo::first();
    
    $data['contact']=contact::first();

    	return view('frontend.single_pages.shopping-cart',$data);
    }


}
