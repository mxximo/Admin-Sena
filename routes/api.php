<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


    Route::get('areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
    Route::post('areas', [AreaController::class, 'store'])->name('api.v1.areas.store');
    Route::get('areas/{area}', [AreaController::class, 'show'])->name('api.v1.areas.show');

