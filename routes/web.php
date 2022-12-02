<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\newslettercontroller;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[contactcontroller::class, 'index']);
Route::post('/index',[contactcontroller::class, 'store'])->name('store');
// Route::post('/',[contactcontroller::class, 'contact'])->name('store');
Route::get('/',[newslettercontroller::class, 'index']);
Route::post('/index',[newslettercontroller::class, 'store'])->name('store');

Route::get('/admin',[admincontroller::class, 'index']);



Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
