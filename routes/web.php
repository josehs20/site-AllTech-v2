<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/quem-somos', function () {
    return view('quemsomos');
})->name('quem-somos');

Route::get('/solucao', function () {
    return view('solucao');
})->name('solucao');

Route::get('/downloads', function () {
    return view('downloads');
})->name('downloads');
