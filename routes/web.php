<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\DashboardController;
use App\Models\Petugas;
use App\Models\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

/* REGISTER */
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/regispetugas', [PetugasController::class, 'index']);
Route::post('/regisPetugas', [PetugasController::class, 'store'])->name('regisPetugas');


/* LOGIN */
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store']);

/* VIEW */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashpetugas', function () {
    return view('petugas.layout');
});

Route::get('/dashrakyat', function() {
    return  view('masyarakat.layout');
});
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('storePengaduan');

Route::get('/tanggapan', [TanggapanController::class, 'index'])->name('tanggapan');
Route::get('/show/{id_pengaduan}', [TanggapanController::class, 'show'])->name('show');
Route::post('/tanggapan/{id_pengaduan}', [TanggapanController::class, 'store'])->name('balesin');
Route::get('/laporsai', [TanggapanController::class, 'indexuh']);
Route::get('/prosessai', [TanggapanController::class, 'indexih']);
/* GENERATEPDF */
Route::get('/laporan', [PDFController::class, 'index']);
Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/selesai-pdf', [PDFController::class, 'selesaiPDF']);
Route::get('/proses-pdf', [PDFController::class, 'prosesPDF']);

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout']);

// Route::resource('/pengaduan', PengaduanController::class);
