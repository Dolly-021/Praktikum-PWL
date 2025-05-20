<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [TodolistController::class, 'todolist'])
->name('todolist.index');


Route::get('/todolist/tambah', [TodolistController::class,
 'create'])->name('todolist.create');
Route::post('/todolist/tambah/data', [TodolistController::class,
 'store'])->name('todolist.store');

Route::get('/todolist/edit/{id}', [TodolistController::class, 'edit'])->name('todolist.edit');
Route::put('/todolist/edit/data/{id}', [TodolistController::class, 'update'])->name('todolist.update');

Route::delete('todolist/delete/{id}', [TodolistController::class, 'delete'])->name('todolist.delete');

// Route::put('/todolist/update', [TodolistController::class, 'update'])->name('todolist.update');

// Route::get('/profile', function () {
//     return view('profile');
// });
