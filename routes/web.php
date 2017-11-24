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
Route::get('', function (){
    return view('pages.reports');
});
Route::resource('product', 'ProductController');
Route::resource('project', 'ProjectController');
Route::resource('report', 'ReportController');
Route::resource('sale', 'SaleController');
Route::resource('user', 'UserController');