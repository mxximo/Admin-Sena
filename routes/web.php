<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;


Route::get('/', function () {
    return view('welcome');
});


// AREA

Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');

// Training_centers

Route::get('training_centers', [TrainingCenterController::class, 'index'])->name('training_center.index');
Route::get('training_center/create', [TrainingCenterController::class, 'create'])->name('training_center.create');
Route::post('training_center/store', [TrainingCenterController::class, 'store'])->name('training_center.store');

// COMPUTERS

Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
