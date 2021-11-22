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
})->name('admin');

Route::get('/models', [CommandWeb::class, 'index'])->name('Ttank');
Route::get('/models/{slug}', [CommandWeb::class, 'hapus'])->name('TDtank');

Route::get('/Product', [CommandWeb::class, 'ProductShow'])->name('TProduct');
Route::post('/Product/Delete', [CommandWeb::class, 'ProductDelete'])->name('TDProduct');
Route::post('/Product/Add', [CommandWeb::class, 'ProductAdd'])->name('AProduct');

Route::get('/Category', [CommandWeb::class, 'CategoryShow'])->name('TCategory');
Route::post('/Category/Delete', [CommandWeb::class, 'CategoryDelete'])->name('TDCategory');
Route::post('/Category/Add', [CommandWeb::class, 'CategoryAdd'])->name('ACategory');

Route::get('/Customer', [CommandWeb::class, 'CustomerShow'])->name('TCustomer');
Route::post('/Customer/Delete', [CommandWeb::class, 'CustomerDelete'])->name('TDCustomer');
Route::post('/Customer/Add', [CommandWeb::class, 'CustomerAdd'])->name('ACustomer');

