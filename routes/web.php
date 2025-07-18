<?php

use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



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



Auth::routes();
Route::group(['middleware'=>'auth','as'=>'admin.','prefix'=>'admin'],function(){
    
    Route::get('/', function () {
        return view('index');
        });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/shop',ShopController::class);
    Route::resource('/user',UserController::class);

});
