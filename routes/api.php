<?php

use Illuminate\Http\Request;
use App\Bookable;   

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

Route::get('bookables',function(Request $request){
    return Bookable::all();
});

//single entry

Route::get('bookables/{id}',function(Request $request,$id){
    return Bookable::findOrFail($id);
});