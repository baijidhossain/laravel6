<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\brand;
use DB;
use Auth;
class BrandController extends Controller
{
    

  
 public function view(){

         $data['allData']=brand::all();
         return view('backend.brand.view-brand',$data);
    }   

     public function add(){

         return view('backend.brand.add-brand');
    }
     public function store(Request $request){

          $data=new brand();
          $data->name=$request->name;
          $data->created_by=Auth::user()->id;
          $data->save();
          return redirect()->route('brands.view')->with('success','brands inserted successfully');
    }

     public function edit($id){
            $editData=brand::find($id);
            return view('backend.brand.add-brand',compact('editData'));

        }

        public function update(Request $request,$id){
          $data=brand::find($id);
          $data->name=$request->name;
          $data->updated_by=Auth::user()->id;
          $data->save();
          return redirect()->route('brands.view')->with('success','brands updated successfully');
        }

        public function delete($id){
         $data=brand::find($id);
         $data->delete();
        return redirect()->route('brands.view')->with('trust','brand deleted successfully');

        }
}
