<?php

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
Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/careers', function () {
    return view('careers');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
