<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Controllers\Api\v1\Product\ProductController;




Route::group(['prefix' => 'product'], function() {
    Route::get('/', ProductController::class); # auto access to __invoke fn
    Route::get('/index', ProductController::class)->name('index');
    Route::get('/create', [ProductController::class, 'create']);
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/', UserController::class); # auto access to __invoke fn
    Route::get('/index', UserController::class)->name('index');
    Route::get('/create', [UserController::class, 'create']);
});