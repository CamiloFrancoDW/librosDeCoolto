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
    return view('homeLC');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/partial/Header', function () {
    return view('/partial/Header');
});
Route::get('/partial/Footer', function () {
    return view('/partial/Footer');
});
Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/libros', 'ProductController@index');

Route::post('/admin', 'ProductController@store');

Route::get('/admin', function () {
    return view('admin');
})->middleware('Validar_admin');

Route::get('/usuario', 'UserController@miPerfil');

Route::post('/usuario', function () {
    return view('usuario');
});

Route::get('/carrito', 'CartController@index')->name('cart')->middleware('auth');

Route::view('/ordenes', 'orders')->name('orders')->middleware('auth');

Route::post('/carrito/{productId}', 'CartController@addProduct')->name('addProductToCart');
Route::delete('/carrito/{productId}', 'CartController@removeProduct')->name('removeProductFromCart');

Route::post('/orders', 'OrdersController@addOrder')->name('order');
