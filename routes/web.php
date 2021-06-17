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
    return view('boards');
});

Route::get('/boards/', function () {
    return view('boards');
});


Route::group(["prefix" => "tasks"], function() {
    Route::get('create', function() { 
        return view('form-page');
    });
    Route::post('create', "Tasks@webCreateTask");
    Route::get('{task}', "Tasks@webShow");
});
