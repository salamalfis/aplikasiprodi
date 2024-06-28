<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MetlitController;
use App\Http\Controllers\ProgressAdministrasiController;
use App\Http\Controllers\ProgressBimbinganController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\PendataanTugasAkhirController;
use App\Http\Controllers\ProgressAdministrasiTAController;
use App\Http\Controllers\ProgressBimbinganTAController;
use App\Http\Controllers\UndurdiriController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\VerifikasiMetlitController;
use App\Http\Controllers\VerifikasiTAController;
use App\Http\Controllers\KomentarmetlitController;
use App\Http\Controllers\KomentarTAController;


Route::get('signup',[AuthController::class,"sign_up"])->name('signup');
Route::get('signin',[AuthController::class,"sign_in"])->name('signin');




Route::prefix('mahasiswa')->group(function () {
    Route::get('dashboard',[DashboardController::class,"index"])->name('mahasiswa.dashboard');
    Route::get('/prodi',[ProdiController::class,"index"])->name('mahasiswa.prodi.index');
    Route::get('/metlit/pendataan',[MC::class,"pendataan"])->name('mahasiswa.pendataan.index');
    Route::get('/metlit/pendataan/tambah',[MC::class,"addPendataan"])->name('mahasiswa.pendataan.add');
    Route::get('/metlit/pendataan/edit',[MC::class,"editPendataan"])->name('mahasiswa.pendataan.edit');

    Route::get('/metlit/progres-admin',[PAC::class,"index"])->name('mahasiswa.progres-admin.index');
    Route::get('/metlit/progres-admin/add',[PAC::class,"add"])->name('mahasiswa.progres-admin.add');
    Route::get('/metlit/progres-admin/edit',[PAC::class,"edit"])->name('mahasiswa.progres-admin.edit');

    Route::get('/metlit/progres-admin/dokumen',[PAC::class,"dokumen"])->name('mahasiswa.progres-admin.dokumen');
    Route::get('/metlit/progres-admin/tak',[PAC::class,"tak"])->name('mahasiswa.progres-admin.tak');
    Route::get('/metlit/progres-admin/eprt',[PAC::class,"eprt"])->name('mahasiswa.progres-admin.eprt');
    Route::get('/metlit/progres-bimbingan',[PBC::class,"index"])->name('mahasiswa.progres-bimbingan.index');
    Route::get('/komentar/index',[KC::class,"index"])->name('mahasiswa.komentar.index');

    Route::get('tugas-akhir/ta-pendataan',[PTAC::class,"pendataan"])->name('mahasiswa.ta-pendataan.index');
    Route::get('tugas-akhir/ta-pendataan/tambah',[PTAC::class,"add"])->name('mahasiswa.ta-pendataan.add');
    Route::get('tugas-akhir/ta-pendataan/edit',[PTAC::class,"edit"])->name('mahasiswa.ta-pendataan.edit');


    Route::get('tugas-akhir/ta-progress-bimbingan',[PBTAC::class,"index"])->name('mahasiswa.ta-progress-bimbingan.index');
    Route::get('tugas-akhir/ta-progress-bimbingan/add',[PBTAC::class,"add"])->name('mahasiswa.ta-progress-bimbingan.add');
    Route::get('tugas-akhir/ta-progress-bimbingan/edit',[PBTAC::class,"edit"])->name('mahasiswa.ta-progress-bimbingan.edit');
    Route::get('tugas-akhir/ta-progress-bimbingan/dospem1',[PBTAC::class,"dospem1"])->name('mahasiswa.ta-progress-bimbingan.dospem1');
    Route::get('tugas-akhir/ta-progress-bimbingan/dospem2',[PBTAC::class,"dospem2"])->name('mahasiswa.ta-progress-bimbingan.dospem2');

    Route::get('/tugas-akhir/ta-progres-admin',[PATAC::class,"index"])->name('mahasiswa.ta-progres-admin.index');
    Route::get('/tugas-akhir/ta-progres-admin/add',[PATAC::class,"add"])->name('mahasiswa.ta-progres-admin.add');
    Route::get('/tugas-akhir/ta-progres-admin/edit',[PATAC::class,"edit"])->name('mahasiswa.ta-progres-admin.edit');
    Route::get('/tugas-akhir/ta-progres-admin/dokumen',[PATAC::class,"dokumen"])->name('mahasiswa.ta-progres-admin.dokumen');
    Route::get('/tugas-akhir/ta-progres-admin/tak',[PATAC::class,"tak"])->name('mahasiswa.ta-progres-admin.tak');
    Route::get('/tugas-akhir/ta-progres-admin/eprt',[PATAC::class,"eprt"])->name('mahasiswa.ta-progres-admin.eprt');
     Route::get('/tugas-akhir/ta-progres-admin/eprt',[PATAC::class,"eprt"])->name('mahasiswa.ta-progres-admin.eprt');

    // Route::get('tugas-akhir/progres-bimbingan',[PATAC::class,"index"])->name('mahasiswa.ta-progres-bimbingan.index');
});

Route::prefix('kaprodi')->group(function () {
    Route::get('dashboard',[KDC::class,"index"])->name('kaprodi.dashboard');
   Route::get('/undurdiri/index',[UDDC::class,"index"])->name('kaprodi.undurdiri.index');
   Route::get('/undurdiri/add',[UDDC::class,"add"])->name('kaprodi.undurdiri.add');
   Route::get('/undurdiri/edit',[UDDC::class,"edit"])->name('kaprodi.undurdiri.edit');
   Route::get('/verifikasi/aktivasiakun',[VC::class,"aktivasiakun"])->name('kaprodi.verifikasi.aktivasiakun');
   Route::get('/verifikasimetlit/index',[VMC::class,"index"])->name('kaprodi.verifikasi-metlit.index');
   Route::get('/verifikasita/index',[VTAC::class,"index"])->name('kaprodi.verifikasi-TA.index');
});
Route::prefix('doswal')->group(function () {
   Route::get('dashboard',[DDC::class,"index"])->name('doswal.dashboard');
   Route::get('/komentarmetlit/index',[KMC::class,"index"])->name('doswal.komentarmetlit.index');
   Route::get('/komentarTA/index',[KTC::class,"index"])->name('doswal.komentarTA.index');
   Route::get('/UndurDiri/index',[DUDC::class,"index"])->name('doswal.UndurDiri.index');
   Route::get('/UndurDiri/add',[DUDC::class,"add"])->name('doswal.UndurDiri.add');
   Route::get('/UndurDiri/edit',[DUDC::class,"edit"])->name('doswal.UndurDiri.edit');
});
