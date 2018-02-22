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


Route::get('home/', 'HomeController@index');
Route::get('load_quiz/{id}', 'LoadQuizController@index');

Route::get('/show_quiz/{id}', ['uses' =>'LoadQuizController@index']);
Route::post('/show_quiz_post/', ['uses' =>'LoadQuizController@quiz_post']);

