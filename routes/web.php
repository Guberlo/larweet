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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::resource('/tweets', App\Http\Controllers\TweetController::class);

Route::resource('/users', App\Http\Controllers\UserController::class);

Route::resource('/explore', App\Http\Controllers\ExploreController::class);

Route::post('/users/follow/{user}', [App\Http\Controllers\FollowController::class, 'store']);

