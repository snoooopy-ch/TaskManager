<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\TaskController::class, 'index'])->name('task');
Route::post('/create', [App\Http\Controllers\TaskController::class, 'create'])->name('create');
Route::post('/edit', [App\Http\Controllers\TaskController::class, 'edit']);
Route::post('/delete', [App\Http\Controllers\TaskController::class, 'delete']);
Route::post('/update-priority', [App\Http\Controllers\TaskController::class, 'update_priority'])->name('update.priority');
