<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests\DTRRequest;

// use App\Models\DTR;
use App\Models\Mahasantri;
use App\Models\Kabupaten;
use App\Models\Perhitungan;

use PDF;

class DTRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtrs = Perhitungan::with(['mahasantri'])->get();

        // $dtrs = ::sortable()->paginate(1)->onEachSide(1)->fragment('dtr');
        // $mahasantris = Perhitungan::sortable()->paginate(10)->onEachSide(1)->fragment('dtr');

        return view('backend.admin.dtr.index')->with([
            'dtrs' => $dtrs,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dtr = Perhitungan::with(['mahasantri'])->findOrFail($id);

        return view('backend.admin.dtr.detail')->with([
            'dtr' => $dtr
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
        $dtr = Perhitungan::findOrFail($id);
        $dtr->delete();

        return redirect()->route('dtr.index');
    }

    /** Export PDF */
    public function exportPDF()
    {
        $dtrs = Perhitungan::with(['mahasantri'])->get();
        $data = [
            'dtrs' => $dtrs
        ];

        $pdf = PDF::loadView('backend.admin.dtr.pdf', $data);
        return $pdf->download('Data-Hasil-Seleksi-Calon-Mahasantri-PeTIK-Jombang.pdf');
    }
}
