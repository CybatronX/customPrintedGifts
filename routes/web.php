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

Route::get('test1', function () {
    echo "test2";
});

Route::post('upload', 'UploadController@upload');

Route::get('checkoutapi', 'CheckoutAPIController@processPayment');


Route::get('showMenTshirt', 'UploadController@showProducts')->name('showMenTshirt');

// Route::get('payment', 'PaymentController@processPayment');


Route::get('squarePayment', function () {
    return view('squarePayment');
});

Route::get('stripePayment', function () {
    return view('stripePayment');		
});