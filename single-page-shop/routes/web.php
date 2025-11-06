<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;


Route::get('/', [ProductController::class, 'home'])->name('product.home');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/add-product', [ProductController::class, 'addProduct'])->name('product.addProduct');
Route::post('/add-product', [ProductController::class, 'insertProduct'])->name('product.insertProduct');

Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/edit-product/{id}', [ProductController::class, 'updateProduct'])->name('product.update');

Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');


Route::get('/user-list', [UserController::class, 'index'])->name('user.index');

Route::get('/add-user', [UserController::class, 'addNewUser'])->name('user.addNewUser');
Route::post('/add-user', [UserController::class, 'registerNewUser'])->name('user.registerNewUser');

Route::get('/edit-info/{id}', [UserController::class, 'editUserInfo'])->name('user.edit');
Route::post('/edit-info/{id}', [UserController::class, 'updateUserInfo'])->name('user.updateUserInfo');

Route::get('/delete-user-info/{id}', [UserController::class, 'deleteUserInfo'])->name('user.deleteUserInfo');




// Route::resource('customers', CustomerController::class);

Route::resource('customers', CustomerController::class);

Route::resource('order', OrderController::class);
