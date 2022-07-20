<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('/product', ProductController::class);

Route::prefix('/product')->group(function () {
    Route::get('/{paginate}', [ProductController::class, 'index']);
    Route::get('/show/{product}', [ProductController::class, 'show']);

    Route::post('/create', [ProductController::class, 'store']);
    Route::patch('/update', [ProductController::class, 'store']);
    Route::delete('/delete', [ProductController::class, 'destroy']);
});
