<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;
use App\Models\Role;

class UserController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['alldata']= DB::table('users')
                            ->join('role_user','role_user.user_id','users.id')
                            ->get();
        // $data['alldata']=User::all();
        
        return view('backend.user.view_user', $data);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editdata']=Role::all();
        return view('backend.user.add_user',$data);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     




        $validated = $request->validate([
            
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
            
        ]);


        
    
        $user = new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->user_type=$request['user_type'];
       
        $user->password=Hash::make($request['password']);
       
        $user->save();
        // $user->attachRole($request['user_type']);
        // event(new Registered($user));

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
    
    
        );
       
       
        return redirect()->route('User.View')->with($notification);
       
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editdata']=User::find($id);
       
    return view('backend.user.edit_user', $data); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
    
    
        );
        
        return redirect()->route('User.View')->with($notification);
    }
}
