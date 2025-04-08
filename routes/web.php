<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KisahController;

Route::get('/', function () {
    return view('home');
});

Route::get('/quiz', function () {
    return view('quiz'); })->name('quiz');


Route::post('/contact', function () {
    return back()->with('success', 'Pesan berhasil dikirim!');
});

Route::get('/kisah/{slug}', [KisahController::class, 'show'])->name('kisah.show');