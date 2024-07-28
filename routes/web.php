<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\TodoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/todolist', function () {
//     return view('todo.app');
// });

Route::get('todolist', [TodoController::class, 'index'])->name('todolist');
Route::post('todolist', [TodoController::class, 'store'])->name('todolist.post');
Route::post('todolist/{id}', [TodoController::class, 'update'])->name('todolist.update');
Route::put('todolist/{id}', [TodoController::class, 'update'])->name('todolist.update');
Route::delete('todolist/{id}', [TodoController::class, 'destroy'])->name('todolist.delete');