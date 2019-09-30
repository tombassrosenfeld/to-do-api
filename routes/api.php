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

});

Route::prefix("lists")->group(function() {
    Route::post("", "TaskLists@store");
    Route::get("", "TaskLists@index");

});

Route::prefix("tasks")->group(function() {
    Route::post("", "Tasks@store");
    Route::get("", "Tasks@index");

});