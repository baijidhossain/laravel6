<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function view(){

         $data['allData']=User::all();
         return view('backend.user.view-user',$data);

    }   


     public function add(){

         return view('backend.user.add-user');

    }
     public function store(Request $request){

          $data=new User();
          $data->usertype=$request->usertype;
          $data->name=$request->name;
          $data->email=$request->email;
          $data->password=bcrypt($request->password);
          $data->save();
            return redirect()->route('users.view')->with('success','Data inserted successfully');
    }

     public function edit($id){
            $editData=User::find($id);
            return view('backend.user.edit-user',compact('editData'));
        }



        public function update(Request $request,$id){
          $data=User::find($id);
          $data->usertype=$request->usertype;
          $data->name=$request->name;
          $data->email=$request->email;
          $data->save();
          return redirect()->route('users.view')->with('success','Data updated successfully');
        }

        public function delete($id){
         $user=User::find($id);

if(file_exists('public/upload/user_image/'.$user->image) and ! empty($user->image))
{

	unlink('public/upload/user_image/'.$user->image);
}

          $user->delete();
        return redirect()->route('users.view')->with('trust','Data deleted successfully');

        }
}
