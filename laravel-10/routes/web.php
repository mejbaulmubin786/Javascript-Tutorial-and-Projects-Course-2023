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
    return view('welcome');
});

Route::get('/about', function () {
    return view('information');
});

Route::get('/samepagename', function () {
    return view('samepagename');
});

Route::get('/contact', function () {
    return "<h1>Mejbaul Mubin</h1>";
});

Route::view('new', 'page');

Route::get('/page/newpage', function () {
    return view('another-page');
});
