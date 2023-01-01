<?php

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


// /** Routes Untuk Tampilan Daftar */
// // Route::get('/', function () {
// //     return view('master');
// // });
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
Route::get('/admin2',function(){
    return view('backend.biodatamhs');
});

Route::get('/admin2w',function(){
    return view('backend.datawawancara');
});

Route::get('/admin2b',function(){
    return view('backend.databacaan');
});

Route::get('/admin2a',function(){
    return view('backend.dataakademik');
});


/** Task Views Data Global Seleksi */
Route::get('/viewbio',function(){
    return view('backend.viewdatamhs');
});

Route::get('/view2w',function(){
    return view('backend.viewdatawawancara');
});

Route::get('/view2b',function(){
    return view('backend.viewdatabacaan');
});

Route::get('/view2a',function(){
    return view('backend.viewdataakademik');
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
Route::resource('/mahasantri', MahasantriController::class);