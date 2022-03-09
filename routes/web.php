<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/post', [AdminController::class, 'store'])->name('admin.post');
Route::get('admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete.{id}');
Route::post('admin/update', [AdminController::class, 'update'])->name('admin.update');

Auth::routes(['register'=>False]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
