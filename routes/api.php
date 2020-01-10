<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("boards")->group(function() {
    Route::post("", "Boards@store");
    Route::get("", "Boards@index");
    Route::get("{board}", "Boards@show");
    Route::put("{board}", "Boards@update");
    Route::delete("{board}", "Boards@destroy");
});

Route::prefix("lists")->group(function() {
    Route::post("", "TaskLists@store");
    Route::get("", "TaskLists@index");
    Route::get("{list}", "TaskLists@show");
    Route::put("{list}", "TaskLists@update");
    Route::delete("{list}", "lists@destroy");
});

Route::prefix("tasks")->group(function() {
    Route::post("", "Tasks@store");
    Route::get("", "Tasks@index");
    Route::get("{task}", "Tasks@show");
    Route::put("{task}", "Tasks@update");
    Route::delete("{task}", "Tasks@destroy");
});