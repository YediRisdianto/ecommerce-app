<?php

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

Route::get('/admin/dashboard', function() {
    return view('Admin.dashboard');
});

Route::get('/admin/products', function() {
    return view('Admin.products.index');
});

Route::get('/admin/products/add', function() {
    return view('Admin.products.add');
});

Route::get('/admin/products/edit', function() {
    return view('Admin.products.edit');
});

Route::get('/admin/categories', function() {
    return view('Admin.categories.index');
});

Route::get('/admin/categories/add', function() {
    return view('Admin.categories.add');
});

Route::get('/admin/categories/edit', function() {
    return view('Admin.categories.edit');
});

Route::get('/admin/customers', function() {
    return view('Admin.customers.index');
});
