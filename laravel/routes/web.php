<?php

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

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/profil/profil-sekolah', 'ProfilController@profil')
    ->name('profil-sekolah');

Route::get('/profil/visi-misi', 'ProfilController@visimisi')
    ->name('visi-misi');

Route::get('/profil/tenaga-kependidikan', 'ProfilController@tendik')
    ->name('tenaga-kependidikan');

Route::get('/profil/peserta-didik', 'ProfilController@pesertadidik')
    ->name('peserta-didik');

Route::get('/fasilitas', 'FasilitasController@index')
    ->name('fasilitas');

Route::get('/informasi/pengumuman', 'InformasiController@pengumuman')
    ->name('pengumuman');

Route::get('/informasi/pengumuman/pengumuman-detail', 'InformasiController@pengumumandetail')
    ->name('pengumuman-detail');

Route::get('/informasi/kegiatan', 'InformasiController@kegiatan')
    ->name('kegiatan');

Route::get('/informasi/kegiatan/kegiatan-detail', 'InformasiController@kegiatandetail')
    ->name('kegiatan-detail');

Route::get('/informasi/file', 'InformasiController@file')
    ->name('file');



Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
    });
