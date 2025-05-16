<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServerController;
use Illuminate\Support\Facades\Route;

// Ana sayfa
Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog rotaları
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/yeni-metin2-pvp-servers', function(){
    return view('pages.yeni-metin2-pvp-servers');
})->name('yeni-metin2');

Route::get('/emek-servers', function(){
    return view('pages.emek-servers');
})->name('emek-servers');

Route::get('/wslik-pvp-servers', function(){
    return view('pages.wslik-pvp-servers');
})->name('wslik-pvp-servers');

Route::get('/zor-pvp-servers', function(){
    return view('pages.zor-pvp-servers');
})->name('zor-pvp-servers');

Route::get('/orta-pvp-servers', function(){
    return view('pages.orta-pvp-servers');
})->name('orta-pvp-servers');

Route::get('/server-ekle', function(){
    return view('pages.server-ekle');
})->name('server-ekle');

Route::get('/reklam', function(){
    return view('pages.reklam');
    })->name('reklam');

Route::get('/uye-giris', function(){
    return view('pages.uye-giris');
})->name('uye-giris');

Route::get('/sifremi-unuttum', function(){
    return view('pages.sifremi-unuttum');
})->name('sifremi-unuttum');

Route::get('/uye-ol',function(){
    return view('pages.uye-ol');
})->name('uye-ol');

// Server rotaları
Route::resource('servers', ServerController::class);

// Dashboard rotası
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth rotaları
require __DIR__.'/auth.php';
