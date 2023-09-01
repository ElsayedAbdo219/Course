<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PersonalController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\Auth\AuthController;


//users
Route::group(['middleware'=>'api','namespace'=>'Api'],function(){
Route::get('personal_data',[PersonalController::class,'index']);
});

//admins
Route::group(['middleware'=>['api','CheckPassword'],'namespace'=>'Api'],function(){
Route::get('admin_data',[AdminController::class,'index']);
Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout']);
Route::post('refresh', [AuthController::class,'refresh']);
Route::post('me', [AuthController::class,'me']);
});