<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminChildCategoryController;
use App\Http\Controllers\AdminParentCategoryController;
use App\Http\Controllers\AdminProductController;

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

Route::get('/admin/dashboard', function() {
    return view('Admin.dashboard');
});

// Route::get('/admin/products', function() {
//     return view('Admin.products.index');
// });

// Route::get('/admin/products/add', function() {
//     return view('Admin.products.create');
// });

// Route::get('/admin/products/edit', function() {
//     return view('Admin.products.edit');
// });

Route::resource('/admin/parent-categories', AdminParentCategoryController::class);
Route::resource('/admin/child-categories', AdminChildCategoryController::class);
Route::resource('/admin/products', AdminProductController::class);

// Route::get('/admin/parent-categories', function() {
//     return view('Admin.categories.parent.index');
// });

// Route::get('/admin/parent-categories/add', function() {
//     return view('Admin.categories.parent.add');
// });

// Route::get('/admin/parent-categories/edit', function() {
//     return view('Admin.categories.parent.edit');
// });

// Route::get('/admin/child-categories', function() {
//     return view('Admin.categories.child.index');
// });

// Route::get('/admin/child-categories/add', function() {
//     return view('Admin.categories.child.add');
// });

// Route::get('/admin/child-categories/edit', function() {
//     return view('Admin.categories.child.edit');
// });

Route::get('/admin/customers', function() {
    return view('Admin.customers.index');
});
