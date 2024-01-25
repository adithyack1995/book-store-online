<?php

use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\PurchaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController as ControllersBookController;
use App\Http\Controllers\DashboardController as ControllersDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', [LoginController::class, 'index'])->name('admin.login.page');
        Route::post('/', [LoginController::class, 'store'])->name('admin.login');
    });
    Route::group(['middleware' => 'authAdmin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::group(['prefix' => 'books'], function () {
            Route::get('/', [BookController::class, 'index'])->name('books.index');
            Route::get('/create', [BookController::class, 'create'])->name('books.create');
            Route::post('/', [BookController::class, 'store'])->name('books.store');
            Route::get('/{book}', [BookController::class, 'show'])->name('books.show');
            Route::get('/edit/{book}', [BookController::class, 'edit'])->name('books.edit');
            Route::put('/{book}', [BookController::class, 'update'])->name('books.update');
            Route::delete('/delete/{book}', [BookController::class, 'destroy'])->name('books.delete');
        });
        Route::get('/purchases', [PurchaseController::class, 'index'])->name('purchases.index');
        Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});
Route::get('/', [HomeController::class, 'index'])->name('user.home');

Route::group(['prefix' => 'user'], function () {

    Route::group(['prefix' => 'reg'], function () {
        Route::get('/', [UserRegisterController::class, 'create'])->name('user.create');
        Route::post('/', [UserRegisterController::class, 'store'])->name('user.store');
    });
    Route::group(['prefix' => 'login'], function () {
        Route::get('/', [UserLoginController::class, 'index'])->name('user.login.page');
        Route::post('/', [UserLoginController::class, 'store'])->name('user.login');
    });
    Route::group(['middleware' => 'authUser'], function () {

        Route::get('/dashboard', [ControllersDashboardController::class, 'index'])->name('user.dashboard.index');
        Route::get('/books', [ControllersBookController::class, 'index'])->name('user.books.index');
        Route::get('/book-view/{book}', [ControllersBookController::class, 'show'])->name('user.book.show');
        Route::post('/book/review', [RatingController::class, 'store'])->name('user.rating.store');


        Route::get('/cart-items', [ShoppingCartController::class, 'index'])->name('cart.index');
        Route::get('/add-to-cart/{user}/{book}', [ShoppingCartController::class, 'store'])->name('cart.store');
        Route::get('/view-cart', [ShoppingCartController::class, 'show'])->name('cart.view');
        Route::post('/update-cart/{shoppingCart}', [ShoppingCartController::class, 'update'])->name('cart.update');
        Route::delete('/delete-cart/{shoppingCart}', [ShoppingCartController::class, 'destroy'])->name('cart.delete');

        Route::get('/logout', [UserLoginController::class, 'logout'])->name('user.logout');
    });
});
