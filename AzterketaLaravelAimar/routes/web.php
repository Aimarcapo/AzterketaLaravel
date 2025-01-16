<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', 'App\Http\Controllers\EtxeController@show');
Route::get('/filter', 'App\Http\Controllers\EtxeController@filter');
Route::get('/updatear', 'App\Http\Controllers\EtxeController@updatear');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/etxe/{id}', [App\Http\Controllers\EtxeController::class, 'showFiltered'])->name('filter');
Route::put('/etxe',[App\Http\Controllers\EtxeController::class,'update'])->name('etxe-update');
Route::get('/etxe',[App\Http\Controllers\EtxeController::class,'showFiltered'])->name('etxe-filter');