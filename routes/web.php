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
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/photographer_portfolio', function () {
    return view('photographer_portfolio');
});

Route::get('/photography', function () {
    return view('photography');
});

Route::get('/portfolio-single', function () {
    return view('portfolio-single');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/community', function () {
    return view('community');
});






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
