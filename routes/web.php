<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Plans\PlansIndex;
use App\Livewire\Plans\PlansShow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Plan management
    Route::get('/plans', PlansIndex::class)->name('plans.index');
    Route::get('/plans/{plan}', PlansShow::class)->name('plans.show');
});

require __DIR__.'/auth.php';
