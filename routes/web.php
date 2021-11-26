<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register\Registercontroller;
use App\Http\Controllers\user\userController;
use App\Http\Controllers\barang\BarangController;
use App\Http\Controllers\transaksi\transaksiController;

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('naviBody.beranda');
})->middleware(['auth','isAdmin'])->name('dashboard');

Route::get('/pegawai', function() {
    return view('Pegawai.Dashboard');
})->middleware(['auth'])->name('pegDash');

Route::get('/register1', function() {
    return view('naviBody.register');
})->middleware(['auth'])->name('regis');

Route::get('/barang', function() {
    return view('naviBody.barang');
})->middleware(['auth'])->name('barang');

Route::get('/transaksi', function() {
    return view('naviBody.transaksi');
})->middleware(['auth'])->name('transaksi');

Route::get('/user',[userController::class,'index'])->middleware(['auth'])->name('user');

Route::post('/register/user',[Registercontroller::class,'regis'])->name('regisUser');

// yajra dataTables
Route::get('barangs/list', [BarangController::class, 'getBarangs'])->name('barangs.list');

//transaksi
Route::get('/transaksi/form',[transaksiController::class,'create'])->name('transaksi.add');
Route::PUT('/transaksi/tambah',[transaksiController::class,'store'])->name('transaksi.tambah');


//testing
Route::get('/test', function() {
    return view('coba');
})->name('test.cek');

Route::get('/cobs',[userController::class,'test'])->middleware(['auth']);

require __DIR__.'/auth.php';
