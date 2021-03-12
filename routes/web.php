<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/bonjour', function () {
    return view('bonjour');
})->name('bonjour');

Route::get('/inscription', function () {
    return view('auth.inscription');
})->name('inscription');

Route::get('/connexion', function () {
    return view('auth.connexion');
})->name('connexion');

Route::get('/troc', function () {
    return view('troc');
})->name('troc');

Route::get('/vitrine', function () {
    return view('vitrine');
})->name('vitrine');

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');

Route::get('/compte', function () {
    return view('compte');
})->name('compte');