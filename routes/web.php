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
    echo "test1";
});

// Route::get('showMenTshirt', function ($sketchURL) {
//     return view('showMenTshirt', ['sketchURL' => $sketchURL]);
// })->name('showMenTshirt');

Route::post('upload', 'UploadController@upload');
