<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\TaskController;
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
Route::get('/tasks',[Taskcontroller::class,'index'])->name('tasks.index');
Route::get('/tasks/create',[Taskcontroller::class,'create'])->name('tasks.create');
Route::post('/tasks',[Taskcontroller::class,'store'])->name('tasks.store');

Route::get('/tasks/{task}',[Taskcontroller::class,'edit'])->name('tasks.edit');
Route::put('/tasks/{task}',[Taskcontroller::class,'update'])->name('tasks.update');

Route::delete('/tasks/{task}',[Taskcontroller::class,'destroy'])->name('tasks.destroy');