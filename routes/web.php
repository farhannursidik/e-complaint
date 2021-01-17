<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\RekapController;

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

Auth::routes();

Route::get('/statistik', function () {
    return view('statistik');
});

Auth::routes();

Route::get('/teka', function () {
    return view('teka');
});

Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Auth::routes();


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('bagian', 'BagianController'); 
Route::resource('akun', 'AkunController'); 
Route::resource('complaint', 'ComplaintController'); 
Route::resource('beranda', 'BerandaController'); 
Route::resource('verifikasi', 'VerifikasiController'); 
Route::resource('konfirmasi', 'KonfirmasiController');
Route::resource('rekap', 'RekapController');