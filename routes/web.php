<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajax', function () {
    return view('ajax');
});

// Route::get('/checkConnection', [UserController::class, 'checkConnection']);

// Route::get('/user', 'UserController@getAll');

Route::get('/user', [UserController::class, 'getAll'])->name('getUser');

Route::get('/show', [UserController::class, 'showAll']);

Route::get('/ajaxmsg', [UserController::class, 'getMsg'])->name('getMassage');

