<?php

use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use app\Http\Controllers\DashboardController;
use  App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\UserController1;
use App\Http\Controllers\backend\TrainsController;
use App\Http\Controllers\backend\StationController;


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
    if(Auth::user()->hasRole('admin')){
      return view('admin.index');
  }elseif(Auth::user()->hasRole('user')){
      return view('user.dashboard');
  }
})->middleware(['auth'])->name('dashboard');
 
// Route::group(['middleware'=>['auth']],function(){
//   Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
// });

// admin logout route
Route::get('/admin/logout', [AdminController::class,'logout'])->name('admin.logout');

// User Management all Routes
Route::prefix('user')->group(function(){
  Route::get('/view', [UserController1::class,'index'])->name('User.View');

  Route::get('/add', [UserController1::class,'create'])->name('User.add');
  Route::post('/store', [UserController1::class,'store'])->name('User.store');
  Route::get('/edit/{id}', [UserController1::class,'edit'])->name('User.edit');
  Route::post('/update/{id}', [UserController1::class,'update'])->name('User.update');
  Route::get('/delete/{id}', [UserController1::class,'destroy'])->name('User.delete');


});

// train management all routes

Route::prefix('train')->group(function(){
  Route::get('/view', [TrainsController::class,'index'])->name('train.View');

  Route::get('/add', [TrainsController::class,'create'])->name('train.add');
  Route::post('/store', [TrainsController::class,'store'])->name('train.store');
  Route::get('/edit/{train_id}', [TrainsController::class,'edit'])->name('train.edit');
  Route::post('/update/{train_id}', [TrainsController::class,'update'])->name('train.update');
  Route::get('/delete/{train_id}', [TrainsController::class,'destroy'])->name('train.delete');


});

Route::prefix('station')->group(function(){
  Route::get('/view', [StationController::class,'index'])->name('station.View');

  Route::get('/add', [StationController::class,'create'])->name('station.add');
  Route::post('/store', [StationController::class,'store'])->name('station.store');
  Route::get('/edit/{station_id}', [StationController::class,'edit'])->name('station.edit');
  Route::post('/update/{station_id}', [StationController::class,'update'])->name('station.update');
  Route::get('/delete/{station_id}', [StationController::class,'destroy'])->name('station.delete');


});
 
require __DIR__.'/auth.php';
