<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Pages
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/slider-parallax', function () {
    return view('pages.slider-parallax');
})->name('slider.parallax');

Route::get('/slider-carousel', function () {
    return view('pages.slider-carousel');
})->name('slider.carousel');

// Portfolio Pages
Route::get('/portfolio-1', function () {
    return view('pages.portfolio-1');
})->name('portfolio.1');

Route::get('/portfolio-2', function () {
    return view('pages.portfolio-2');
})->name('portfolio.2');

Route::get('/portfolio-3', function () {
    return view('pages.portfolio-3');
})->name('portfolio.3');

Route::get('/portfolio-4', function () {
    return view('pages.portfolio-4');
})->name('portfolio.4');

Route::get('/portfolio-5', function () {
    return view('pages.portfolio-5');
})->name('portfolio.5');

Route::get('/portfolio/single', function () {
    return view('pages.single-portfolio');
})->name('portfolio.single');

// Blog Pages
Route::get('/blog', function () {
    return view('pages.blog-sidebar');
})->name('blog.sidebar');

Route::get('/blog-no-sidebar', function () {
    return view('pages.blog-no-sidebar');
})->name('blog.no-sidebar');

Route::get('/blog-list', function () {
    return view('pages.blog-list');
})->name('blog.list');

Route::get('/blog-card', function () {
    return view('pages.blog-card');
})->name('blog.card');

Route::get('/blog/post', function () {
    return view('pages.single-post');
})->name('blog.post');

// Other Pages
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');

Route::get('/404', function () {
    return view('errors.404');
})->name('error.404');
