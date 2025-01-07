<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\StudentController;

// Display a list of all profs
Route::get('/profs', [ProfController::class, 'index'])->name('profs.index');

// Show the form for creating a new prof
Route::get('/profs/create', [ProfController::class, 'create'])->name('profs.create');

// Store a newly created prof
Route::post('/profs', [ProfController::class, 'store'])->name('profs.store');

// Show the form for editing a specific prof
Route::get('/profs/{id}/edit', [ProfController::class, 'edit'])->name('profs.edit');

// Update a specific prof
Route::put('/profs/{id}', [ProfController::class, 'update'])->name('profs.update');

// Delete a specific prof
Route::delete('/profs/{id}', [ProfController::class, 'destroy'])->name('profs.destroy');
Route::get('/Students', [StudentController::class ,'index']);