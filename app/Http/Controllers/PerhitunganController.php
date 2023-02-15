<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PerhitunganRequest;

use App\Models\Perhitungan;
use App\Models\Mahasantri;

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

        return view('backend.admin.perhitungan.create')->with([
            'mahasantris' => $mahasantris
        ]);
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
