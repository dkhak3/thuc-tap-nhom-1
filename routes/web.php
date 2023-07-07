<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LecturersController::class,'index'])->name('index');
Route::get('add', [LecturersController::class,'create'])->name('add');
Route::get('delete/{id}', [LecturersController::class,'destroy'])->name('delete');
Route::post('edit/{id}', [LecturersController::class,'edit'])->name('edit');
Route::post('store', [LecturersController::class,'store'])->name('store');
Route::get('editScreen/{id}',[LecturersController::class,'editScreenLecturer'])->name("editScreenLecturer");
Route::get('search', [LecturersController::class,'search'])->name('search');

Route::delete("/selected-lecturer", [LecturersController::class, 'deleteAll'])->name("deleteAll");