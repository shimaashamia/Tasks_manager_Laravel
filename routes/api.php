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
Route::group(['namespace'=>'API'],function(){
	Route::put('/update/{id?}',['as'=>'user.update','uses'=>'settingController@update']);
});

// Route::group(['namespace' => 'API', "middleware" => ['auth:api']], function () {
//     Route::group(['prefix' => 'user'], function () {
//         Route::delete('/delete/{id?}', ['as' => 'user.destroy', 'uses' => 'UserController@destroy']);
//         Route::put('/update/{id?}', ['as' => 'user.update', 'uses' => 'UserController@update']);
//         Route::get('/{id?}', ['as' => 'user.show', 'uses' => 'UserController@show']);
//     });

// });