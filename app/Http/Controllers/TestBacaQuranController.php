<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BacaQuranRequest;

use App\Models\Quran;
use App\Models\BacaQuran;
use App\Models\Mahasantri;

class TestBacaQuranController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testbacaquran()
    {
        $mahasantris = Mahasantri::all();
        $tmp_seleksis = ['Virtual', 'PeTIK Jombang', 'YBM PLN'];
        $qurans = Quran::all();
        $nilais = [10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,
                31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,
                52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,
                73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,
                94,95,96,97,98,99,100];

        return view('backend.panitia-b.test-baca-quran')->with([
            'mahasantris' => $mahasantris,
            'tmp_seleksis' => $tmp_seleksis,
            'qurans' => $qurans,
            'nilais' => $nilais,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BacaQuranRequest $request)
    {
        $data = $request->all();
        
        $ntotal_bq = $data['nilaibacaan'] + $data['tajwidbacaan'] + $data['nilaihafalan'] + $data['tajwidhafalan'] + $data['kemampuanhafalan'];
        $data['ntotal_bq'] = $ntotal_bq;
        BacaQuran::create($data);
        
        return redirect()->route('test-baca-quran.done');
    }
}
