<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Categories\CategoryController;
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

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);


Route::group(['prefix' => 'auth'], function () {
        Route::post('register', [RegisterController::class, 'action']);
        Route::post('login', [LoginController::class, 'action']);
});




