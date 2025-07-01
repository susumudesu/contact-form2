<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

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
Route::post('register',[AuthController::class,'store']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'destroy']);
Route::get('/', [AuthController::class, 'index']);

Route::post('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::post('/thanks', [ContactController::class, 'thanks']);
Route::get('/admin', [ContactController::class, 'admin']);