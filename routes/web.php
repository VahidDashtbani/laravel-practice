<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\ReadController;

Route::get('/',[LearnController::class,'learn']);

Route::get('/destroy',[DestroyController::class,'index']);
Route::post('/destroy',[DestroyController::class,'destroy'])->name("destroy");

Route::get('/create',[CreateController::class,'index']);
Route::post('/create',[CreateController::class,'create'])->name("create");

Route::get('/read',[ReadController::class,'index']);
Route::post('/read',[ReadController::class,'read'])->name("read");

Route::get('/update',[UpdateController::class,'index']);
Route::post('/update',[UpdateController::class,'update'])->name("update");

// Route::get('/welcome',function(){
// return view('welcome');
// });