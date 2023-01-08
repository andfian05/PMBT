<?php

use App\Http\Controllers\DataSeleksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasantriController;

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
Route::get('/formpmb', function () {
    return view('daftar.form.index');
});

Route::get('/formpenutup', function () {
    return view('daftar.form.penutup');
});



// /** Routes Untuk Tampilan Daftar */
Route::get('/pmbpetikjombang',function(){
    return view('daftar.home_v');
});

Route::get('/pmb1',function(){
    return view('daftar.pmbpetikjombang');
});

Route::get('/pmb2',function(){
    return view('daftar.hometwo');
});

Route::get('/pmb3',function(){
    return view('daftar.homethree');
});

Route::get('/pmb4',function(){
    return view('daftar.homefour');
});

Route::get('/pmb5',function(){
    return view('daftar.homefive');
});

Route::get('/pmb6',function(){
    return view('daftar.homesix');
});

Route::get('/pmbl',function(){
    return view('daftar.homelast');
});


/** Routes Administrator */
Route::get('/admin',function(){
    return view('backend.home');
});


/** Task Data Global Seleksi */
Route::get('/mahasantri',function(){
    return view('backend.biodatamahasantri.index');
});

//data survei
Route::get('/admin2w',function(){
    return view('backend.datasurvei.index');
});

//data bacaan Al Qur'an
Route::get('/admin2b',function(){
    return view('backend.databacaan.index');
});

//data tanya jawab
Route::get('/admin2a',function(){
    return view('backend.datatanyajawab.index');
});


/** Task Views Data Global Seleksi */
// Route::get('/viewbio',function(){
//     return view('backend.viewdatamhs');
// });

Route::get('/view2w',function(){
    return view('backend.datasurvei.viewdatasurvei');
});

Route::get('/view2b',function(){
    return view('backend.databacaan.viewdatabacaan');
});

Route::get('/view2a',function(){
    return view('backend.datatanyajawab.viewdatatanyajawab');
});



/** Task Data Lulus Seleksi */
Route::get('/dataseleksi',function(){
    return view('backend.DTR.index');
});

/** Task Views Data Lulus Seleksi */
Route::get('/viewS1',function(){
    return view('backend.DTR.viewdataseleksi');
});


/** Task Baca Dan Hafalan Al Qur'an */
Route::get('/admin3',function(){
    return view('backend.testbacaalquran.index');
});


/** Task Tanya Jawab */
Route::get('/admin4',function(){
    return view('backend.testtanyajawab.index');
});

Route::get('/admin4a',function(){
    return view('backend.testtanyajawab.tanyajawab2');
});



/** Task Survey */
Route::get('/admin5',function(){
    return view('backend.testsurvei.index');
});

Route::get('/admin5a',function(){
    return view('backend.testsurvei.testsurvey2');
});


/** Route Data Tampil Admin */
Route::resource('mahasantri',MahasantriController::class);
Route::resource('dataseleksi',DataSeleksi::class);


//login dan logout
