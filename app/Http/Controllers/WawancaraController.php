<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\WawancaraRequest;

use App\Models\Wawancara;
use App\Models\Mahasantri;

use PDF;

class WawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wawancaras = Wawancara::with(['mahasantri'])->get();

        $wawancaras = Wawancara::sortable()->paginate(10)->onEachSide(1)->fragment('wawancara');

        return view('backend.admin.tanya-jawab.index')->with([
            'wawancaras' => $wawancaras
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

        return view('backend.admin.tanya-jawab.create')->with([
            'mahasantris' => $mahasantris,
            'tmp_seleksis' => $tmp_seleksis
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WawancaraRequest $request)
    {
        $data = $request->all();
        Wawancara::create($data);

        return redirect()->route('tanya-jawab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wawancara = Wawancara::with(['mahasantri'])->findOrFail($id);

        return view('backend.admin.tanya-jawab.detail')->with([
            'wawancara' => $wawancara
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
        $wawancara = Wawancara::findOrFail($id);
        $wawancara->delete();

        return redirect()->route('tanya-jawab.index');
    }

    /** Export PDF */
    public function exportPDF()
    {
        $wawancaras = Wawancara::with(['mahasantri'])->get();
        $data = [
            'wawancaras' => $wawancaras
        ];

        $pdf = PDF::loadView('backend.admin.tanya-jawab.pdf', $data);
        return $pdf->download('Data-Penilaian-Tanya-Jawab-Calon-Mahasantri-PeTIK-Jombang.pdf');
    }
}
