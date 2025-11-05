<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('aboutus');
});
Route::get('/contact', function () {
    return view('contactus');
});
Route::post('/contact', [ContactController::class, 'emailSend'])->name('contact.send');