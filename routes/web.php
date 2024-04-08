<?php

use App\Http\Controllers\ProductController;
use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\CreateOrederRequest;
use App\Http\Requests\CreateProducteRequest;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditCategoriesRequest;
use App\Http\Requests\EditOrederRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//product Route get

Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/edit/{id}', function ($id) {
    $product = DB::table('products')->where('id', $id)->first();
    return view('products.edit', ['product'=> $product]);
});

Route::get('/products/index', ['$productsindex'])->name('products.index');


//product Route post


Route::post('/products/create', function (CreateProductRequest $request) {
    DB::table('products')->insert([$request->except("_token")
]);
    return redirect('/products/index');
});

Route::post('/products/edit/{id}', function (CreateProducteRequest $request, $id) {
    DB::table('products')->where('id', $id)->update($request->except("_token"));
    return redirect('/products/index');
     
});

//product delete route
       
Route::delete('/products/delete/{id}', function ($id){
    DB::table('products')->where('id', $id)->delete();
   
    return redirect('/products/index');

});

//users route get
Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/edit/{id}', function ($id) {
    $user = DB::table('users')->where('id', $id)->first();
    return view('users.edit', ['users'=> $user]);
});

Route::get('/users/index', function () {

    $users = DB::table('users')->get();
    return view('users.index', ["users" => $users]);
});


//userss post routs
Route::post('/users/create', function (CreateUserRequest $request) {
    DB::table('users')->insert([$request->except("_token")
    ]);
    return redirect('/users/index');
});

Route::post('/users/edit/{id}', function (EditUserRequest $request, $id) {
    DB::table('users')->where('id', $id)->update($request->except("_token")
    );
    return redirect('/users/index');
     
});

//users delete route

Route::delete('/users/delete/{id}', function ($id){
    DB::table('users')->where('id', $id)->delete();
   
    return redirect('/users/index');

});


//orders route get
Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/orders/edit/{id}', function ($id) {
    $order = DB::table('orders')->where('id', $id)->first();
    return view('orders.edit', ['orders'=> $order]);
});

Route::get('/orders/index', function () {

    $orders = DB::table('orders')->get();
    return view('orders.index', ["orders" => $orders]);
});


//userss post routs
Route::post('/orders/create', function (CreateOrederRequest $request) {
    DB::table('orders')->insert([$request->except("_token")
    ]);
    
    return redirect('/orders/index');

});

Route::post('/orders/edit/{id}', function (EditOrederRequest $request, $id) {
    DB::table('orders')->where('id', $id)->update($request->except("_token")
    );
    
    return redirect('/orders/index');
     
});

//users delete route

Route::delete('/orders/delete/{id}', function ($id){
    DB::table('orders')->where('id', $id)->delete();
   
    return redirect('/orders/index');

});


//category route

Route::get('/categories/create', function () {
    return view('categories.create');
});

Route::get('/categories/edit/{id}', function ($id) {
    $category = DB::table('categories')->where('id', $id)->first();
    return view('categories.edit', ['category'=> $category]);
});

Route::get('/categories/index', function () {

    $categories = DB::table('categories')->get();
    return view('categories.index', ["categories" => $categories]);
});


//category Route post


Route::post('/categories/create', function (CreateCategoriesRequest $request) {
    DB::table('categories')->insert([$request->except("_token"),
    ]);
    return redirect('/categories/index');
});

Route::post('/categories/edit/{id}', function (EditCategoriesRequest $request, $id) {
    DB::table('categories')->where('id', $id)->update(
        $request->except("_token")
    );
    
    return redirect('/categories/index');
     
});

//category delete route
       
Route::delete('/categories/delete/{id}', function ($id){
    DB::table('categories')->where('id', $id)->delete();
   
    return redirect('/categories/index');

});

//post route post
Route::get('/posts/create', function () {
    return view('posts.create');
});

Route::get('/posts/edit/{id}', function ($id) {
    $post = DB::table('posts')->where('id', $id)->first();
    return view('posts.edit', ['post'=> $post]);
});

Route::get('/posts/index', function () {

    $posts = DB::table('posts')->get();
    return view('posts.index', ["posts" => $posts]);
});


//post route post
Route::post('/posts/create', function (createPostsRequest $request) {
    DB::table('posts')->insert([$request->except("_token"),
    ]);
    return redirect('/posts/index');
}); 