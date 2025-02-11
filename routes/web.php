<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home/{nama?}', function (Request $request) {

    $nama = $request -> nama;
    return view('home', compact('nama'));
})->name('home');

Route::get('siswa',[SiswaController::class,'index'])->name('siswa');

Route::get('About',function(){
    return view('About');
})->name('About');

Route::get('add-siswa',[SiswaController::class,'add'])->name('siswa.add');

Route::get('about', function () {
    return view('about');
})->name('about');


Route::post('add.siswa', [SiswaController::class,'store'])->name('siswa.add.process');
Route::delete('siswa/{id}', [SiswaController::class,'destroy'])->name('siswa.delete');
Route::get('siswa.edit.id',[SiswaController::class,'edit'])->name('siswa.edit');

route::get('/dashboard', function () {
    return view('pages.dashboard');
});
