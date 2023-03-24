<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::group(['prefix' => 'products'], function () {
  Route::get('/', [ProductsController::class, 'index']);
  Route::post('/', [ProductsController::class, 'create']);
  Route::delete('/{id}', [ProductsController::class, 'delete'])->where('id', '[0-9]+');
});
