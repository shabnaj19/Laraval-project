<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;


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

Route::resource('books',BookController::class);
//Route::resource('users',UserController::class);

Route::get('/users', [UserController::class, 'index']);
Route::post('/users/store', [UserController::class, 'store']);
Route::get('/users/successLogin', [UserController::class, 'successLogin']);
Route::get('/users/logout', [UserController::class, 'logout']);

/*
Route::get('books', 'BookController@index');
Route::get('books/{id}', 'BookController@show');
Route::post('books, 'BookController@store');
Route::put('books/{id}', 'BookController@update');
Route::delete('books/{id}','BookController@destroy');

*/
/*
Route::get('/home', function () {
    return view('welcome');
});*/
