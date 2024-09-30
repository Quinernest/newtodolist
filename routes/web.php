<?php

use App\Http\Controllers\TaskController;


Route::resource('tasks', TaskController::class);
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');


Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

