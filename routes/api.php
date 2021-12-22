<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



//Route::resource('users',UserController::class);

/*
//public routes 
Route::post('/register',[AuthController::class,'register']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/users/store', [UserController::class, 'store']);

//Protected routes-Only authenticated users can have access to protected routes//
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/users/successLogin', [UserController::class, 'successLogin']);
    Route::get('/users/logout', [UserController::class, 'logout']);
    Route::resource('books',BookController::class);
    Route::post('/logout',[AuthController::class,'logout']);

 });
 */