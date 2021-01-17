<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\model\slider;
class SlidersController extends Controller
{
    
    public function view(){

         $data['allData']=slider::all();
         return view('backend.slider.view-slider',$data);

    }   


     public function add(){

         return view('backend.slider.add-slider');

    }
     public function store(Request $request){

          $data=new slider();
          $data->created_by=Auth::user()->id;
          $data->short_title=$request->short_title;
          $data->long_title=$request->long_title;
           $requestimage=$request->file('image');
          if($requestimage){ 
		    $file=$requestimage;
		    $filename=date('YmdHi')."_".$file->getClientOriginalName();
		    $file->move(public_path('upload/slider_image'),$filename);
		    $data['image']=$filename;

             }
          $data->save();

            return redirect()->route('sliders.view')->with('success','Slider inserted successfully');
    }

     public function edit($id){
            $editData=slider::find($id);
            return view('backend.slider.edit-slider',compact('editData'));
        }



        public function update(Request $request,$id){

            $data=slider::find($id);
            $data->updated_by=Auth::user()->id;
            $data->short_title=$request->short_title;
            $data->long_title=$request->long_title;
           $requestimage=$request->file('image');
          if($requestimage){ 
		    $file=$requestimage;
		    @unlink(public_path('upload/slider_image/'.$file));
		    $filename=date('YmdHi')."_".$file->getClientOriginalName();
		    $file->move(public_path('upload/slider_image'),$filename);
		    $data['image']=$filename;

             }

          $data->save();
          return redirect()->route('sliders.view')->with('success','Image updated successfully');
        }

        public function delete($id){
         $slider=slider::find($id);
			if(file_exists('public/upload/slider_image/'.$slider->image) and ! empty($slider->image))
			{
				@unlink('public/upload/slider_image/'.$slider->image);
			}

          $slider->delete();
          return redirect()->route('sliders.view')->with('trust','Slider Image deleted successfully');
        }
}
