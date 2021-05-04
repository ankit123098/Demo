<?php

use Illuminate\Support\Facades\Route;

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

Route::get('m-i-g-r-a-t-e',function() {
	Artisan::call('migrate');
});

Route::get('/admin', function () {
    return view('layouts.login');
});
Route::get('/logout','Admin\LoginController@Logout');
Route::post('/login','Admin\LoginController@Login');
Route::group(['middleware'=>'App\Http\Middleware\AdminLogin'],function(){
	Route::get('/admin/dashboard','Admin\LoginController@Dashboard');
});