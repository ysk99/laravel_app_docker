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

// add topic
//Route::resource('topic', 'TopicController');
//Route::match(['get', 'options'], 'topic', 'TopicController@index');
Route::middleware(['cors'])->group(function () {
    Route::options('topic', function () {
        return response()->json();
    });

    Route::post('topic', 'TopicController@index');
}); 