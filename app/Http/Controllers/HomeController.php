<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Mahasantri;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Jurusan;
use App\Models\MediaInformasi;
use App\Models\ProfilePetik;
use App\Models\Survei;
use App\Models\Wawancara;
use App\Models\BacaQuran;
use App\Models\Perhitungan;


use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard Administrator.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardAdmin()
    {

        $mahasantri = Mahasantri::count();
        $survei = Survei::count();
        $wawancara = Wawancara::count();
        $bacaquran = BacaQuran::count();
        $dtr = Perhitungan::count();
        $user = User::count();

        $provinsis = FacadesDB::table('provinsi')->select('id_prov','nama')->get();
        // $mahasantri = DB::table('mahasantri')->select('provinsi_id', 'id_provinsi')->get();


        return view('backend.admin.home')->with([
            'mahasantri' => $mahasantri,
            'survei' => $survei,
            'wawancara' => $wawancara,
            'bacaquran' => $bacaquran,
            'dtr' => $dtr,
            'user' => $user,
            'provinsis' => $provinsis,
        ]);


    }

    /**
     * Show the application dashboard Panitia A (Tes Survei).
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardPanitiaA()
    {
        $testsurvei = Survei::count();

        return view('backend.panitia-a.home')->with([
            'testsurvei' => $testsurvei
        ]);
    }

    /**
     * Show the application dashboard Panitia C (Tes Tanya Jawab / Wawancara).
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardPanitiaC()
    {
        $testwawancara = Wawancara::count();

        return view('backend.panitia-c.home')->with([
            'testwawancara' => $testwawancara
        ]);
    }

    /**
     * Show the application dashboard Panitia B (Test Baca dan Hafalan Al-Qur'an).
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardPanitiaB()
    {
        $testbacaquran = BacaQuran::count();

        return view('backend.panitia-b.home')->with([
            'testbacaquran' => $testbacaquran
        ]);
    }


    
}
