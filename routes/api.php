<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\ChannelCollection;
use App\Category;
use App\Channel;

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

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/logout', 'AuthController@logout');
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');

Route::get('/users', function () {
    return new UserCollection(User::all());
});

Route::get('/categories', function () {
    return new CategoryCollection(Category::all());
});

Route::get('/channels', function () {
    return new ChannelCollection(Channel::with(['category', 'user'])->get());
});