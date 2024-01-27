<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('cart', [FrontendProductController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [FrontendProductController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [FrontendProductController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [FrontendProductController::class, 'remove'])->name('remove.from.cart');
});
// Route::get('admin/login', [AdminController::class, 'login']);
// Route::post('admin/login', [AdminController::class, 'store'])->name('adminLogin');
// Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware()->guard('admin');
// Route::get('student/login', [StudentController::class, 'login']);
// Route::post('student/login', [StudentController::class, 'store'])->name('studentLogin');
// Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard')->middleware()->guard('student');


require __DIR__.'/auth.php';
