<?php

use App\Http\Controllers\CommandWeb;
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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', '/admin');

Route::get('/origin', function () {
    return view('originAdmin');
});

Route::get('/admin', function () {
    return view('includes.supreme');
});

Route::get('/models', [CommandWeb::class, 'index']);
Route::get('/models/{slug}', [CommandWeb::class, 'hapus']);


