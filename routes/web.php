<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcomne');
// });

Route::get('/user', function(){
    return view('admin');
});


Route::resource('/ver/{id}',ProfileController::class);

Route::group(['prefix'=>'admin','as'=>'admin'],function(){
    Route::resource('/',AdminController::class);
    Route::resource('/usuario',UsersController::class);
});