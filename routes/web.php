<?php

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
    return view('welcome');
});


Route::get('/sales', function () {
    return view('pages.sale.index');
});

Route::get('/sales/create', function () {
    return view('pages.sale.create');
});

Route::get('/sales/{id}', function () {
    return view('pages.sale.show');
});

Route::get('/sales/{id}/edit', function () {
    return view('pages.sale.create');
});


Route::get('/users', function () {
    return view('pages.user.index');
});

Route::get('/users/create', function () {
    return view('pages.user.create');
});

Route::get('/users/{id}/edit', function () {
    return view('pages.users.create');
});

Route::get('/users/{id}', function () {
    return view('pages.user.show');
});


Route::get('/products/create', function () {
    return view('pages.product.create');
});

Route::get('/products', function () {
    return view('pages.product.index');
});

Route::get('/products/{id}', function () {
    return view('pages.product.show');
});

Route::get('/products/{id}/edit', function () {
    return view('pages.product.create');
});

Route::get('/reports', function () {
    return view('pages.report.index');
});

Route::get('/reports/{id}', function () {
    return view('pages.report.show');
});

Route::get('/login', function () {
    return view('layout.login');
});

Route::post('/welcome', function () {
    return view('welcome');
});