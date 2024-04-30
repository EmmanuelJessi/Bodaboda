<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodaBodaCyclistController;




Route::get('/', function () {
    return view('welcome');
});




// Register a new Boda-Boda Cyclist
Route::post('/boda-boda-cyclists', [BodaBodaCyclistController::class, 'store'])->name('boda-boda-cyclists.store');

// Show the entire registered Boda-Boda Cyclists
Route::get('/boda-boda-cyclists', [BodaBodaCyclistController::class, 'index'])->name('boda-boda-cyclists.index');

// Show the form to create a new Boda-Boda Cyclist
Route::get('/boda-boda-cyclists/create', [BodaBodaCyclistController::class, 'create'])->name('boda-boda-cyclists.create');

// Show a specific Boda-Boda Cyclist
Route::get('/boda-boda-cyclists/{cyclist}', [BodaBodaCyclistController::class, 'show'])->name('boda-boda-cyclists.show');

// Show the form to edit a Boda-Boda Cyclist
Route::get('/boda-boda-cyclists/{cyclist}/edit', [BodaBodaCyclistController::class, 'edit'])->name('boda-boda-cyclists.edit');

// Update a specific Boda-Boda Cyclist
Route::put('/boda-boda-cyclists/{cyclist}', [BodaBodaCyclistController::class, 'update'])->name('boda-boda-cyclists.update');

// Delete a specific Boda-Boda Cyclist
Route::delete('/boda-boda-cyclists/{cyclist}', [BodaBodaCyclistController::class, 'destroy'])->name('boda-boda-cyclists.destroy');

// Search for record(s) using any keywords used by a user
Route::get('/boda-boda-cyclists/search', [BodaBodaCyclistController::class, 'search'])->name('boda-boda-cyclists.search');
