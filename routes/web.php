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

Route::get('/', [App\Http\Controllers\TaskController::class, 'index'])->name('index');
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'tasks'])->name('task');
Route::post('/create', [App\Http\Controllers\TaskController::class, 'create'])->name('create');
Route::post('/edit/{id}', [App\Http\Controllers\TaskController::class, 'edit'])->name('edit');
Route::post('/delete/{id}', [App\Http\Controllers\TaskController::class, 'delete'])->name('delete');
Route::post('/update-priority', [App\Http\Controllers\TaskController::class, 'update_priority'])->name('update.priority');
