<?php

use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\KasirController;
use App\Http\Controllers\Admin\PembelianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginAdminController;
use App\Http\Controllers\Admin\BerandaController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/view_login', function () {
    return view('admin.view_login');
});
//login
Route::post('/loginproses',[LoginAdminController::class,'proses']);
Route::get('logout',[LoginAdminController::class,'logout']);
//Beranda
Route::get('/beranda',[BerandaController::class,'index']);
//Barang
Route::get('/barang',[BarangController::class,'index']);
Route::get('/cari',[BarangController::class,'cari']);
Route::post('/barang/store',[BarangController::class,'store']);
Route::get('/del_barang{id}', [BarangController::class, 'delete']);
Route::match(['get', 'post'], '/edit_barang{id}', [BarangController::class,'edit']);
//Pembelian
Route::get('/pembelian',[PembelianController::class,'index'])->name('admin/pembelian');
//Kasir 
Route::get('/kasir',[KasirController::class,'index']);

