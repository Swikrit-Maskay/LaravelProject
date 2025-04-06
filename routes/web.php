<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishlistController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
        return redirect("/home");
    }else{
        return view('auth.login');

    }
});
Route::get('/home',[HomeController::class ,'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/register',function(){
    return view('auth.register');
})->name('register');
Route::post('/register',[AuthController::class ,'register'])->name('auth.register');

Route::get("/login",function(){
    return view('auth.login');
})->name('login');
Route::post("/login",[AuthController::class,'login'])->name('auth.login');

Route::post("/logout",[AuthController::class,'logout'])->name('auth.logout');

Route::middleware(['auth'])->group(function () {
    Route::post("/wishlist/add/{productID}",[WishlistController::class,'add'])->name('wishlist.add');
    Route::get("/wishlist",[WishlistController::class,'index'])->name('wishlist.index');
    Route::delete("/wishlist/remove{id}",[WishlistController::class,'remove'])->name('wishlist.remove');
});