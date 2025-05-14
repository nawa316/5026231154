<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClockController;
//kalau di java pakai import

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//contohnya kalau di java pakai .
//System.out.println("Hello World");

//Kalau di php pakai ::
//Route::get('/', function () {});

Route::get('/', function () {
    return view('frontend');
});

Route::get('/selamat', function () {
    return view('welcome');
});


//Cara !:Raw HTML
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com
    <br>
    <a href='https://www.malasngoding.com'>Kunjungi website kami</a>
    </h1>
    <img src='https://www.malasngoding.com/wp-content/uploads/2018/11/membuat-route-laravel-768x473.png' alt='Laravel'>";
});

//Cara 2:View
Route::get('blog', function () {
    return view('blog');
});

//Cara 3:Controller
Route::get('clock', [ClockController::class, 'index']);
//Route::get('clock', 'ClockController@index');

//Tambahan dari week 1
Route::get('week1', function () {
    return view('week1');
});

Route::get('week2', function () {
    return view('week2');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('frontend', function () {
    return view('frontend');
});


