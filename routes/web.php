<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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
      return view('user.index');
  }
})->middleware(['auth'])->name('dashboard');
 
// Route::group(['middleware'=>['auth']],function(){
//   Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
// });
//  ************************************************ User starts *********************************************



Route::get('/about', function () {
  return view('about');
});

Route::get('/passenger', function () {
  return view('user.booking.passenger');
});


Route::get('/user/login',[DashboardController::class, 'logout'])-> name('user.logout');




//  ************************************************ User end *********************************************


require __DIR__.'/auth.php';
