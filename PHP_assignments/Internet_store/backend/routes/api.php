<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;

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
  Route::get('/search/{keyword}', [ProductsController::class, 'search']);
  Route::get('/{id}', [ProductsController::class, 'singleProduct'])->where('id', '[0-9]+');
  Route::post('/', [ProductsController::class, 'create']);
  Route::delete('/{id}', [ProductsController::class, 'delete'])->where('id', '[0-9]+');
  Route::put('/{id}', [ProductsController::class, 'edit'])->where('id', '[0-9]+');
});

Route::group(['prefix' => 'categories'], function () {
  Route::get('/', [CategoriesController::class, 'index']);
  Route::post('/', [CategoriesController::class, 'create']);
  Route::delete('/{id}', [CategoriesController::class, 'delete'])->where('id', '[0-9]+');
  Route::put('/{id}', [CategoriesController::class, 'edit'])->where('id', '[0-9]+');
});
