<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//fallback route
//in this way we allow Vue js handlying any route
//so the route is passed from Laravel to Vue Js and then is from there if the route does not exist where we will get the 404
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any','^(?!api\/)[\/\w\<-]*');
