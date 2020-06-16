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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/join', 'TablesController@join');
Route::get('/employee/{id}', 'TablesController@show');
Route::get('/companies', 'TablesController@company');
Route::get('/employees', 'TablesController@employee');
Route::get('/events', 'TablesController@event');
Route::post('/events', 'TablesController@create');
Route::get('/home', 'TablesController@showAll');
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');

