<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BacaQuranRequest;

use App\Models\Quran;
use App\Models\BacaQuran;
use App\Models\Mahasantri;

use PDF;

class BacaQuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baca_qurans = BacaQuran::with(['mahasantri', 'bacaquran', 'hafalanquran'])->get();

        $baca_qurans = BacaQuran::sortable()->paginate(10)->onEachSide(1)->fragment('AlQuran');

        return view('backend.admin.baca-quran.index')->with([
            'baca_qurans' => $baca_qurans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasantris = Mahasantri::all();
       
        $tmp_seleksis = ['Virtual', 'PeTIK Jombang', 'YBM PLN'];
        $qurans = Quran::all();
        $nilais = [10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,
                31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,
                52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,
                73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,
                94,95,96,97,98,99,100];

        return view('backend.admin.baca-quran.create')->with([
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
        BacaQuran::create($data);

        return redirect()->route('baca-quran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $baca_quran = BacaQuran::with(['mahasantri', 'bacaquran', 'hafalanquran'])->findOrFail($id);

        return view('backend.admin.baca-quran.detail')->with([
            'baca_quran' => $baca_quran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bacaquran = BacaQuran::findOrFail($id);
        $bacaquran->delete();

        return redirect()->route('baca-quran.index');
    }

    /** Export PDF */
    public function exportPDF()
    {
        $baca_qurans = BacaQuran::with(['mahasantri', 'bacaquran', 'hafalanquran'])->get();
        $data = [
            'baca_qurans' => $baca_qurans
        ];

        $pdf = PDF::loadView('backend.admin.baca-quran.pdf', $data);
        return $pdf->download('Data-Penilaian-Baca-Quran-Calon-Mahasantri-PeTIK-Jombang.pdf');
    }
}
