<?php

use App\Http\Controllers\HomeController;
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
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/send', [HomeController::class, 'store']);
Route::get('/contactList', [HomeController::class, 'contactList']);
Route::get('/delete/{s_id}', [HomeController::class, 'delete']);
Route::get('/edit/{s_id}', [HomeController::class, 'edit']);
Route::post('/update/{s_id}', [HomeController::class, 'update']);
