<?php

namespace App\Http\Controllers;

use app\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('superadministrator')){
            return view('admin.dashboard');
        }elseif(Auth::user()->hasRole('administrator')){
            $data['book'] = Booking::all();
            $data['amount'] = 10;
            return view('user.dashboard',$data);
        }
    }
}
