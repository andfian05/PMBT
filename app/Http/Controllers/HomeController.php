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

use DB;

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

        return view('backend.admin.home')->with([
            'mahasantri' => $mahasantri,
            'survei' => $survei
        ]);
    }
}
