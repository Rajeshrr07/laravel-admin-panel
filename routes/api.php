<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

ROute::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get ('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get ('/create',[App\Http\Controllers\Admin\DashboardController::class,'create']);
    Route::post ('/store',[App\Http\Controllers\Admin\DashboardController::class,'store']);
    Route::get ('/edit/{id}',[App\Http\Controllers\Admin\DashboardController::class,'edit']);
    Route::delete ('/destroy/{id}',[App\Http\Controllers\Admin\DashboardController::class,'destroy']);
    Route::put ('/update/{id}',[App\Http\Controllers\Admin\DashboardController::class,'update']);
});