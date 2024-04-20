<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
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

Route::group(['prefix'=> 'user', 'as' => 'user.','middleware' => 'auth:sanctum'], function(){
    Route::get('index', [UserController::class, 'index'])->name('index');
    Route::post('create', [UserController::class, 'create'])->name('create')->withoutMiddleware('auth:sanctum');
    Route::put('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');

});

//products
Route::group(['prefix'=> 'product', 'as' => 'product.','middleware' => 'auth:sanctum'], function(){
   Route::get('index',[ProductController::class, 'index'])->name('index');
   Route::post('create',[ProductController::class, 'create'])->name('create');
   Route::put('edit/{id}', [ProductController::class, 'edit'])->name('edit');
   Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('delete');
});


//order
Route::group(['prefix'=> 'order', 'as' => 'order.','middleware' => 'auth:sanctum'], function (){
     Route::get('index',[OrderController::class, 'index'])->name('index');
     Route::post('create',[OrderController::class, 'create'])->name('create');
     Route::put('edit/{id}',[OrderController::class, 'edit'])->name('edit');
     Route::get('show',[OrderController::class, 'show'])->name('show');
     Route::delete('delete/{id}', [OrderController::class, 'delete'])->name('delete');
});

//factors
Route::group(['prefix'=> 'factors', 'as' => 'factors.','middleware' => 'auth:sanctum'], function(){
    Route::get('index',[FactorController::class, 'index'])->name('index');
    Route::post('create',[FactorController::class, 'crate'])->name('create');
    Route::put('edit/{id}',[FactorController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [FactorController::class, 'delete'])->name('delete');
});

//team
Route::group(['prefix'=> 'team', 'as' => 'team','middleware' => 'auth:sanctum'], function(){
    Route::get('index',[TeamController::class, 'index'])->name('index');
    Route::post('create',[TeamController::class, 'create'])->name('create');
    Route::put('edi/{id}',[TeamController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[TeamController::class, 'delete'])->name('delete');
});

//reseller
Route::group(['prefix'=> 'reseller', 'as' => 'reseller','middleware' => 'auth:sanctum'], function(){
    Route::get('index',[ResellerController::class, 'index'])->name('index');
    Route::post('create',[ResellerController::class, 'create'])->name('create');
    Route::put('edi/{id}',[ResellerController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[ResellerController::class, 'delete'])->name('delete');
});

//task
Route::group(['prefix'=> 'task', 'as' => 'task', 'middleware' => 'auth:sanctum'], function(){
    Route::get('index',[TaskController::class, 'index'])->name('index');
    Route::post('create',[TaskController::class, 'create'])->name('create');
    Route::put('edit/{id}',[TaskController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[TaskController::class, 'delete'])->name('delete');
});
