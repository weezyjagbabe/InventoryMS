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


Route::get('/products', function () {
    return view('pages.products');
});


Route::get('/users', function () {
    return view('pages.user.index');
});


Route::get('/users/create', function () {
    return view('pages.user.create');
});

Route::get('/order', function () {
    return view('pages.order');
});

Route::get('/invoice', function () {
    return view('pages.invoice');
});


Route::get('/newproject', function () {
    return view('pages.newproject');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/products/create', function () {
    return view('pages.product.create');
});

Route::get('/products', function () {
    return view('pages.product.index');
});

Route::get('/productinfo', function () {
    return view('pages.productinfo');
});

Route::get('/updateproduct', function () {
    return view('pages.updateproduct');
});

Route::get('/users/{id}/edit', function () {
    return view('pages.users.create');
});

Route::get('/users/{id}', function () {
    return view('pages.user.show');
});


Route::get('/reports', function () {
    return view('pages.reports');
});

Route::get('/reportsweekly', function () {
    return view('pages.reportsweekly');
});

Route::get('/reportsmonthly', function () {
    return view('pages.reportsmonthly');
});

Route::get('/login', function () {
    return view('layout.login');
});

Route::post('/welcome', function () {
    return view('welcome');
});