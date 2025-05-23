<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;
Route::get('/', function () {
    return view('layouts.app');
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

//TEACHERS

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');

//COURSE

Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');

//APPRENTICES

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');