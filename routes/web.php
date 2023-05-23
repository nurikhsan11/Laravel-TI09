<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CekSehatController;
use App\http\Controllers\ForminputController;

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


Route::get('/', [CekSehatController::class, 'index']);
Route::post('/submit', [CekSehatController::class, 'submit'])->name('submit');

Route::get('/form', [FormController::class, 'index']);
Route::get('/hasil', [FormController::class, 'hasil']);

Route::get('/forminput', [ForminputController::class, 'index'])->name('forminput');
Route::post('/hasilskill', [ForminputController::class, 'processForm'])->name('process-form');