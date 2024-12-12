<?php

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArtworkController::class, 'latest'])->name('artworks.latest');

Route::get('/about', function(){
    return view('about');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/artwork/index', [ArtworkController::class, 'index'])->name('index');

Route::get('/random', [ArtworkController::class, 'random'])->name('random');




Route::get('/artwork/{slug}', [ArtworkController::class, 'show'])->name('artworks.show');
