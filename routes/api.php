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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/student','App\Http\Controllers\TestController@listStudents');
Route::post('/student','App\Http\Controllers\TestController@create');

Route::get('/student/{id}','App\Http\Controllers\TestController@getStudentByID');


Route::put('/student/{id}','App\Http\Controllers\TestController@updateStudent');

Route::delete('student/{id}','App\Http\Controllers\TestController@deleteStudent');