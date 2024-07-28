<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController as UserProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\AuthenticationController;
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
Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::post('register', [AuthenticationController::class, 'register'])->name('register');



Route::get('/',[HomeController::class,'ShowHome'])->name('home');

Route::get('/product_detail/{id}', [UserProductController::class, 'productDetail'])->name('product_detail');

Route::get('/account', [AuthenticationController::class, 'account'])->name('account');
// Route::group(['prefix' => 'client', 'as' => 'client.'], function() {
//     Route::get('/',[HomeController::class,'index'])->name('home');
// });

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware'=>'checkAdmin'], function() {
    Route::group(['prefix' => 'products', 'as' => 'products.'], function() {
    // http://127.0.0.1:8000/admin/products/...
        Route::get('/', [AdminProductController::class, 'ListProducts'])->name('ListProducts');
        Route::get('add-product', [AdminProductController::class, 'AddProducts'])->name('addProduct');
        Route::post('add-product', [AdminProductController::class, 'AddPostProduct'])->name('AddPostProduct');
    });
});