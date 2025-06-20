<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowDestination;
use App\Livewire\DestinationDetail;
use App\Livewire\ShowHotel;
use App\Livewire\HotelDetail;
use App\Livewire\ShowContactPage;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', ShowHome::class)->name('home');
Route::get('/destination', ShowDestination::class)->name('destination');
Route::get('/destination/{id}', DestinationDetail::class)->name('destinationDetail');
Route::get('/hotel', ShowHotel::class)->name('hotel');
Route::get('/hotel/{id}', HotelDetail::class)->name('hotelDetail');
Route::get('/contact', ShowContactPage::class)->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


