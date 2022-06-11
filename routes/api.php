<?php

use App\Http\Controllers\BookableAvailabilityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookables;
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

//Route::get('bookables',[Bookables::class,'index']);

//Route::get('bookables/{id}',[Bookables::class,'show']);

Route::apiResource('/bookables', Bookables::class);
//Route::apiResource('bookables', Bookables::class)->only(['index','show']);
Route::get('/bookables/{bookables}/availability',BookableAvailabilityController::class)
->name('bookable.availability.show');