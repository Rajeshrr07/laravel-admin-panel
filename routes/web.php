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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

ROute::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get ('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get ('/create',[App\Http\Controllers\Admin\DashboardController::class,'create']);
    Route::post ('/store',[App\Http\Controllers\Admin\DashboardController::class,'store']);
    Route::get ('/edit/{id}',[App\Http\Controllers\Admin\DashboardController::class,'edit']);
    Route::delete ('/destroy/{id}',[App\Http\Controllers\Admin\DashboardController::class,'destroy']);
    Route::put ('/update/{id}',[App\Http\Controllers\Admin\DashboardController::class,'update']);
  


    Route::get('/table', function () {
        return view('admin.table');
    });
    

    Route::get('/icons', function () {
        return view('admin.icons');
    });
    
    Route::get('/maps', function () {
        return view('admin.maps');
    });
    
    Route::get('/notifications', function () {
        return view('admin.notifications');
    });
    
    Route::get('/typography', function () {
        return view('admin.typography');
    });
    
    Route::get('/user', function () {
        return view('admin.user');
    });
});
