<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DealsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[UserController::class,'index']);
// Route::get('/', 'UserController@index');
Route::get('logout',[UserController::class,'logout']);
Route::get('login',[UserController::class,'login'])->name('login');
Route::post('login',[UserController::class,'login'])->name('login');


Route::get('account_info',[UserController::class,'account_info'])->name('account_info');
Route::get('account_update/{id}',[UserController::class,'account_update']);
Route::post('account_update/{id}',[UserController::class,'account_update']);
Route::get('cart/{id}',[UserController::class,'cart']);
Route::get('categories',[UserController::class,'categories']);
Route::get('checkout/{id}',[UserController::class,'checkout']);
Route::get('contactus',[UserController::class,'contactus']);
Route::get('deals_detail/{id}',[UserController::class,'deals_detail']);
Route::get('FAQs',[UserController::class,'FAQs']);
Route::get('forgot',[UserController::class,'forgot']);
Route::get('myaccount',[UserController::class,'myaccount']);
Route::get('myorder',[UserController::class,'myorder']);
Route::get('order_detail',[UserController::class,'order_detail']);
Route::get('partnerus',[UserController::class,'partnerus']);
Route::get('placeorder',[DealsController::class,'placeorder']);
Route::post('placeorder',[DealsController::class,'placeorder']);
Route::get('privacy_policy',[UserController::class,'privacy_policy']);
Route::get('terms',[UserController::class,'terms']);
Route::get('add_deal',[DealsController::class,'add_deal']);
Route::post('add_deal',[DealsController::class,'add_deal']);
Route::get('my_favorite',[DealsController::class,'my_favorite']);
Route::get('addfavourite/{id}',[DealsController::class,'addfavourite']);
Route::get('addfavourite/{id}',[DealsController::class,'addfavourite']);
Route::get('delete_deal/{id}',[DealsController::class,'delete_deal']);
Route::post('change_password',[UserController::class,'change_password']);
Route::get('change_password',[UserController::class,'change_password']);
Route::get('billerinfo',[DealsController::class,'billerinfo']);
Route::post('billerinfo',[DealsController::class,'billerinfo']);
Route::get('search',[DealsController::class,'search']);

