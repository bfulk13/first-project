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

Route::view('/', 'home');
// Route::get('/', function () {
//     return view('welcome');
// });

// first arg corresponds with the URL, 2nd arg corresponds with the blade
Route::view('contact', 'contact');
// Route::get('contact', function () {
//     return view("contact");
// });

Route::view('about', 'about');
// Route::get('about', function () {
//     return view('about');
// });


Route::get('customers', 'CustomersController@list');