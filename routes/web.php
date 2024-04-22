<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\UserController;
use App\Models\Alamat;
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
//alamat
Route::get('/alamat',[AlamatController::class,'index'])->name('alamat');
Route::get('/tambahalm',[AlamatController::class,'tambahalm'])->name('tambahalm');
Route::post('/insertalm',[AlamatController::class,'insertalm'])->name('insertalm');
Route::get('/tampilalm/{id}',[AlamatController::class,'show'])->name('tampilalm');
Route::post('/updatealm/{id}',[AlamatController::class,'update'])->name('updatealm');
Route::get('/destroy/{id}',[Alamat::class,'destroy'])->name('destroy');
