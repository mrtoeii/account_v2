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

Route::get('/', 'LoginController@index');
Route::match(['get', 'post'],'checklogin','LoginController@checklogin');

Route::group(['middleware'=>['userAuth']],function(){
    Route::get('dashboard','user\DashboardController@index');

    // account
    Route::get('account','user\AccountController@index');
    Route::get('account_form','user\AccountController@account_form');
    Route::post('account_save','user\AccountController@account_save');

    // logout
    Route::get('logout','LoginController@logout');

});


Route::group(['middleware'=>['adminAuth']],function(){
    Route::get('admin-dashboard',function(){
        dd(session()->get("user"));
        // echo "Dashboard";
    });
});