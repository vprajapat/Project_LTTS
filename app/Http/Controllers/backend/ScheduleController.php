<?php

namespace App\Http\Controllers\backend;

use App\Models\Train;
use App\Models\Station;
use Illuminate\Http\Request;
use App\Models\Trains_schedule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Intermediate_station;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['alldata'] =Trains_schedule::all();
        return view('backend.train_schedule.view_train_schedule',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['train'] =Train::all();
        $data['station'] =Station::all();
        $data['intermediate_station'] =Intermediate_station::all();
        
        return view('backend.train_schedule.add_train_schedule',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      



        // $validated = $request->validate([
            
        //     'train_id' => 'required|unique:trains_schedule,train_id',
        //     'station_id' => 'required|unique:trains_schedule,station_id',
        //     'depart_time' => 'required',
        //     'depart_date' => 'required',
            
            
        // ]);


        
    
        $train_sch = new Trains_schedule();
        $train_sch->train_id=$request['train_id'];
        $train_sch->station_id=$request['station_id'];
        $train_sch->end_station_id=$request['end_station_id'];
        $train_sch->start_date_time=$request['start_date_time'];
        $train_sch->stop_date_time=$request['stop_date_time'];
        
        
        $train_sch->save();
        // $user->attachRole($request['user_type']);
        // event(new Registered($user));

        $notification = array(
            'message' => 'Train Schedule Inserted Successfully',
            'alert-type' => 'success'
    
    
        );
       
       
        return redirect()->route('schedule.View')->with($notification);
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
        $data['trains_schedule'] =Trains_schedule::find($id);
        $data['train'] =Train::all();
        $data['station'] =Station::all();
        
        return view('backend.train_schedule.edit_train_schedule',$data);
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
        // $validated = $request->validate([
            
        //     'train_id' => 'required|unique:trains_schedule,train_id',
        //     'station_id' => 'required|unique:trains_schedule,station_id',
        //     'depart_time' => 'required',
        //     'depart_date' => 'required',
            
            
        // ]);


        
       
        $train_sch = Trains_schedule::find($id);
        $train_sch->train_id=$request['train_id'];
        $train_sch->station_id=$request['station_id'];
        $train_sch->end_station_id=$request['end_station_id'];
        $train_sch->start_date_time=$request['start_date_time'];
        $train_sch->stop_date_time=$request['stop_date_time'];
        
        
        $train_sch->save();
       

        $notification = array(
            'message' => 'Train Schedule Updated Successfully',
            'alert-type' => 'info'
    
    
        );
       
       
        return redirect()->route('schedule.View')->with($notification);
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $train_sch = Trains_schedule::find($id);
        $train_sch->delete();
        $notification = array(
            'message' => 'Train Schedule Deleted Successfully',
            'alert-type' => 'info'
    
    
        );
        
        return redirect()->route('schedule.View')->with($notification);
    }
}
