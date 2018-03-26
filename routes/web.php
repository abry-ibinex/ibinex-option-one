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
<<<<<<< HEAD
    return view('index');
=======
    return view('home.index');
});

Route::get('pricing', function () {
    return view('pricing.index');
>>>>>>> acf516417b59dee7120349c52d546a0db0cc4d77
});
