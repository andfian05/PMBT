<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasantriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\TestSurveyController;
use App\Http\Controllers\WawancaraController;
use App\Http\Controllers\TestWawancaraController;
use App\Http\Controllers\BacaQuranController;
use App\Http\Controllers\TestBacaQuranController;
use App\Http\Controllers\PotensiAkademikController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\DTRController;

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

/** Routes Untuk Tampilan Informasi */
Route::get('/', function () {
    return view('master');
});

/** Buat Form Satu Page */
Route::get('/pmbpetikjombang', [RegisterController::class, 'profilePetik']);
// Form PMB to Calon Mahasantri
Route::get('/register-pmb', [RegisterController::class, 'register'])->name('registerpmb');
Route::post('/register-pmb', [RegisterController::class, 'store'])->name('register.store');
Route::get('/done-pmb', function () {
    return view('daftar.done-pmb');
})->name('donepmb');

/** Buat URL Select */
Route::post('/getKabupaten', [RegisterController::class, 'getKabupaten'])->name('getKabupaten');
Route::post('/getKecamatan', [RegisterController::class, 'getKecamatan'])->name('getKecamatan');
Route::post('/getDesa', [RegisterController::class, 'getDesa'])->name('getDesa');

/** ADMIN */
Route::middleware('auth:administrator')->prefix('admin')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardAdmin']);

    /** Mahasantri */
    Route::resource('mahasantri', MahasantriController::class);
    Route::get('download/{id}', [MahasantriController::class, 'download'])->name('download');
    Route::get('mahasantri-exportPDF', [MahasantriController::class, 'exportPDF'])->name('mahasantri.pdf');
    Route::get('mahasantri-exportExcel', [MahasantriController::class, 'exportExcel'])->name('mahasantri.excel');
    
    /** Manage Users */
    Route::resource('manage-user', UserController::class);

    /** Survei */
    Route::resource('survei', SurveiController::class);
    Route::get('survei-exportPDF', [SurveiController::class, 'exportPDF'])->name('survei.pdf');

    /** Tanya Jawab */
    Route::resource('tanya-jawab', WawancaraController::class);
    Route::get('tanya-jawab-exportPDF', [WawancaraController::class, 'exportPDF'])->name('tanya-jawab.pdf');

    /** Baca Qur'an */
    Route::resource('baca-quran', BacaQuranController::class);
    Route::get('baca-quran-exportPDF', [BacaQuranController::class, 'exportPDF'])->name('baca-quran.pdf');

    /** Potensi Akademik */
    Route::resource('potensi-akademik', PotensiAkademikController::class);
    // Route::get('baca-quran-exportPDF', [BacaQuranController::class, 'exportPDF'])->name('baca-quran.pdf');

    /** Perhitungan */
    Route::get('perhitungan', [PerhitunganController::class, 'perhitungan'])->name('perhitungan.create');
    Route::post('perhitungan', [PerhitunganController::class, 'store'])->name('perhitungan.store');
    Route::get('perhitungan-done', function(){
        return view('backend.admin.perhitungan.done');
    })->name('perhitungan.done');

    /** DTR */
    Route::resource('dtr', DTRController::class);
    Route::get('dtr-exportPDF', [DTRController::class, 'exportPDF'])->name('dtr.pdf');
});

/** PANITIA A (Test Survey) */
Route::middleware('auth:panitia-a')->prefix('panitia-a')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardPanitiaA']);

    /** Test Survey */
    Route::get('test-survey', [TestSurveyController::class, 'testsurvey'])->name('test-survey.create');
    Route::post('test-survey', [TestSurveyController::class, 'store'])->name('test-survey.store');
    // Route::resource('test-survey', TestSurveiController::class);
    Route::get('test-survey-done', function(){
        return view('backend.panitia-a.done');
    })->name('test-survey.done');
});

/** PANITIA B (Test Baca dan Hafalan Al-Qur'an) */
Route::middleware('auth:panitia-b')->prefix('panitia-b')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardPanitiaB']);

    /** Test Baca dan Hafalan Al-Qur'an */
    Route::get('test-baca-quran', [TestBacaQuranController::class, 'testbacaquran'])->name('test-baca-quran.create');
    Route::post('test-baca-quran', [TestBacaQuranController::class, 'store'])->name('test-baca-quran.store');
    Route::get('test-baca-quran-done', function(){
        return view('backend.panitia-b.done');
    })->name('test-baca-quran.done');
});

/** PANITIA C (Test Tanya Jawab) */
Route::middleware('auth:panitia-c')->prefix('panitia-c')->group(function () {
    /** Dashboard */
    Route::get('/', [HomeController::class, 'dashboardPanitiaC']);

    /** Test Tanya Jawab */
    Route::get('test-wawancara', [TestWawancaraController::class, 'testwawancara'])->name('test-wawancara.create');
    Route::post('test-wawancara', [TestWawancaraController::class, 'store'])->name('test-wawancara.store');
    Route::get('test-wawancara-done', function(){
        return view('backend.panitia-c.done');
    })->name('test-wawancara.done');
});



/** Auth */
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'login'])->name('postlogin');
Route::post('/', [AuthController::class, 'logout'])->name('logout');