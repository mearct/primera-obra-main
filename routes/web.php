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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home.home');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/contacts', function () {
    return view('contacts.contacts');
});

Route::get('/gallery', function () {
    return view('gallery.gallery');
});

Route::get('/news', function () {
    return view('news.news');
});

Route::get('/works', function () {
    return view('works.works');
});


