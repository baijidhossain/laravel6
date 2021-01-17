<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Category;
use DB;
use Auth;

class CategoryController extends Controller
{
    
 public function view(){

         $data['allData']=Category::select('*')->orderBy('id','desc')->get();
         return view('backend.Category.view-Category',$data);
    }   

     public function add(){

         return view('backend.Category.add-Category');
    }
     public function store(Request $request){

          $data=new Category();
          $data->name=$request->name;
          $data->created_by=Auth::user()->id;
          $data->save();
          return redirect()->route('categories.view')->with('success','Categories inserted successfully');
    }

     public function edit($id){
            $editData=Category::find($id);
            return view('backend.Category.add-Category',compact('editData'));

        }

        public function update(Request $request,$id){
          $data=Category::find($id);
          $data->name=$request->name;
          $data->updated_by=Auth::user()->id;
          $data->save();
          return redirect()->route('categories.view')->with('success','Categories updated successfully');
        }

        public function delete($id){
         $data=Category::find($id);
         $data->delete();
        return redirect()->route('categories.view')->with('trust','Category deleted successfully');

        }

}
