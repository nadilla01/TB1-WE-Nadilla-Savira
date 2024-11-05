<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentangKami');

Route::get('/layanan-kami', function () {
    return view('layanankami');
})->name('layananKami');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/hubungi', function () {
    return view('hubungi');
})->name('hubungi');
