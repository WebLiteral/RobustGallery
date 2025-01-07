<?php

use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\FanartController;
use App\Http\Controllers\AdminArtworkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view('errors.404'); 
});


Route::get('/', [ArtworkController::class, 'latest'])->name('artworks.show');

Route::get('/funny', function(){
    return view('funny');
});

Route::get('/rps', function(){
    return view('rps');
});

Route::get('/charlieboard', function(){
    return view('charlieboard');
});

Route::get('/about', function(){
    return view('about');
});

Route::redirect('{any}/.env', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/artworks', [AdminArtworkController::class, 'index'])->name('admin.artworks');
    Route::get('/dashboard/artworks/create', [AdminArtworkController::class, 'create'])->name('admin.artworks.create');
    Route::post('/dashboard/artworks/store', [AdminArtworkController::class, 'store']);
    Route::get('/dashboard/artworks/edit/{slug}', [AdminArtworkController::class, 'edit'])->name('admin.artworks.edit');
    Route::patch('/dashboard/artworks/update/{slug}', [AdminArtworkController::class, 'update'])->name('admin.artworks.update');
    Route::delete('/dashboard/artworks/delete/{slug}', [AdminArtworkController::class, 'destroy'])->name('admin.artworks.delete');
});



require __DIR__.'/auth.php';

Route::get('/artwork', [ArtworkController::class, 'latest'])->name('artworks.show');
Route::get('/artwork/index', [ArtworkController::class, 'index'])->name('index');
Route::get('/artwork/random', [ArtworkController::class, 'random'])->name('random');
Route::get('/artwork/{slug}', [ArtworkController::class, 'show'])->name('artworks.show');