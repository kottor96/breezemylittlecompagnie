<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Models\Employe;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class,'index'])->name('home');


Route::get('/produits', [ProduitController::class,'index'])->name('produit');

Route::get('/team', [EmployeController::class,'index'])->name('team');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
