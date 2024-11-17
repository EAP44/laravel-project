<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todo-list', [TodoController::class, 'index'])->name('Todo.index');

Route::post('/todo-list', [TodoController::class, 'store'])->name('Todo.store');

Route::patch('/{todo}', [TodoController::class, 'update'])->name('Todo.update');

Route::delete('/{todo}', [TodoController::class, 'destroy'])->name('Todo.delete');

Route::get('/list-profils', [ProfilController::class, 'index'])->name('profils.index');