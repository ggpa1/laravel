<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Index@renderIndex');
Route::get('/task/create', 'Index@createTask');
Route::get('/task/delete/{id}', 'Index@deleteTask');
Route::get('/tasks/search', 'Index@searchTasks');

/* Route::get('/', function () {
    return view('welcome');
}); */
