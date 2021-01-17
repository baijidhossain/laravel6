<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\color;
use DB;
use Auth;

class ColorController extends Controller
{
    
  
 public function view(){

         $data['allData']=color::all();
         return view('backend.color.view-color',$data);
    }   

     public function add(){

         return view('backend.color.add-color');
    }
     public function store(Request $request){

          $data=new color();
          $data->name=$request->name;
          $data->created_by=Auth::user()->id;
          $data->save();
          return redirect()->route('colors.view')->with('success','colors inserted successfully');
    }

     public function edit($id){
            $editData=color::find($id);
            return view('backend.color.add-color',compact('editData'));

        }

        public function update(Request $request,$id){
          $data=color::find($id);
          $data->name=$request->name;
          $data->updated_by=Auth::user()->id;
          $data->save();
          return redirect()->route('colors.view')->with('success','colors updated successfully');
        }

        public function delete($id){
         $data=color::find($id);
         $data->delete();
        return redirect()->route('colors.view')->with('trust','color deleted successfully');

        }
}
