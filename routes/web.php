<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');

Route::resource('department', DepartmentController::class);
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/{department}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{department}', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{department}', [DepartmentController::class, 'destroy'])->name('department.destroy');
Route::resource('lecturer', LecturerController::class);