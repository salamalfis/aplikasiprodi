<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MetlitController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UndurDiriDoswalController;
use App\Http\Controllers\KomentarTAController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\VerifikasiTAController;
use App\Http\Controllers\KomentarmetlitController;
use App\Http\Controllers\UndurdiriProdiController;
use App\Http\Controllers\VerifikasiMetlitController;
use App\Http\Controllers\ProgressBimbinganController;
use App\Http\Controllers\PendataanTugasAkhirController;
use App\Http\Controllers\ProgressBimbinganTAController;
use App\Http\Controllers\ProgressAdministrasiController;
use App\Http\Controllers\ProgressAdministrasiTAController;


Route::get('signup',[AuthController::class,"sign_up"])->name('signup');
Route::get('signin',[AuthController::class,"sign_in"])->name('signin');




Route::prefix('mahasiswa')->group(function () {
    Route::get('dashboard',[DashboardController::class,"index"])->name('mahasiswa.dashboard');
    Route::get('/prodi',[ProdiController::class,"index"])->name('mahasiswa.prodi.index');
    Route::get('/metlit/pendataan',[MetlitController::class,"pendataan"])->name('mahasiswa.pendataan.index');
    Route::get('/metlit/pendataan/tambah',[MetlitController::class,"addPendataan"])->name('mahasiswa.pendataan.add');
    Route::get('/metlit/pendataan/edit',[MetlitController::class,"editPendataan"])->name('mahasiswa.pendataan.edit');

    Route::get('/metlit/progres-admin',[ProgressAdministrasiController::class,"index"])->name('mahasiswa.progres-admin.index');
    Route::get('/metlit/progres-admin/add',[ProgressAdministrasiController::class,"add"])->name('mahasiswa.progres-admin.add');
    Route::get('/metlit/progres-admin/edit',[ProgressAdministrasiController::class,"edit"])->name('mahasiswa.progres-admin.edit');

    Route::get('/metlit/progres-admin/dokumen',[ProgressAdministrasiController::class,"dokumen"])->name('mahasiswa.progres-admin.dokumen');
    Route::get('/metlit/progres-admin/tak',[ProgressAdministrasiController::class,"tak"])->name('mahasiswa.progres-admin.tak');
    Route::get('/metlit/progres-admin/eprt',[ProgressAdministrasiController::class,"eprt"])->name('mahasiswa.progres-admin.eprt');
    Route::get('/metlit/progres-bimbingan',[ProgressBimbinganController::class,"index"])->name('mahasiswa.progres-bimbingan.index');
    Route::get('/komentar/index',[KomentarController::class,"index"])->name('mahasiswa.komentar.index');

    Route::get('tugas-akhir/ta-pendataan',[PendataanTugasAkhirController::class,"pendataan"])->name('mahasiswa.ta-pendataan.index');
    Route::get('tugas-akhir/ta-pendataan/tambah',[PendataanTugasAkhirController::class,"add"])->name('mahasiswa.ta-pendataan.add');
    Route::get('tugas-akhir/ta-pendataan/edit',[PendataanTugasAkhirController::class,"edit"])->name('mahasiswa.ta-pendataan.edit');


    Route::get('tugas-akhir/ta-progress-bimbingan',[ProgressBimbinganTAController::class,"index"])->name('mahasiswa.ta-progress-bimbingan.index');
    Route::get('tugas-akhir/ta-progress-bimbingan/add',[ProgressBimbinganTAController::class,"add"])->name('mahasiswa.ta-progress-bimbingan.add');
    Route::get('tugas-akhir/ta-progress-bimbingan/edit',[ProgressBimbinganTAController::class,"edit"])->name('mahasiswa.ta-progress-bimbingan.edit');
    Route::get('tugas-akhir/ta-progress-bimbingan/dospem1',[ProgressBimbinganTAController::class,"dospem1"])->name('mahasiswa.ta-progress-bimbingan.dospem1');
    Route::get('tugas-akhir/ta-progress-bimbingan/dospem2',[ProgressBimbinganTAController::class,"dospem2"])->name('mahasiswa.ta-progress-bimbingan.dospem2');

    Route::get('/tugas-akhir/ta-progres-admin',[ProgressAdministrasiTAController::class,"index"])->name('mahasiswa.ta-progres-admin.index');
    Route::get('/tugas-akhir/ta-progres-admin/add',[ProgressAdministrasiTAController::class,"add"])->name('mahasiswa.ta-progres-admin.add');
    Route::get('/tugas-akhir/ta-progres-admin/edit',[ProgressAdministrasiTAController::class,"edit"])->name('mahasiswa.ta-progres-admin.edit');
    Route::get('/tugas-akhir/ta-progres-admin/dokumen',[ProgressAdministrasiTAController::class,"dokumen"])->name('mahasiswa.ta-progres-admin.dokumen');
    Route::get('/tugas-akhir/ta-progres-admin/tak',[ProgressAdministrasiTAController::class,"tak"])->name('mahasiswa.ta-progres-admin.tak');
    Route::get('/tugas-akhir/ta-progres-admin/eprt',[ProgressAdministrasiTAController::class,"eprt"])->name('mahasiswa.ta-progres-admin.eprt');
     Route::get('/tugas-akhir/ta-progres-admin/eprt',[ProgressAdministrasiTAController::class,"eprt"])->name('mahasiswa.ta-progres-admin.eprt');

    // Route::get('tugas-akhir/progres-bimbingan',[ProgressAdministrasiTAController::class,"index"])->name('mahasiswa.ta-progres-bimbingan.index');
});

Route::prefix('prodi')->group(function () {
    Route::get('dashboard',[DashboardController::class,"index"])->name('kaprodi.dashboard');
   Route::get('/undurdiri/index',[UndurdiriProdiController ::class,"index"])->name('kaprodi.undurdiri.index');
   Route::get('/undurdiri/add',[UndurdiriProdiController ::class,"add"])->name('kaprodi.undurdiri.add');
   Route::get('/undurdiri/edit',[UndurdiriProdiController ::class,"edit"])->name('kaprodi.undurdiri.edit');
   Route::get('/verifikasi/aktivasiakun',[VerifikasiController ::class,"aktivasiakun"])->name('kaprodi.verifikasi.aktivasiakun');
   Route::get('/verifikasimetlit/index',[VerifikasiMetlitController::class,"index"])->name('kaprodi.verifikasi-metlit.index');
   Route::get('/verifikasita/index',[VerifikasiTAController ::class,"index"])->name('kaprodi.verifikasi-TA.index');
});
Route::prefix('doswal')->group(function () {
   Route::get('dashboard',[DashboardController::class,"index"])->name('doswal.dashboard');
   Route::get('/komentarmetlit/index',[KomentarmetlitController ::class,"index"])->name('doswal.komentarmetlit.index');
   Route::get('/komentarTA/index',[KomentarTAController ::class,"index"])->name('doswal.komentarTA.index');
   Route::get('/UndurDiri/index',[UndurDiriDoswalController ::class,"index"])->name('doswal.UndurDiri.index');
   Route::get('/UndurDiri/add',[UndurDiriDoswalController ::class,"add"])->name('doswal.UndurDiri.add');
   Route::get('/UndurDiri/edit',[UndurDiriDoswalController ::class,"edit"])->name('doswal.UndurDiri.edit');
});
