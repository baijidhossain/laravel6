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
use DB;


class FrontenController extends Controller
{
   public function index(){
    $data['logo']=Logo::first();
    $data['sliders']=slider::all();
    $data['contact']=contact::first();
    $data['categories']=product::select('category_id')->groupBy('category_id')->get();
    $data['brands']=product::select('brand_id')->groupBy('brand_id')->get();
    $data['product']=product::orderBy('id','desc')->paginate(8);
 
    return view('frontend.layouts.home',$data);

   }

   public function produclist(){

     $data['logo']=Logo::first();
     $data['contact']=contact::first();
     $data['product']=product::orderBy('id','desc')->paginate(8);
    $data['categories']=product::select('category_id')->groupBy('category_id')->get();
    $data['brands']=product::select('brand_id')->groupBy('brand_id')->get();
     
     return view('frontend.single_pages.product-list',$data);

   }

    public function categorywiseproduct($category_id){
     

    $data['logo']=Logo::first();
    $data['contact']=contact::first();
    $data['product']=product::where('category_id',$category_id)->orderBy('id','desc')->get();
    $data['categories']=product::select('category_id')->groupBy('category_id')->get();
    $data['brands']=product::select('brand_id')->groupBy('brand_id')->get();

     return view('frontend.single_pages.categorywiseproduct',$data);
}

   public function brandwiseproduct($brand_id){

        $data['logo']=Logo::first();
        $data['contact']=contact::first();
        $data['product']=product::where('brand_id',$brand_id)->orderBy('id','desc')->get();
        $data['categories']=product::select('category_id')->groupBy('category_id')->get();
        $data['brands']=product::select('brand_id')->groupBy('brand_id')->get();

        return view('frontend.single_pages.brand-wise-product',$data);

     }

          public function productdetails($slug){

                $data['logo']=Logo::first();
                $data['contact']=contact::first();
                $data['product']=product::where('slug',$slug)->first();
                $data['product_sub_images']=productsubimage::where('product_id',$data['product']->id)->get();
                $data['product_colors']=productcolor::where('product_id',$data['product']->id)->get();
                $data['product_sizes']=productsize::where('product_id',$data['product']->id)->get();

                return view('frontend.single_pages.productdetails',$data);
          }


   public function AboutUs(){
     $data['logo']=Logo::first();
     $data['contact']=contact::first();
     return view('frontend.single_pages.about-us',$data);
   }

    public function ContactUs(){
       $data['logo']=Logo::first();
       $data['contact']=contact::first();
       return view('frontend.single_pages.contact-us',$data);

   }  

     public function ShoppingCArt(){     
       return view('frontend.single_pages.shopping-cart');

   }
}
