<?php

use App\Http\Controllers\PublicController;
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

route::get('/',[PublicController::class,'index']);
route::get('tambah',[PublicController::class,'tambah']);
route::get('pesan/{id}',[PublicController::class, 'show'])->name('detail');
route::get('pembayaran/{id}',[PublicController::class, 'pembayaran'])->name('pembayaran');
route::post('pembayaran',[PublicController::class, 'bayar'])->name('bayar');
route::get('dataPembeli', [PublicController::class, 'datapembeli']);
route::resource('public', PublicController::class);
route::get('pesan',[PublicController::class,'pesan']);
route::get('register',[PublicController::class,'regis']);
route::post('register',[PublicController::class,'register']);
route::get('login',[PublicController::class,'login']);
route::post('login',[PublicController::class,'loginproses']);
route::get('tentangkami',[PublicController::class,'ttgkami']);
route::get('listpembeli',[PublicController::class,'listpembeli']);
route::get('listkamar',[PublicController::class,'listkamar']);
route::get('tmbhtentang',[PublicController::class,'ttg']);
route::post('tmbhtentang',[PublicController::class,'tmbhttg']);
route::post('contact',[PublicController::class,'mail']);