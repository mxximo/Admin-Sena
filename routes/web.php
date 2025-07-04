<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use App\Models\TrainingCenter;
use Illuminate\Support\Facades\Route;


//ruta principal
Route::view('/', 'principal')->name('principal');

//rutas para area
Route::resource('area', AreaController::class);


//rutas para trainig center
route::resource('training_center',TrainingCenterController::class);


//rutas para computer
Route::resource('computer', ComputerController::class);


//rutas para teacher
Route::resource('teacher', TeacherController::class);


//rutas para apprentices
Route::resource('apprentice', ApprenticeController::class);



Route::resource('course', CourseController::class);

