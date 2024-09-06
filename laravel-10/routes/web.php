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

Route::get('/post', function () {
    return view('mypost');
});

Route::get('/contact/{id}', function ($id) {
    return "<h1>contact number: " . $id . "</h1>";
});

Route::get('/about/{id?}', function ($id) { // id? oftional paramitter
    return "<h1>about ID: " . $id . "</h1>";
});

Route::get('/user/{id}', function ($id) {
    return 'User ID: ' . $id;
});

Route::get('/book/{id?}', function ($id = null) {
    if ($id) {
        return "<h1> The book name found</h1>";
    } else {
        return "<h1>The id is invalid</h1>";
    }
});

Route::get('/product/{category}/{id}/{name}', function ($category, $id, $name) {
    return "Category: " . $category . ", Product ID: " . $id . ", Product Name: " . $name;
});
