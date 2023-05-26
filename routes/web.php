<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CekSehatController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

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
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //buat route produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
});    