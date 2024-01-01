<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\userAuthentication;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/admin', function () {
    return view('backend/dashboard');
})->middleware('userAuth');

Route::get('/login', function () {
    return view('backend/login');
});
Route::get('/teacher', function () {
    return "You are now a teacher dashboard";
});
Route::get('/student', function () {
    return "You are now a student dashboard";
});
Route::post('/login',[LoginController::class, 'authenticate'])->middleware('userAuth');
Route::get('/logout',[LoginController::class, 'logout']);