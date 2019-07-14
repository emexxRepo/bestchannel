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

Route::apiResource('users', 'UserController')->middleware('auth:api');
Route::post('/user/login', 'LoginController@login')->middleware('guest');
Route::post('/user/register', 'LoginController@register')->middleware('guest');
