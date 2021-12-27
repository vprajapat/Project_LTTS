<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('superadministrator')){
            return view('admin.dashboard');
        }elseif(Auth::user()->hasRole('administrator')){
            return view('user.dashboard');
        }
    }
}
