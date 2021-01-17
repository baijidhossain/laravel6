<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\size;
use DB;
use Auth;

class SizeController extends Controller
{
      
  
 public function view(){

         $data['allData']=size::all();
         return view('backend.size.view-size',$data);
    }   

     public function add(){

         return view('backend.size.add-size');
    }
     public function store(Request $request){

          $data=new size();
          $data->name=$request->name;
          $data->created_by=Auth::user()->id;
          $data->save();
          return redirect()->route('sizes.view')->with('success','sizes inserted successfully');
    }

     public function edit($id){
            $editData=size::find($id);
            return view('backend.size.add-size',compact('editData'));

        }

        public function update(Request $request,$id){
          $data=size::find($id);
          $data->name=$request->name;
          $data->updated_by=Auth::user()->id;
          $data->save();
          return redirect()->route('sizes.view')->with('success','sizes updated successfully');
        }

        public function delete($id){
         $data=size::find($id);
         $data->delete();
        return redirect()->route('sizes.view')->with('trust','size deleted successfully');

        }
}
