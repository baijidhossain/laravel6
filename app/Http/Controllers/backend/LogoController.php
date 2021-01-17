<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\model\Logo;
class LogoController extends Controller
{
   
    public function view(){
         $data['countlogo']=Logo::count();

         $data['allData']=Logo::all();
         return view('backend.logo.view-logo',$data);

    }   


     public function add(){

         return view('backend.logo.add-logo');

    }
     public function store(Request $request){

          $data=new Logo();
          $data->created_by=Auth::user()->id;
          $requestimage=$request->file('image');
          
          if($requestimage){ 
  		    $file=$requestimage;
  		    $filename=date('YmdHi')."_".$file->getClientOriginalName();
  		    $file->move(public_path('upload/logo_image'),$filename);
  		    $data['image']=$filename;

             }

          $data->save();
            return redirect()->route('logos.view')->with('success','Logo inserted successfully');
    }

     public function edit($id){
            $editData=Logo::find($id);
            return view('backend.logo.edit-logo',compact('editData'));
        }



        public function update(Request $request,$id){

            $data=Logo::find($id);
             $data->updated_by=Auth::user()->id;
           $requestimage=$request->file('image');
          if($requestimage){ 
		    $file=$requestimage;
		    @unlink(public_path('upload/logo_image/'.$file));
		    $filename=date('YmdHi')."_".$file->getClientOriginalName();
		    $file->move(public_path('upload/logo_image'),$filename);
		    $data['image']=$filename;

             }

          $data->save();
          return redirect()->route('logos.view')->with('success','Image updated successfully');
        }

        public function delete($id){
         $logo=Logo::find($id);
			if(file_exists('public/upload/logo_image/'.$logo->image) and ! empty($logo->image))
			{
				@unlink('public/upload/logo_image/'.$logo->image);
			}

          $logo->delete();
          return redirect()->route('logos.view')->with('trust','Image deleted successfully');
        }
}
