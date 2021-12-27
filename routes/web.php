<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
  return view('contact');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    if(Auth::user()->hasRole('superadministrator')){
      return view('admin.dashboard');
  }elseif(Auth::user()->hasRole('administrator')){
      return view('user.dashboard');
  }
})->middleware(['auth'])->name('dashboard');
 
// Route::group(['middleware'=>['auth']],function(){
//   Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
// });
 
require __DIR__.'/auth.php';
