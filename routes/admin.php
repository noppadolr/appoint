<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('backend.login');
});

Route::get('user/login',[AdminController::class,'login'])->name('user.login');

Route::controller(AdminController::class)
    ->prefix('admin')
    ->as('admin.')
    ->middleware('admin')
    ->group(function () {
        Route::get('/dashboard','AdminDashboard')->name('dashboard');

    });

// Route::get('admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');



require __DIR__.'/auth.php';