<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminChildCategoryController;
use App\Http\Controllers\AdminParentCategoryController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\ParentCategory;

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
    $products = Product::with('ChildCategory')->where('status', 'Active')->get();
    return view('welcome', compact('products'));
});

Route::get('/admin/dashboard', function() {
    return view('Admin.dashboard');
});

Route::resource('/admin/parent-categories', AdminParentCategoryController::class);
Route::resource('/admin/child-categories', AdminChildCategoryController::class);
Route::resource('/admin/products', AdminProductController::class);
Route::resource('/admin/users', AdminUserController::class);

