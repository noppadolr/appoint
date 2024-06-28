<?php

use App\Http\Controllers\PateinController;
use Illuminate\Support\Facades\Route;


Route::controller(PateinController::class)
    ->prefix('patein')
    ->as('patein.')
    ->middleware('patein')
    ->group(function () {
        Route::get('/dashboard','PateinDashboard')->name('dashboard');

    });




require __DIR__.'/auth.php';