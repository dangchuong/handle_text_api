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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['prefix' => 'v1'], function(){
	Route::get('current-text', 'TextController@showCurrentText')->name('current_text');
	Route::put('color-cup', 'TextController@changeColorCup')->name('color_cup');
	Route::put('type-drink', 'TextController@changeTypeDrink')->name('type_drink');
	Route::put('table-material', 'TextController@changeTableMaterial')->name('table_material');
	Route::put('temperature', 'TextController@changeTemperature')->name('temperature');
});