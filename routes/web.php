<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/user',[UserController::class,'index'])->name('pelanggan');
Route::get('/tambahpln',[UserController::class,'tambahpln'])->name('tambahpln');
Route::post('/insertpln',[UserController::class,'insertpln'])->name('insertpln');
Route::get('/tampilpln/{id}',[UserController::class,'show'])->name('tampilpln');
Route::post('/updatepln/{id}',[UserController::class,'update'])->name('updatepln');
Route::get('/destroy/{id}',[UserController::class,'destroy'])->name('destroy');

