<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\BukuController;
use Illuminate\Http\Request;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ApiPendidikanController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home',[HomeController::class,'index']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/galery', [PageController::class, 'galery'])->name('galery');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Auth
Route::get('/login',[AuthController::class,'submit']);
Route::post('/authlogin',[AuthController::class,'auth']);
Route::get('/logout',[AuthController::class,'logout']);

// petugas
Route::get('/pegawai',[PetugasController::class,'index']);
Route::get('/tambahpegawaii',[PetugasController::class,'create']);
Route::post('/savepetugas',[PetugasController::class,'save']);


// warga
Route::get('/datapegawai',[WargaController::class,'index']);
Route::get('/tambahpegawai',[WargaController::class,'create']);
Route::get('/warga/{id}',[WargaController::class,'edit']);
Route::get('/deletewarga/{id}',[WargaController::class,'hapus']);
Route::post('/savewarga',[WargaController::class,'save']);
Route::post('/editwarga/{id}',[WargaController::class,'update']);


Route::get('/vaksin',[VaksinController::class,'index']);
Route::get('/addvaksin',[VaksinController::class,'create']);
Route::post('/savevaksin',[VaksinController::class,'save']);


//baru
Route::get('/pendidikan',[PendidikanController::class,'index']);
Route::get('/addpendidikan',[PendidikanController::class,'create']);
Route::post('/savependidikan',[PendidikanController::class,'save']);
Route::get('/pendidikan/{id}',[PendidikanController::class,'edit']);
Route::get('/delete/{id}',[PendidikanController::class,'hapus']);
Route::post('/editpendidikan/{id}',[PendidikanController::class,'update']);

//tagihan
Route::get('/tagihan', [TagihanController::class, 'index'])->name('tagihan.index');
Route::get('/addtagihan',[TagihanController::class,'create']);
Route::post('/savetagihan',[TagihanController::class,'save']);
Route::get('/tagihan/{id}',[TagihanController::class,'edit']);
Route::get('/delete/{id}',[TagihanController::class,'hapus']);
//Route::delete('/tagihan/{id}', [TagihanController::class, 'hapus'])->name('tagihan.hapus');
Route::post('/edittagihan/{id}',[TagihanController::class,'update']);


//produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/addproduk',[ProdukController::class,'create']);
Route::post('/saveproduk',[ProdukController::class,'save']);
Route::get('/produk/{id}',[ProdukController::class,'edit']);
Route::get('/delete/{id}',[ProdukController::class,'hapus']);
Route::post('/editproduk/{id}',[ProdukController::class,'update']);


//buku
//tagihan
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/addbuku',[BukuController::class,'create']);
Route::post('/savebuku',[BukuController::class,'save']);
Route::get('/buku/{id}',[BukuController::class,'edit']);
Route::get('/deletebuku/{id}',[BukuController::class,'hapus']);
Route::post('/editbuku/{id}',[BukuController::class,'update']);

//item
// Route::get('/item', [ItemController::class, 'index'])->name('item.index');
// Route::get('/additem',[ItemController::class,'create']);
// Route::post('/saveitem',[ItemController::class,'save']);
// Route::get('/item/{id}',[ItemController::class,'edit']);
// Route::get('/delete/{id}',[ItemController::class,'hapus']);
// Route::post('/edititem/{id}',[ItemController::class,'update']);

//upload

Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api_pendidikan', [ApiPendidikanController::class, 'getAll']);
Route::post('/api_pendidikan', [ApiPendidikanController::class, 'store']);
Route::get('/api_pendidikan/{id}', [ApiPendidikanController::class, 'getById']);
Route::put('/api_pendidikan/{id}', [ApiPendidikanController::class, 'update']);
Route::delete('/api_pendidikan/{id}', [ApiPendidikanController::class, 'destroy']);
