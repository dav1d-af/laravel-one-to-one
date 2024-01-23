<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('students', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('students/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('students/create', [App\Http\Controllers\StudentController::class, 'store']);
Route::get('students/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit']);
Route::put('students/{id}/edit',[App\Http\Controllers\StudentController::class, 'update']);


Route::get('students/{id}/delete',[App\Http\Controllers\StudentController::class, 'destroy']);


Route::get('students/{id}/delete-capital',[App\Http\Controllers\StudentController::class,'deleteCapital']);
Route::get('students/{id}/delete-name2',[App\Http\Controllers\StudentController::class,'deleteCountryName']);
Route::get('students/{id}/delete-continent',[App\Http\Controllers\StudentController::class,'deleteContinent']);

Route::get('students/{id}/delete-year',[App\Http\Controllers\StudentController::class,'deleteYear']);
Route::get('students/{id}/delete-course',[App\Http\Controllers\StudentController::class,'deleteCourse']);

Route::get('students/{id}/delete-address',[App\Http\Controllers\StudentController::class,'deleteAddress']);
Route::get('students/{id}/delete-age',[App\Http\Controllers\StudentController::class,'deleteAge']);
Route::get('students/{id}/delete-name',[App\Http\Controllers\StudentController::class,'deleteName']);