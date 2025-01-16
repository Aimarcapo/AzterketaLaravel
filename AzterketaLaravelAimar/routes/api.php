<?php

use App\Http\Controllers\AlokairuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtxeController;
use App\Models\Alokairu;
use App\Models\Etxe;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/etxe', function () {

    
    return Etxe::all();
});
Route::get('alokairu', function () {

    
    return Alokairu::all();
});
Route::get('/etxe/{id}', [EtxeController::class, 'showById']);
Route::delete('/etxea/{id}', [EtxeController::class, 'destroyEtxe']);
Route::get('/etxe/{id}', [AlokairuController::class, 'showById']);
Route::delete('/etxe/{id}', [EtxeController::class, 'destroyEtxe']);
Route::get('/alokairu/{id}', [AlokairuController::class, 'showById']);
Route::put('/alokairu/{id}', [AlokairuController::class, 'update']);
Route::delete('/alokairu/{id}', [AlokairuController::class, 'destroyCharacter']);
