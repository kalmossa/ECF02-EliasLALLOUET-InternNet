<?php

use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');


Route::get('/offers/{offer}', [OfferController::class, 'show'])->name('offers.show');


Route::middleware('auth')->group(function () {
    // Création d'une offre de stage (réservé aux entreprises authentifiées)
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');

Route::get('/offers/{id}', 'OfferController@show')->name('offers.show');
Route::resource('admin/users', UserController::class);


require __DIR__.'/auth.php';
