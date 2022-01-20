<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['alldata']=Train::all();
        
        return view('backend.train.view_train', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.train.add_train'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       


        $validated = $request->validate([
            'train_name' => ['required', 'string', 'max:255'],
            'train_code' => ['required', 'string', 'max:5'],
            'total_seats' => ['required', 'integer', 'max:255'],
            
            
            
            
        ]);


        
    
        $train = new Train();
        $train->train_name=$request['train_name'];
        $train->train_code=$request['train_code'];
        $train->total_seats=$request['total_seats'];
       
        $train->save();
        // $user->attachRole($request['user_type']);
        // event(new Registered($user));

        $notification = array(
            'message' => 'Train Inserted Successfully',
            'alert-type' => 'success'
    
    
        );
       
       
        return redirect()->route('train.View')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editdata']=Train::find($id);
       
        return view('backend.train.edit_train', $data); 
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
        $train = Train::find($id);
        $train->train_name=$request['train_name'];
        $train->train_code=$request['train_code'];
        $train->total_seats=$request['total_seats'];
      
       
        $train->save();
    
        $notification = array(
            'message' => 'train Updated Successfully',
            'alert-type' => 'success'
    
    
        );
       
       
        return redirect()->route('train.View')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $train = Train::find($id);
        $train->delete();
    
        $notification = array(
            'message' => 'train Deleted Successfully',
            'alert-type' => 'info'
    
    
        );
        
        return redirect()->route('train.View')->with($notification);
    }
}
