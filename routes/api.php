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
//
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::resource('cal','Api\calRentControl');
// Route::get('calculateRent','Api\calRentControl@store');
Route::get('calculate/{unit}','Api\calRentControl@cal');
// Route::get('calc/{unit}','Api\calRentControl@test');
