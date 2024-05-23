<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarrantyController;
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

Route::post('logout',[UserController::class, 'logout'])->name('logout')->middleware('auth:sanctum');
Route::post('Role/{id}',[UserController::class,'Role'])->name('role');
Route::post('adminregister', [UserController::class,'adminregister'])->middleware('auth:sanctum');

Route::group(['prefix'=> 'user', 'as' => 'user.','middleware' => 'auth:sanctum'], function(){
    Route::get('index', [UserController::class, 'index'])->name('index');//->middleware(['permission:index-users']);
    Route::post('create', [UserController::class, 'create'])->name('create')->withoutMiddleware('auth:sanctum');
    Route::put('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');

});

//products
Route::group(['prefix'=> 'product', 'as' => 'product.','middleware' => 'auth:sanctum'], function(){
   Route::get('index',[ProductController::class, 'index'])->name('index');
   Route::post('create',[ProductController::class, 'create'])->name('create')->withoutMiddleware('auth:sanctum');
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
    Route::post('create',[TeamController::class, 'create'])->name('create')->withoutMiddleware('auth:sanctum');;
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
    Route::post('create',[TaskController::class, 'create'])->name('create')->withoutMiddleware('auth:sanctum');
    Route::put('edit/{id}',[TaskController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[TaskController::class, 'delete'])->name('delete');
});

//brand
Route::group(['prefix'=> 'brand', 'as' => 'brand', 'middleware' => 'auth:sanctum'],function(){
    Route::get('index',[BrandController::class, 'index'])->name('index');
    Route::post('create',[BrandController::class,'create'])->name('create');
    Route::put('edit/{id}',[BrandController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[BrandController::class, 'delete'])->name('delete');
});

//label
Route::group(['prefix'=> 'label', 'as' => 'label', 'middleware' => 'auth:sanctum'],function(){
    Route::get('index',[LabelController::class, 'index'])->name('index');
    Route::post('create',[LabelController::class,'create'])->name('create')->withoutMiddleware('auth:sanctum');
    Route::put('edit/{id}',[LabelController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[LabelController::class, 'delete'])->name('delete');
    });
//media
Route::group(['prefix'=> 'media', 'as' => 'media', 'middleware' => 'auth:sanctum'],function(){
    Route::get('index',[MediaController::class, 'index'])->name('index');
    Route::post('create/{folder}',[MediaController::class,'create'])->name('create');
    Route::put('edit/{id}',[MediaController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[MediaController::class, 'delete'])->name('delete');
    });
//ticket
Route::group(['prefix'=> 'ticket', 'as' => 'ticket', 'middleware' => 'auth:sanctum'],function(){
        Route::get('index',[TicketController::class, 'index'])->name('index');
        Route::post('create',[TicketController::class,'create'])->name('create');
        Route::put('edit/{id}',[TicketController::class, 'edit'])->name('edit');
        Route::delete('delete/{id}',[TicketController::class, 'delete'])->name('delete');
        });
//message
Route::group(['prefix'=> 'message', 'as' => 'message', 'middleware' => 'auth:sanctum'],function(){
            Route::get('index',[MessageController::class, 'index'])->name('index');
            Route::post('create',[MessageController::class,'create'])->name('create');
            Route::put('edit/{id}',[MessageController::class, 'edit'])->name('edit');
            Route::delete('delete/{id}',[MessageController::class, 'delete'])->name('delete');
        });
//warranty
Route::group(['prefix'=> 'warranty', 'as' => 'warranty', 'middleware' => 'auth:sanctum'],function(){
    Route::get('index',[WarrantyController::class, 'index'])->name('index');
    Route::post('create',[WarrantyController::class,'create'])->name('create');
    Route::put('edit/{id}',[WarrantyController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}',[WarrantyController::class, 'delete'])->name('delete');
});
