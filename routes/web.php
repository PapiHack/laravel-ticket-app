<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});


// Task's routes
Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
Route::get('/tasks/about', [TaskController::class, 'about'])->name('task.about');
Route::get('/tasks/list', [TaskController::class, 'list'])->name('task.list');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/tasks/create', [TaskController::class, 'create'])->name('task.create');
