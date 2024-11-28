<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StatisticalController;
use App\Http\Controllers\ProductController;


// Trang đăng nhập và xử lý đăng nhập
Route::get('/login-admin', [AuthController::class, 'login_index'])->name('login.index');
Route::post('/login-admin', [AuthController::class, 'login_post'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Trang admin với kiểm tra đăng nhập
Route::get('/admin', function () {
    $user = Session::get('user_admin');
    if (!$user) {
        return redirect()->route('login.index');
    }
    return view('admin');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/detail/{id}', [HomeController::class, 'detail']);
Route::get('/list-product/{id}', [HomeController::class, 'list']);

Route::post('/add-to-cart', [CartController::class, 'savecart']);
Route::get('/load-cart', [CartController::class, 'loadcart']);

Route::get('/cart-detail', [CartController::class, 'detailcart']);
Route::post('/update-cart', [CartController::class, 'update_cart']);
Route::get('/delete-p/{session_id}', [CartController::class, 'delete_cart']);
Route::get('/delete-all-p', [CartController::class, 'delete_all_product']);
Route::get('/info-cart', [CartController::class, 'infocart']);


Route::get('/login', [CustomerController::class, 'login_index']);
Route::post('/login-post', [CustomerController::class, 'login_post']);

Route::get('/register', [CustomerController::class, 'register_index']);
Route::post('/register-post', [CustomerController::class, 'register_post']);

Route::get('/logout', [CustomerController::class, 'logout']);
Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/dashboard/get', [DashboardController::class, 'get'])->name('dashboard.get');



Route::get('/search', [HomeController::class, 'search']);
Route::get('/user-order', [CustomerController::class, 'get_order']);

Route::get('/user-info', [CustomerController::class, 'userinfo']);
Route::get('/order-info', [CustomerController::class, 'get_order']);
Route::get('/order-trash/{id}', [OrderController::class, 'trash']);

Route::prefix('orders')->group(function () {
    Route::post('/save-order', [OrderController::class, 'save'])->name('orders.save');
    Route::post('/change-status', [OrderController::class, 'change'])->name('orders.status');
    Route::get('/export-to-word/{id}', [OrderController::class, 'exporttoword'])->name('orders.export');
    Route::get('/index', [OrderController::class, 'index'])->name('orders.index');
});

Route::prefix('categories')->group(function () {
    Route::get('/index', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/save', [CategoryController::class, 'save'])->name('categories.save');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/saveedit/{id}', [CategoryController::class, 'saveedit'])->name('categories.saveedit');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
});

Route::prefix('statistics')->group(function () {
    Route::get('/index', [StatisticalController::class, 'index'])->name('statistics.index');
    Route::get('/create', [StatisticalController::class, 'create'])->name('statistics.create');
    Route::post('/save', [StatisticalController::class, 'save'])->name('statistics.save');
    Route::get('/edit/{id}', [StatisticalController::class, 'edit'])->name('statistics.edit');
    Route::post('/saveedit/{id}', [StatisticalController::class, 'saveedit'])->name('statistics.saveedit');
    Route::get('/delete/{id}', [StatisticalController::class, 'delete'])->name('statistics.delete');
});

Route::prefix('products')->group(function () {
    Route::get('/index', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/save', [ProductController::class, 'save'])->name('products.save');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/saveedit/{id}', [ProductController::class, 'saveedit'])->name('products.saveedit');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
});
