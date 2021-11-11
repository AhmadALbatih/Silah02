<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\employeeController;
use App\Http\Middleware\AdminMiddleware;

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


Auth::routes();

Route::get('/', function () {
  return view('/welcome');
});

Route::get('/employee', [App\Http\Controllers\employeeController::class]);
Route::resource('/employee', employeeController::class,UserController::class);
Route::resource('/User', UserController::class)->middleware('admin');

