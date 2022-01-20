<?php

namespace App\Http\Controllers\backend;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserView(){
        $data['alldata']=User::all();
        return view('backend.user.view_user', $data);
    }
    public function Useradd(){
       
        return view('backend.user.add_user');
    }

    public function Userstore(Request $request)
{
    $validated = $request->validate([
        'user_type' => 'required',
        'name' => 'required',
        'email' => 'required|unique:User|max:255',
        'password' => 'required',
        'password_confirm' => 'required|same:password' ,
        
    ]);

    $user = new User();
    $user->name=$request['name'];
    $user->email=$request['email'];
    $user->user_type=$request['user_type'];
    $user->password=Hash::make($request['password']);
   
    $user->save();
   
   
    return redirect()->route('User.View');

}


public function UserEdit($id){

    $data['editdata']=User::find($id);
    return view('backend.user.edit_user', $data); 
}
public function UserUpdate(Request $request,$id){

    $user = User::find($id);
    $user->name=$request['name'];
    $user->email =$request['email'];
  
   
    $user->save();

    $notification = array(
        'message' => 'User Updated Successfully',
        'alert-type' => 'success'


    );
   
   
    return redirect()->route('User.View')->with($notification);

}

public function UserDelete($id){

    $user = User::find($id);
    $user->delete();

    $notification = array(
        'message' => 'User Deleted Successfully',
        'alert-type' => 'info'


    );
    
    return redirect()->route('User.View')->with($notification);
   
    
   
    

}

}
