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

Route::redirect('/','/questions');


Route::prefix('questions')->group(function() {
    // Route::get('/', 'QuestionsController@index');

    Route::get('/', 'QuestionsController@index');
    Route::post('/', 'QuestionsController@submit');

    Route::get('/create', function () {
        return view('questions_create');
    });
});
Route::prefix('answers')->group(function(){
    Route::get('/',function () {
        return redirect('/questions');
    });
    Route::get('/{id}','AnswerController@show');
    Route::post('/{id}', 'AnswerController@post');
});