<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;


Route::controller(DoctorController::class)
    ->prefix('doctor')
    ->as('doctor.')
    ->middleware('doctor')
    ->group(function () {
        Route::get('/dashboard','DoctorDashboard')->name('dashboard');

    });




require __DIR__.'/auth.php';