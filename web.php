<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/about', function ()
 {
    return view('about');
});

Route::get('/form', function ()
 {
    return view('form');
});

Route::post('/form', function (Request $request)
 {
    echo $request -> input('nama') ."<br>";
    echo $request -> input('email');
});

Route::get('siswa', 'SiswaController@index'); //menggunakann controller//

Route::get('/route/my_account', function ()
 {
    return view('route/my_account');
});

Route::get('/route/beranda', function ()
 {
    return view('route/beranda');
});