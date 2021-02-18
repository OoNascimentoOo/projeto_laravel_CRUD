<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::group(['middleware' => 'web'], function() {
    Route::get('/', 'HomeController@index');
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/schools', 'SchoolsController@index')->middleware('auth');
Route::get('/schools/new', 'SchoolsController@new')->middleware('auth');
Route::post('schools/add', 'SchoolsController@add')->middleware('auth');
Route::get('schools/{id}/edit', 'SchoolsController@edit')->middleware('auth');
Route::post('/schools/update/{id}', 'SchoolsController@update')->middleware('auth');
Route::delete('/schools/delete/{id}', 'SchoolsController@delete')->middleware('auth');

Route::get('/courses', 'CoursesController@index')->middleware('auth');
Route::get('/courses/new', 'CoursesController@new')->middleware('auth');
Route::post('courses/add', 'CoursesController@add')->middleware('auth');
Route::get('courses/{id}/edit', 'CoursesController@edit')->middleware('auth');
Route::post('/courses/update/{id}', 'CoursesController@update')->middleware('auth');
Route::delete('/courses/delete/{id}', 'CoursesController@delete')->middleware('auth');


