<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//users

Route::post('login',[UserController::class, 'login'])->name('login');
Route::get('login',function () {
    return '401';
});

Route::post('logout',[UserController::class, 'logout'])->name('logout')->middleware('auth:sanctum');
Route::get('logout',function () {
    return '401';
});

Route::group(['prefix'=> 'users', 'as' => 'users.','middleware' => 'auth:sanctum'], function(){
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::post('create', [UserController::class, 'create'])->name('create')->withoutMiddleware('auth:sanctum');
    Route::put('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');

});

//products
Route::group(['prefix'=> 'products', 'as' => 'products.','middleware' => 'auth:sanctum'], function(){
   Route::get('index',[ProductsController::class, 'index'])->name('index');
   Route::post('create',[ProductsController::class, 'create'])->name('create');
   Route::put('edit/{id}', [ProductsController::class, 'edit'])->name('edit');
   Route::delete('delete/{id}', [ProductsController::class, 'delete'])->name('delete');
});


//order
Route::group(['prefix'=> 'orders', 'as' => 'orders.','middleware' => 'auth:sanctum'], function (){
     Route::get('index',[OrdersController::class, 'index'])->name('index');
     Route::post('create',[OrdersController::class, 'create'])->name('create');
     Route::put('edit/{id}',[OrdersController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [OrdersController::class, 'delete'])->name('delete');


});

//categories
Route::group(['prefix'=> 'categories', 'as' => 'categories.','middleware' => 'auth:sanctum'], function(){
    Route::get('index',[CategoriesController::class, 'index'])->name('index');
    Route::post('create',[CategoriesController::class, 'crate'])->name('create');
    Route::put('edit/{id}',[CategoriesController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [CategoriesController::class, 'delete'])->name('delete');


});
