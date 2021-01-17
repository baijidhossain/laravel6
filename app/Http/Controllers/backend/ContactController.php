<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\model\contact;
class ContactController extends Controller
{
 
    public function view(){
      $data['count']=contact::count();

         $data['allData']=contact::all();
         return view('backend.contact.view-contact',$data);

    }   


     public function add(){

         return view('backend.contact.add-contact');

    }
     public function store(Request $request){

          $data=new contact();
          $data->created_by=Auth::user()->id;
          $data->address=$request->address;
          $data->mobile_no=$request->mobile_no;
          $data->email=$request->email;
          $data->facebook=$request->facebook;
          $data->twiter=$request->twiter;
          $data->youtube=$request->youtube;
          $data->linkedin=$request->linkedin;
          $data->google_plus=$request->google_plus;
          $data->save();
          return redirect()->route('contacts.view')->with('success','Contact inserted successfully');
    }

     public function edit($id){
            $editData=contact::find($id);
            return view('backend.contact.edit-contact',compact('editData'));
        }

        public function update(Request $request,$id){
        	
          $data=contact::find($id);
          $data->updated_by=Auth::user()->id;
          $data->address=$request->address;
          $data->mobile_no=$request->mobile_no;
          $data->email=$request->email;
          $data->facebook=$request->facebook;
          $data->twiter=$request->twiter;
          $data->youtube=$request->youtube;
          $data->google_plus=$request->google_plus;
          $data->save();
          return redirect()->route('contacts.view')->with('success','Contact updated successfully');
        }

        public function delete($id){
         $contact=contact::find($id);
          $contact->delete();
          return redirect()->route('contacts.view')->with('trust','Contact deleted successfully');
        }
}
