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

Route::get('/home', function () {
    return view('frontEnd.pages.home');
})->name('home');


Route::get('/about', function () {
    return view('frontEnd.pages.about-us');
})->name('about');


Route::get('/contact', function () {
    return view('frontEnd.pages.contact');
})->name('contact');


Route::get('/courses', function () {
    return view('frontEnd.pages.courses');
})->name('courses');

Route::get('/course-details', function () {
    return view('frontEnd.pages.course-details');
})->name('course-details');

Route::get('/elements', function () {
    return view('frontEnd.pages.elements');
})->name('elements');

Route::get('/blog', function () {
    return view('frontEnd.pages.blog');
})->name('blog');

Route::get('/single-blog', function () {
    return view('frontEnd.pages.single-blog');
})->name('single-blog');

