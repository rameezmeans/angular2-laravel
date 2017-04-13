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

    Route::get('mediaitems', 'MediaItemController@getMediaItems');
    Route::delete('delete_item/{id}', 'MediaItemController@deleteMediaItem');
    Route::post('add_item', 'MediaItemController@addMediaItem');


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
