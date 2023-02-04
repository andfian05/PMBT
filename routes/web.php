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


/** Routes Administrator */
/** Task Data Global Seleksi */
Route::get('/mahasantri',function(){
    return view('backend.mahasantri.index');
});

//data survei
Route::get('/admin2w',function(){
    return view('backend.datasurvei');
});

//data bacaan Al Qur'an
Route::get('/admin2b',function(){
    return view('backend.databacaan');
});

//data tanya jawab
Route::get('/admin2a',function(){
    return view('backend.datatanyajawab');
});


/** Task Views Data Global Seleksi */
Route::get('/view2w',function(){
    return view('backend.viewdatasurvei');
});

Route::get('/view2b',function(){
    return view('backend.viewdatabacaan');
});

Route::get('/view2a',function(){
    return view('backend.viewdatatanyajawab');
});



/** Task Data Lulus Seleksi */
Route::get('/adminS1',function(){
    return view('backend.dataseleksi');
});

/** Task Views Data Lulus Seleksi */
Route::get('/viewS1',function(){
    return view('backend.viewdataseleksi');
});


/** Task Baca Dan Hafalan Al Qur'an */
Route::get('/admin3',function(){
    return view('backend.testbacaalquran');
});


/** Task Tanya Jawab */
Route::get('/admin4',function(){
    return view('backend.tanyajawab');
});

Route::get('/admin4a',function(){
    return view('backend.tanyajawab2');
});



/** Task Survey */
Route::get('/admin5',function(){
    return view('backend.testsurvey');
});

Route::get('/admin5a',function(){
    return view('backend.testsurvey2');
});


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
});

/** PANITIA A (Test Survey) */
Route::middleware('auth:panitia-a')->prefix('panitia-a')->group(function () {
    /** Dashboard */
    Route::get('/',function(){
        return view('backend.panitia-a.home');
    });

    /** Test Survey */
    Route::get('test-survey', [TestSurveyController::class, 'testsurvey'])->name('test-survey.create');
    Route::post('test-survey', [TestSurveyController::class, 'store'])->name('test-survey.store');
    // Route::resource('test-survey', TestSurveiController::class);
    Route::get('test-survey-done', function(){
        return view('backend.panitia-a.done');
    })->name('test-survey.done');
});

/** PANITIA B (Test Al-Qur'an) */
Route::middleware('auth:panitia-b')->prefix('panitia-b')->group(function () {
    /** Dashboard */
    Route::get('/',function(){
        return view('backend.panitia-b.home');
    });
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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
