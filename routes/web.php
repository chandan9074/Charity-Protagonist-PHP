<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', 'HomeController@home');      
// Route::get('/signup', 'HomeController@signup');              
// Route::post('/_dbConnection', 'HomeController@db_signup');        

Route::get('/auth/login', [HomeController::class, 'login']);
Route::get('/auth/signup', [HomeController::class, 'signup']);
Route::post('/auth/save', [HomeController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [HomeController::class, 'check'])->name('auth.check');
Route::get('/users/dashboard', [HomeController::class, 'dashboard']);
Route::get('/users/profile', [HomeController::class, 'profile']);
Route::get('/feedback', [HomeController::class, 'feedback']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/users/profile/create_post', [HomeController::class, 'createPost']);
