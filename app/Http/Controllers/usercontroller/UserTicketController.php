<?php

namespace App\Http\Controllers\usercontroller;

use App\Models\User;
use App\Models\Booking;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $id =Auth::user()->id;
        $data['amount'] = 10;
        $data['station']=Station::all();
    
        $data['user']=User::find($id);
        return view('main_user.ticket.ticket_book',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $ticketbook = new Booking();
      $ticketbook->from=$request['fromstation'];
      $ticketbook->destination=$request['destination'];
      $ticketbook->user_id=$request['user_id'];
      $ticketbook->pass_name=$request['pass_name'];
      $ticketbook->pass_Phone=$request['pass_Phone'];
      $ticketbook->pass_email=$request['pass_email'];
      $ticketbook->total_pass=$request['total_pass'];
      $ticketbook->book_date=$request['book_date'];
      $ticketbook->save();

      $notification = array(
        'message' => 'Information  Inserted Successfully',
        'alert-type' => 'success'


            );
   
   
    return redirect()->route('ticket.showdetais')->with($notification);
    }



    public function showdetais( )
    {
        $data['amount'] = 10;
        // $id=Booking::latest('book_id')->first();
        $id=DB::table('bookings')->max('book_id');
        
        $data['booking'] =Booking::find($id);
        // $data['booking'] =Booking::all();
       

        
        
        return view('main_user.ticket.ticket_pay',$data);
    }


    public function cancel($id)
    {
        $data =Booking::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Your Ticket cancelled Successfully',
            'alert-type' => 'info'
    
    
        );
        
        return redirect()->route('ticket.View')->with($notification);
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
