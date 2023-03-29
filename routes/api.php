<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/////test
Route::group(['prefix' => 'user', 'middleware' => 'auth:sanctum'], function() {
    Route::get('/', UserController::class); # auto access to __invoke fn
    Route::get('/index', UserController::class)->name('index');
    Route::post('/login', [UserController::class, 'login']);
});

