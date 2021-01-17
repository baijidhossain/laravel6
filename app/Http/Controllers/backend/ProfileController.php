<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
class ProfileController extends Controller
{
     public function view(){
     $id=Auth::user()->id;
     $user=User::find($id);
   	 return view('backend.user.view_profile',compact('user'));
   }

    public function edit(){
    $id=Auth::user()->id;
    $editData=User::find($id);
	return view('backend.user.edit_profile',compact('editData'));
   }

   public function update(Request $request){
          $id=Auth::user()->id;
          $data=User::find($id);
          $data->name=$request->name;
          $data->mobile=$request->mobile;
          $data->address=$request->address;
          $data->gender=$request->gender;
          $data->email=$request->email;
          $requestimage=$request->file('image');

          if($requestimage){ 
		    $file=$requestimage;
		    @unlink(public_path('upload/user_image/'.$file));
		    $filename=date('YmdHi')."_".$file->getClientOriginalName();
		    $file->move(public_path('upload/user_image'),$filename);
		    $data['image']=$filename;

             }

          $data->save();
          return redirect()->route('profiles.view')->with('success','Profile updated successfully');


   }

   public function passwordView(){

     return view('backend.user.edit-password');

   }

   public function passwordupdate(Request $request){

if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password]))
{

$id=Auth::user()->id;
$user=User::find( $id);
$user->password=bcrypt($request->new_password);
$user->save();

return redirect()->route('profiles.view')->with('success','Password changed successfully');
}
else
{
return redirect()->back()->with('error','Sorry! your current password does not match');
}
}
}