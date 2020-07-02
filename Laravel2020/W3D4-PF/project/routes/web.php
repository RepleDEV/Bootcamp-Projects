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
    return redirect('/questions');
});

Route::get('/questions', function() {
    return view('questions');
});

Route::get('/questions/create', function () {
    return view('questions_create');
});

Route::get('/answers', function() {
    return view('answers');
});

Route::get('/answers/{id}',function () {
    return 0;
});

Route::get('/master', function () {
    return view('templates.master');
});
