<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuotationRequestController;
use App\Http\Controllers\ClientLoginController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Auth;

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


// Route::get('/index', function(){
//     return view('index');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/about', [indexController::class, 'about'])->name('about');
Route::get('/service', [indexController::class, 'service'])->name('service');

Route::get('/create_client',[ClientController::class,'create']);
Route::resources([
    'client' => ClientController::class,
    'post' => ClientController::class,
]);
Route::get('/client_account_status', [ClientController::class,'index']);
Route::get('/edit_client/{id}',[ClientController::class,'edit']);
Route::post('/edit_client/{id}',[ClientController::class,'update']);
Route::delete('/delete_client/{id}',[ClientController::class,'delete']);    

Route::get('/quotation_request',[QuotationRequestController::class,'index']);

Route::get('/client_login',[ClientLoginController::class,'index'])->name('client_login');
Route::post('/custom_login',[ClientLoginController::class,'customLogin']);
Route::get('/signout',[ClientLoginController::class, 'signout'])->name('signout');
Route::get('/client_dashboard',[ClientLoginController::class,'customLogin'])->name('customLogin');
Route::get('/client_check_account_status',[ClientLoginController::class,'customLogin'])->name('client_check_account_status');
Route::get('/book_appointment',[ClientLoginController::class,'bookAppointment'])->name('bookAppointment');
Route::post('/quotation_requested',[ClientLoginController::class,'store'])->name('request_appointment');