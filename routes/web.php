<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/','home');

Route::middleware('auth', 'verified')->group(function(){
    Route::view('/dashboard', 'dashboard');
    Route::get('profile/edit', [ProfileController::class, 'edit'] )->name('profile.edit');
    Route::put('profile/edit', [ProfileController::class, 'updateProfileInformation'] );


});