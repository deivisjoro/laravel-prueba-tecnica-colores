<?php

use App\Http\Controllers\ColorCompatibilityController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/colors/form', [ColorCompatibilityController::class, 'showForm'])->name('colors.form');

Route::post('/colors/compatibility', [ColorCompatibilityController::class, 'colorCompatibility'])->name('colors.compatibility');

Route::get('/help', function () {
    return view('help');
})->name('help');

// Captura todas las rutas no definidas
Route::fallback(function() {
    return response()->view('errors.404', [], 404);
});