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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/causes', function () {
    return view('causes');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/contacts', function () {
    return view('contacts');
});