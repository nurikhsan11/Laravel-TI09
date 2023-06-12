<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CekSehatController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Models\KategoriProduk;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
 return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

Route::get('/kabar', function () {
 return view('kondisi');
});


Route::get('/CekSehat', [CekSehatController::class, 'index']);
Route::post('/submit', [CekSehatController::class, 'submit'])->name('submit');

Route::get('/form', [FormController::class, 'index']);
Route::get('/hasil', [FormController::class, 'hasil']);

Route::get('/forminput', [ForminputController::class, 'index'])->name('forminput');
Route::post('/hasilskill', [ForminputController::class, 'processForm'])->name('process-form');

Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');  
Route::get('/home', [FrontController::class, 'index'])->name('home');  
Route::get('/about', [FrontController::class, 'create'])->name('about');

route::get('/produk',[ProduksController::class, 'index'])->name('produk');
route::get('/kategori_produk',[KategoriProdukController::class, 'index'])->name('kategori_produk');
route::get('/pesanan',[PesananController::class, 'index'])->name('pesanan');
route::get('/produk/create',[ProduksController::class, 'create'])->name('create');

Route::get('/produk/create', [ProduksController::class, 'create']);
route::get('/produk/createpesanan',[PesananController::class, 'create'])->name('create');
route::get('/produk/createKProduk',[KategoriProdukController::class, 'create'])->name('create');

Route::post('/produk/store', [ProduksController::class, 'store']);
Route::post('/produk/update', [ProduksController::class, 'update']);
Route::get('/produk/delete/{id}', [ProduksController::class, 'destroy']);

Route::post('/produk/pesanan/store', [PesananController::class, 'store']);
Route::post('/produk/pesanan/update', [PesananController::class, 'update']);
Route::get('/produk/pesanan/delete/{id}', [PesananController::class, 'destroy']);

Route::post('/produk/kategori_produk/store', [KategoriProdukController::class, 'store']);
Route::post('/produk/kategori_produk/update', [KategoriProdukController::class, 'update']);
Route::get('/produk/kategori_produk/delete/{id}', [KategoriProdukController::class, 'destroy']);