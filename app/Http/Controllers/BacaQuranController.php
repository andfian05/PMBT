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
        // $nilais = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

        return view('backend.admin.baca-quran.create')->with([
            'mahasantris' => $mahasantris,
            'tmp_seleksis' => $tmp_seleksis,
            'qurans' => $qurans,
            // 'nilais' => $nilais,
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
