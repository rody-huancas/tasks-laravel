<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TodosController;
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

Route::get('/', [TodosController::class, 'index'])->name('todos');
Route::post('/', [TodosController::class, 'store'])->name('todos');;
Route::get('/{id}', [TodosController::class, 'show'])->name('todos-show');;
Route::patch('/{id}', [TodosController::class, 'update'])->name('todos-update');
Route::delete('/{id}', [TodosController::class, 'destroy'])->name('todos-destroy');;

// Categorias
Route::resource('categories', CategoriesController::class);
