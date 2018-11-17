<?php

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

Route::any('/store', ['uses' => 'WeddingController@store']);
Route::any('/commitList', ['uses' => 'WeddingController@getCommitList']);
