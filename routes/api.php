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

Route::get('/news/{page?}/', 'ControllerNews@getPosts')
		->name('consultPosts')
		->where('page', '[0-9]+');
		
Route::get('/news/{id}/', 'ControllerNews@getPost')
		->name('consultPost');


	