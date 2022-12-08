<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SandwichDetailController;
use App\Http\Controllers\SnackDetailController;
use App\Http\Controllers\BeverageDetailController;
use App\Http\Controllers\CartController;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/feature', function () {
    return view('feature');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/pemesanan', function () {
    return view('pemesanan');
});
Route::get('/sandwich', function () {
    return view('sandwich');
});
Route::get('/sides', function () {
    return view('snack');
});


Route::get('/sandwich', [SandwichDetailController::class, "index"]);
Route::post('/sandwich', [SandwichDetailController::class, "store"]);

Route::get('/sides', [SnackDetailController::class, "index"]);
Route::post('/sides', [SnackDetailController::class, "store"]);

Route::get('/beverage', [BeverageDetailController::class, "index"]);
Route::post('/beverage', [BeverageDetailController::class, "store"]);

Route::get('/daftar_pegawai', function () {
    return view('/daftar_pegawai');
});
Route::get('/edit_pegawai', function () {
    return view('/edit_pegawai');
});
Route::get('/tambah_pegawai', function () {
    return view('/tambah_pegawai');
});
Route::get('/tambah_alamat', function () {
    return view('/tambah_alamat');
});

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('add_to_cart', function(){
    return redirect('/');
});

Route::post('/remove_from_cart', [CartController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::get('remove_from_cart', function(){
    return redirect('/');
});

Route::post('/edit_product_quantity', [CartController::class, 'edit_product_quantity'])->name('edit_product_quantity');
Route::get('edit_product_quantity', function(){
    return redirect('/');
});