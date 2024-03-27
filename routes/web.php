<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('toko', [Controller::class, 'toko'])->name('toko');


Route::get('/indexmitra', [Controller::class, 'indexmitra'])->name('indexmitra');

Route::get('katalogmitra', [ProductController::class, 'katalogmitra'])->name('katalogmitra');
//edit katalogmitra/{id}
Route::get('katalogmitra/{id}/edit', [ProductController::class, 'edit'])->name('katalogmitra.edit');
//update katalogmitra/{id}
Route::post('katalogmitra/{id}/update', [ProductController::class, 'update'])->name('katalogmitra.update');
//delete katalogmitra/{id}
Route::get('katalogmitra/{id}/delete', [ProductController::class, 'delete'])->name('katalogmitra.delete');
//detail katalogmitra/{id}
Route::get('product/{id}/detail', [ProductController::class, 'detail'])->name('product.detail');
//post mitra.store
Route::post('mitra/store', [ProductController::class, 'store'])->name('mitra.store');

Route::get('/product', function () {
    return view('product');
});

// Route::get('/myaccount', function () {
//     return view('my-account');
// });

Route::get('/productmitra', function () {
    return view('product-mitra');
});

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
//LOGOUT
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//account
Route::get('/myaccount', [UserController::class, 'index'])->name('home')->middleware('auth');
//UPDATE
Route::post('updateprofile', [UserController::class, 'update'])->name('updateprofile')->middleware('auth');

Route::get('allproduct/{id}',['App\Http\Controllers\ProductController', 'allproduct'])->name('allproduct');

Route::get('/contact-mitra', function () {
    return view('contact-mitra');
});
