<?php
use App\Http\Controllers\sessioncontroller;
use Illuminate\Support\Facades\Route;

Route::get('session/put',[sessioncontroller::class,'store']);
Route::get('session/get',[sessioncontroller::class,'index']);
Route::get('session/push',[sessioncontroller::class,'push']);
Route::get('session/del',[sessioncontroller::class,'delete']);