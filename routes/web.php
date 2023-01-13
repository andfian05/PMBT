<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasantriController;
use App\Http\Controllers\RegisterController;

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
Route::get('/pmbpetikjombang',function(){
    return view('daftar.video');
});

Route::post('/pmbpetik', [RegisterController::class, 'storeProfil'])->name('register.storeProfil');
Route::get('/pmbpetik', [RegisterController::class, 'createProfil'])->name('register.createProfil');

Route::get('/formpmb', [RegisterController::class, 'register'])->name('register.create');
Route::post('/formpmb', [RegisterController::class, 'store'])->name('register.store');
Route::get('/done-pmb', function () {
    return view('daftar.done-pmb');
})->name('donepmb');

/** Buat URL Select */
Route::post('/getKabupaten', [RegisterController::class, 'getKabupaten'])->name('getKabupaten');
Route::post('/getKecamatan', [RegisterController::class, 'getKecamatan'])->name('getKecamatan');
Route::post('/getDesa', [RegisterController::class, 'getDesa'])->name('getDesa');


/** Routes Administrator */
Route::get('/admin',function(){
    return view('backend.home');
});


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


/** Route Data Tampil Admin */
Route::resource('mahasantri', MahasantriController::class);
// Route::get('download/{id}', [MahasantriController::class, 'download'])->name('download');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
