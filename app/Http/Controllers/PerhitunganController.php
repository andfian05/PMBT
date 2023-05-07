<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PerhitunganRequest;

use App\Models\Perhitungan;
use App\Models\Mahasantri;
use App\Models\Survei;
use App\Models\Wawancara;
use App\Models\BacaQuran;
use App\Models\PotensiAkademik;

class PerhitunganController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perhitungan()
    {
        $mahasantris = Mahasantri::all();
        // $survei = Survei::all();
        // $wawancara = Wawancara::all();
        // $baca_quran = BacaQuran::all();
        // $potensi_akademik = PotensiAkademik::all();

        // $mahasantris = Mahasantri::sortable()->paginate(10)->onEachSide(1)->fragment('perhitungan');

        return view('backend.admin.perhitungan.create')->with([
            'mahasantris' => $mahasantris,
            // 'survei' => $survei,
            // 'wawancara' => $wawancara,
            // 'baca_quran' => $baca_quran,
            // 'potensi_akademik' => $potensi_akademik
        ]);
    }

    /** 
     * get survei by id mahasantri
     */
    public function getSurvei(Request $request)
    {
        $id_mhs = $request->id_mhs;
        $surveis = Survei::where('mhs_id', $id_mhs)->get();

        foreach ($surveis as $survei) {
            echo '<option value='.$survei->ntotal_survei * (30/100) .'>' .$survei->ntotal_survei * (30/100) . '</option>';
        }
    }

    /** 
     * get wawancara by id mahasantri
     */
    public function getWawancara(Request $request)
    {
        $id_mhs = $request->id_mhs;
        $wawancaras = Wawancara::where('mhs_id', $id_mhs)->get();

        foreach ($wawancaras as $wawancara) {
            echo '<option value='.$wawancara->ntotal_wawancara * (25/100) .'>' .$wawancara->ntotal_wawancara * (25/100) . '</option>';
        }
    }

    /** 
     * get quran by id mahasantri
     */
    public function getQuran(Request $request)
    {
        $id_mhs = $request->id_mhs;
        $qurans = BacaQuran::where('mhs_id', $id_mhs)->get();

        foreach ($qurans as $quran) {
            echo '<option value='.$quran->ntotal_bq * (30/100) .'>' .$quran->ntotal_bq * (30/100) . '</option>';
        }
    }

    /** 
     * get akademik by id mahasantri
     */
    public function getAkademik(Request $request)
    {
        $id_mhs = $request->id_mhs;
        $akademiks = PotensiAkademik::where('mhs_id', $id_mhs)->get();

        foreach ($akademiks as $akademik) {
            echo '<option value='.$akademik->ntotal_pa * (15/100) .'>' .$akademik->ntotal_pa * (15/100) . '</option>';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerhitunganRequest $request)
    {
        $data = $request->all();
        Perhitungan::create($data);

        return redirect()->route('perhitungan.done');
    }
}
