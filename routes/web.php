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
    return view('pages/index');
});

Route::get('/index', function () {
    return view('pages/index');
});

Route::get('/aboutme', function () {
    return view('pages/aboutme');
});

Route::get('/work', function () {
    return view('pages/work');
});


Route::get('/cert', function() {
    return view('pages/cert');
});

Route::get('/contactme', function () {
    return view('pages/contactme');
});

Route::get('/aboutme/work', function () {
    return view('pages/work');
});

Route::get('/tech', function () {
    return view('pages/tech');
});