<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Station;


class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['alldata']=Station::all();
        
        return view('backend.station.view_station', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.station.add_station'); 
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
            
            'station_name' => 'required|unique:stations,station_name',
            'station_code' => 'required|unique:stations,station_code',
           
            
            
        ]);


        
    
        $station = new Station();
        $station->station_name=$request['station_name'];
        $station->station_code=$request['station_code'];
       
       
        $station->save();
        // $user->attachRole($request['user_type']);
        // event(new Registered($user));

        $notification = array(
            'message' => 'Station Inserted Successfully',
            'alert-type' => 'success'
    
    
        );
       
       
        return redirect()->route('station.View')->with($notification);
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
        $data['editdata']=Station::find($id);
       
        return view('backend.station.edit_station', $data); 
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
        $station = Station::find($id);
        $station->station_name=$request['station_name'];
        $station->station_code=$request['station_code'];
        
      
       
        $station->save();
    
        $notification = array(
            'message' => 'train Updated Successfully',
            'alert-type' => 'success'
    
    
        );
       
       
        return redirect()->route('station.View')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station = Station::find($id);
        $station->delete();
        $notification = array(
            'message' => 'Station Deleted Successfully',
            'alert-type' => 'info'
    
    
        );
        
        return redirect()->route('station.View')->with($notification);
    }
}
