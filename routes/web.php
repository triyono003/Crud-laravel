<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('tasks', [HomeController::class, 'add']);


Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'postAdd']);


Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
Route::put('tasks/{id}', [TaskController::class, 'update']);

Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

