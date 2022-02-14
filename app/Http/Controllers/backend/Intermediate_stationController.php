<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Intermediate_station;
use App\Models\Station;

class Intermediate_stationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      
        $data['alldata'] = Intermediate_station::select('station_id')->groupBy('station_id')->get();
    	
        return view('backend.interstation.view_interstation', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['station'] = Station::all();
        return view('backend.interstation.add_interstation', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intermid = new Intermediate_station();
        $intermid->station_id=$request['station_id'];
        $intermid->inter_station=$request['inter_station'];
        $intermid->book_date=$request['book_date'];
        $intermid->pass_Phone=$request['pass_Phone'];
        
        
        
        $intermid->save();
        // $user->attachRole($request['user_type']);
        // event(new Registered($user));

        $notification = array(
            'message' => 'Intermediate_station Inserted Successfully',
            'alert-type' => 'success'
    
    
        );
       
       
        return redirect()->route('interstation.add')->with($notification);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($station_id)
    {
        
        $data['ShowInterstation'] = Intermediate_station::where('station_id',$station_id)->orderBy('inter_station','asc')->get();
    	
        return view('backend.interstation.show_interstation', $data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
