<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ToppingController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class,'index']);

Route::middleware('auth')->group(function(){
    Route::get('check_out', [HomeController::class,'check_out'])->name('check_out');
    Route::post('submit_order', [HomeController::class,'submit_order'])->name('submit_order');
    Route::get('ordered', [HomeController::class,'ordered'])->name('ordered');
});
Auth::routes();
Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'loginPost'])->name('admin.loginPost');
    Route::middleware('admin')->group(function(){
        Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('logout', [AdminController::class, 'logout']);
        Route::get('category/getAllCategory',[\App\Http\Controllers\CategoryController::class,'allCategory']);
        Route::post('category/search',[\App\Http\Controllers\CategoryController::class,'searchCategory'])->name('category.search');
        Route::resource('category', CategoryController::class);
        Route::resource('slide', SlideController::class);
        Route::resource('topping', ToppingController::class);
        Route::resource('product', ProductController::class);
    });
});
Route::get('product/{id}', [ProductController::class, 'getProductById']);

//danh sach cart
Route::get('list_cart',[CartController::class,'index'])->name('list_cart');

//add to cart
Route::POST('add_to_cart',[CartController::class,'add_to_cart'])->name('add_to_cart');

// Route::delete('delete_item_cart/{id}',[CartController::class,'delete_item_cart'])->name('delete_item_cart');

Route::post('delete_item_cart',[CartController::class,'delete_item_cart'])->name('delete_item_cart');

Route::delete('delete_all_cart',[CartController::class,'delete_all_cart'])->name('delete_all_cart');

Route::patch('update_cart', [CartController::class, 'update_cart'])->name('update_cart');

Route::post('get_ward/{id}',[HomeController::class, 'get_ward'])->name('get_ward');