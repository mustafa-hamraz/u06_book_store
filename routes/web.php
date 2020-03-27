<?php

use Illuminate\Support\Facades\Route;

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



Route::get("/", "MainController@mainMenu");
Route::get("/list-all-books", "MainController@list_all_books");
Route::get("/order-placed", "MainController@order_placed");
Route::get("/purchases", "MainController@purchases");
Route::get("/search", "MainController@search");
Route::get("/search-result", "MainController@search_result");



