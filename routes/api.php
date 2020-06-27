<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//posts
Route::get('/posts/{limit?}','Api\PostController@getAllPosts');
Route::get('/posts/show/{slug}','Api\PostController@getPost');
//services
Route::get('/services/{limit?}','Api\ServiceController@getAllServices');
Route::get('/services/show/{slug}','Api\ServiceController@getService');
//sliders
Route::get('/slides/{limit?}','Api\SliderController@getAllSlides');

Route::get('/page/{slug}','Api\PageController@getPage');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
