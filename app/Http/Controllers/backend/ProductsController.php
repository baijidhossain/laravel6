<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\product;
use App\model\Category;
use App\model\brand;
use App\model\color;
use App\model\size;

use App\model\productcolor;
use App\model\productsize;
use App\model\productsubimage;
use DB;
use Auth;
use App\Http\Requests\ProductRequest;


class ProductsController extends Controller
{
     
  
 public function view(){


         $data['allData']=product::all();
         $data['Category']=Category::all();
         $data['brand']=brand::all();
         $data['color']=color::all();
         $data['size']=size::all();
         $data['productcolor']=productcolor::all();
         $data['productsize']=productsize::all();
         return view('backend.product.view-product',$data);
    }   

     public function add(){
     	$data['categories']=Category::all();
     	$data['brands']=brand::all();
     	$data['colors']=color::all();
     	$data['sizes']=size::all();
         return view('backend.product.add-product',$data);
    }
     public function store(Request $request){
     	DB::transaction(function() use($request){

           $product=new product();
          $product->category_id=$request->category_id;
          $product->brand_id=$request->brand_id;
          $product->name=$request->name;
          $product->slug=str_slug($request->name);
          $product->price=$request->price;
          $product->short_desc=$request->short_desc;
          $product->long_desc=$request->long_desc;
          $requestimage=$request->file('image');
          if($requestimage)
          { 
		    $file=$requestimage;
		    $filename=date('YmdHi')."_".$file->getClientOriginalName();
		    $file->move(public_path('upload/product_image'),$filename);
		    $product['image']=$filename;

          }
          $product->save();


		if( $product->save())
		{
			$files=$request->sub_image;

			if (!empty($files)) {
				foreach ($files as $file) {

					$subimage=new productsubimage();
                    $imageName=$subimage['sub_image'];
					 $imageName=date('YmdHi')."_".$file->getClientOriginalName();
					 $file->move(public_path('upload/product_sub_image'),$imageName);
					
	                 
				
					 $subimage->product_id=$product->id;
					 $subimage->sub_image=$imageName;
					 $subimage->save();
				}
			}




			                  // color

		$colors=$request->color_id;

		if (!empty($colors)) {
			foreach ($colors as $color) {
				$mycolor=new productcolor();
				$mycolor->product_id=$product->id;
				$mycolor->color_id=$color;
				$mycolor->save();

			}
		}



		             //sizes..........
	$sizes=$request->size_id;

		if (!empty($sizes)) {
			foreach ($sizes as $size) {
				$productsize=new productsize();
				$productsize->product_id=$product->id;
				$productsize->size_id=$size;
				$productsize->save();

			}


		}
		}


	else{
         return redirect()->route('products.view')->with('error','products inserted no successfully');
		}


     	});

        



          return redirect()->route('products.view')->with('success','products inserted successfully');
    }

     public function edit($id){

            $data['editData']=product::find($id);

	        $data['categories']=Category::all();
	     	$data['brands']=brand::all();
	     	$data['colors']=color::all();
	     	$data['sizes']=size::all();

	     	$data['color_array']=productcolor::select('color_id')->where('product_id',$data['editData']->id)->orderBy('id','asc')->get()->toArray();
             $data['size_array']=productsize::select('size_id')->where('product_id',$data['editData']->id)->orderBy('id','asc')->get()->toArray();

	        return view('backend.product.add-product',$data);

        }

        public function update(Request $request,$id){
 

          $product=product::find($id);
          $product->category_id=$request->category_id;
          $product->brand_id=$request->brand_id;
          $product->name=$request->name;
           $product->slug=str_slug($request->name);
          $product->price=$request->price;
          $product->short_desc=$request->short_desc;
          $product->long_desc=$request->long_desc;
          $requestimage=$request->file('image');

          if($requestimage)
          { 
		    $file=$requestimage;
		    $filename=date('YmdHi')."_".$file->getClientOriginalName();
		    $file->move(public_path('upload/product_image'),$filename);
		    $product['image']=$filename;

          }

           if (file_exists('public/upload/product_image/'.$product->imagae) AND !empty($product->imagae)) 
             {
                unlink('public/upload/product_image/'.$product->imagae);
             }
          $product->save();

          //sub image update
         if ( $product->save()) 
         {
			$files=$request->sub_image;
			if (!empty($files)) 
			{
				$subimage=productsubimage::where('product_id',$id)->get()->toArray();
				foreach ($subimage as $value) 
				{
					if (!empty($value))
					 {
					   unlink('public/upload/product_sub_image/'.$value['sub_image']);
					 }
			    }

			     productsubimage::where('product_id',$id)->delete();
            }


			if (!empty($files)) {
				foreach ($files as $file) {

					$subimage=new productsubimage();
                    $imageName=$subimage['sub_image'];
					 $imageName=date('YmdHi')."_".$file->getClientOriginalName();
					 $file->move(public_path('upload/product_sub_image'),$imageName);
					 $subimage->product_id=$product->id;
					 $subimage->sub_image=$imageName;
					 $subimage->save();
				}
			}


	       // color
		$colors=$request->color_id;

		if (!empty($colors)) {
		   productcolor::where('product_id',$id)->delete();
		}

		if (!empty($colors)) {
			foreach ($colors as $color) {
				$mycolor=new productcolor();
				$mycolor->product_id=$product->id;
				$mycolor->color_id=$color;
				$mycolor->save();

			}
		}




		             //sizes..........
	$sizes=$request->size_id;
			if (!empty($sizes)) {
		   productsize::where('product_id',$id)->delete();
		}

		if (!empty($sizes)) {
			foreach ($sizes as $size) {
				$productsize=new productsize();
				$productsize->product_id=$product->id;
				$productsize->size_id=$size;
				$productsize->save();

			}


		}


         }

          return redirect()->route('products.view')->with('trust','product update successfully');
        }



        public function delete($id)
        {
           	$subimage=productsubimage::where('product_id',$id)->get()->toArray();

				foreach ($subimage as $value) 
				{
					if (!empty($value))
					 {
					   unlink('public/upload/product_sub_image/'.$value['sub_image']);
					 }
			    }
	         $product= product::find($id);
	          $product->delete();

			if ($product) 
			{
				 unlink('public/upload/product_image/'.$product->image);
			}

	          productsubimage::where('product_id',$id)->delete();
	          productcolor::where('product_id',$id)->delete();
	          productsize::where('product_id',$id)->delete();
	
	          return redirect()->route('products.view')->with('trust','product deleted successfully');


        }




        public function details($id){

        $product= product::find($id);

          return view('backend.product.product-details',compact('product'));

        }
}
