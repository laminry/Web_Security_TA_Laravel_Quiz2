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

Route::get('/user','usercontroller@all');
Route::post('/user/register','usercontroller@register');
Route::post('/user/update/{id}','usercontroller@update');
Route::get('/user/delete/{id}','usercontroller@delete');

Route::get('/item','itemcontroller@all');
Route::get('/item/register','itemcontroller@register');
Route::post('/item/update/{id}','itemcontroller@update');
Route::get('/item/delete/{id}','itemcontroller@delete');
