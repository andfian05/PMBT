<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\WawancaraRequest;

use App\Models\Wawancara;
use App\Models\Mahasantri;

class TestWawancaraController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testwawancara()
    {
        $mahasantris = Mahasantri::all();
        $tmp_seleksis = ['Virtual', 'PeTIK Jombang', 'YBM PLN'];

        return view('backend.panitia-c.test-wawancara')->with([
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

        return redirect()->route('test-wawancara.done');
    }
}
