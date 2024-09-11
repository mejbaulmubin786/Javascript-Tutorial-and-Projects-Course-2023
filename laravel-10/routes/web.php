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
})->name('welcomepage');

// Route::get('/home', function () {
//     return view('pages/home');
// });

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/services', function () {
    return view('pages/services');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/page2', function () {
    return view('TemplateInheritance/page2');
});

Route::get('/page3', function () {
    return view('pages/header');
});

Route::get('/test', function () {
    return view('test');
});