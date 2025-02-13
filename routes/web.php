<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


Route::get('/', function () {
    return view('welcome');
});

// route adalah untuk memanggil data atau mengirim data
Route::get('home/{nama?}', function (Request $request) {

    $nama = $request -> nama;
    return view('home', compact('nama'));
})->name('home');

Route::get('siswa',[SiswaController::class,'index'])->name('siswa');

// get :untuk mengirim suatu data 
Route::get('about', function () {
    return view('about');
})->name('about');

//  Rute ini menangani permintaan GET /add/siswa untuk menampilkan /mengirim data 
Route::get('add/siswa', [SiswaController::class, 'add'])->name('siswa.add');
// yang menangani permintaan POST untuk menyimpan data siswacontroller
Route::post('add/siswa', [SiswaController::class, 'store'])->name('siswa.add.process');
// untuk menghapus siswa atau data / Metode destroy()menghapus SiswaControllerdata berdasarkan ID.
Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
//  Metode edit()pengambilan SiswaControllerdata siswa berdasarkan ID dan menampilkannya dalam formulir.
Route::get('siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
// Metode update()mengupdate SiswaControllerdata siswa berdasarkan ID dan mengarahkannya kembali ke daftar siswa
Route::put('siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
// DigunakanDigunakan dalam form edit dengan @method('PUT')untuk mengirim permintaan update.