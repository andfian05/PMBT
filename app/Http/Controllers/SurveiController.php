<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SurveiRequest;

use App\Models\Survei;
use App\Models\Mahasantri;

class SurveiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveis = Survei::with(['mahasantri'])->get();

        return view('backend.admin.survei.index')->with([
            'surveis' => $surveis,
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
        $lks_seleksis = ['YBM PLN Pusat', 'YBM PLN Divisi Provinsi Aceh', 'YBM PLN Divisi Provinsi Sumatera Utara', 'YBM PLN Divisi Provinsi Sumatera Barat', 'YBM PLN Divisi Provinsi Riau', 'YBM PLN Divisi Provinsi Jambi', 'YBM PLN Divisi Provinsi Sumatera Selatan', 'YBM PLN Divisi Provinsi Bengkulu', 'YBM PLN Divisi Provinsi Lampung', 'YBM PLN Divisi Provinsi Kepulauan Bangka Belitung', 'YBM PLN Divisi Provinsi Kepulauan Riau', 'YBM PLN Divisi Provinsi Jawa Barat', 'YBM PLN Divisi Provinsi Jawa Tengah', 'YBM PLN Divisi Provinsi D.I Yogyakarta', 'YBM PLN Divisi Provinsi Jawa Timur', 'YBM PLN Divisi Provinsi Banten', 'YBM PLN Divisi Provinsi Bali', 'YBM PLN Divisi Provinsi Nusa Tenggara Barat', 'YBM PLN Divisi Provinsi Nusa Tenggara Timur', 'YBM PLN Divisi Provinsi Kalimantan Barat', 'YBM PLN Divisi Provinsi Kalimantan Timur', 'YBM PLN Divisi Provinsi Kalimantan Tengah', 'YBM PLN Divisi Provinsi Kalimantan Selatan', 'YBM PLN Divisi Provinsi Kalimantan Utara', 'YBM PLN Divisi Provinsi Sulawesi Utara', 'YBM PLN Divisi Provinsi Sulawesi Selatan', 'YBM PLN Divisi Provinsi Sulawesi Tenggara', 'YBM PLN Divisi Provinsi Sulawesi Barat', 'YBM PLN Divisi Provinsi Gorontalo', 'YBM PLN Divisi Provinsi Maluku', 'YBM PLN Divisi Provinsi Maluku Utara', 'YBM PLN Divisi Provinsi Papua Barat', 'YBM PLN Divisi Provinsi Papua'];

        return view('backend.admin.survei.create')->with([
            'mahasantris' => $mahasantris,
            'tmp_seleksis' => $tmp_seleksis,
            'lks_seleksis' => $lks_seleksis
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SurveiRequest $request)
    {
        $data = $request->all();
        Survei::create($data);

        return redirect()->route('survei.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $survei = Survei::with(['mahasantri'])->findOrFail($id);

        return view('backend.admin.survei.detail')->with([
            'survei' => $survei
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
        $survei = Survei::findOrFail($id);
        $survei->delete();

        return redirect()->route('survei.index');
    }
}
