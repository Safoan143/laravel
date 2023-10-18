<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [TodoController::class, 'homepage'])->name('homepage');

// Route::get('/add-todo', [TodoController::class, 'Addtodo'])->name('Addtodo');

Route::get('/todos', [TodoController::class, 'Alltodo'])->name('Alltodo');

Route::get('/complete-todos', [TodoController::class, 'completeTodo'])->name('completeTodo');

Route::post('/store-todo', [TodoController::class, 'storeTodo'])->name('storeTodo');

