<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasantri;
use App\Models\PotensiAkademik;

class PotensiAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potensi_akademik = PotensiAkademik::with(['mahasantri'])->get();

        $potensi_akademik = PotensiAkademik::sortable()->paginate(10)->onEachSide(1)->fragment('potensi_akademik');

        return view('backend.admin.potensi-akademik.index')->with([
            'potensi_akademik' => $potensi_akademik
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

        return view('backend.admin.potensi-akademik.create')->with([
            'mahasantris' => $mahasantris
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // menghitung data Bahasa Inggris
        $nilai_inggris = $request->input('b_inggris');
        $hasil_inggris = $nilai_inggris * 0.2;
        $data['b_inggris'] = $hasil_inggris;
        // menghitung data Komputer
        $nilai_komputer = $request->input('komputer');
        $hasil_komputer = $nilai_komputer * 0.25;
        $data['komputer'] = $hasil_komputer;
        // menghitung data Aritmatika
        $nilai_aritmatika = $request->input('aritmatika');
        $hasil_aritmatika = $nilai_aritmatika * 0.25;
        $data['aritmatika'] = $hasil_aritmatika;
        // menghitung data Mekanikal
        $nilai_mekanikal = $request->input('mekanikal');
        $hasil_mekanikal = $nilai_mekanikal * 0.15;
        $data['mekanikal'] = $hasil_mekanikal;
        // menghitung data Simbol
        $nilai_simbol = $request->input('simbol');
        $hasil_simbol = $nilai_simbol * 0.15;
        $data['simbol'] = $hasil_simbol;

        // menghitung total nilai
        $ntotal_pa = $hasil_inggris + $hasil_komputer + $hasil_aritmatika + $hasil_mekanikal + $hasil_simbol;
        $data['ntotal_pa'] = $ntotal_pa;

        PotensiAkademik::create($data);
        
        return redirect()->route('potensi-akademik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $potensi_akademik = PotensiAkademik::with(['mahasantri'])->findOrFail($id);

        return view('backend.admin.potensi-akademik.detail')->with([
            'potensi_akademik' => $potensi_akademik,
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
        $potensi_akademik = PotensiAkademik::findOrFail($id);
        $potensi_akademik->delete();

        return redirect()->route('potensi-akademik.index');
    }
}
