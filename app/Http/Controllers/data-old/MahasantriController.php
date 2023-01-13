<?php

namespace App\Http\Controllers;

use App\Models\Mahasantri;
use Illuminate\Http\Request;

class MahasantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Mahasantri';
        $data['q'] = $request->get('q');
        $data['mahasantris'] = Mahasantri::where('nama', 'like', '%' . $data['q'] . '%')->get();
        return view('backend.biodatamhs', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Mahasantri';
        return view('daftar.pmbpetikjombang', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'email' => 'required',
        ]);

        $mahasantri = new Mahasantri($request->all());
        $mahasantri->save();
        return redirect('mahasantri')->with('success', 'Mahasantri added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasantri $mahasantri)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasantri $mahasantri)
    {
        $data['title'] = 'Edit Mahasantri';
        $data['mahasantri'] = $mahasantri;
        return view('backend.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasantri $mahasantri)
    {
        $request->validate([
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'email' => 'required',
        ]);

        $mahasantri->nama = $request->nama;
        $mahasantri->tmp_lahir = $request->tmp_lahir;
        $mahasantri->tgl_lahir = $request->tgl_lahir;
        $mahasantri->anak = $request->anak;
        $mahasantri->no_hp = $request->no_hp;
        $mahasantri->email = $request->email;
        $mahasantri->alamat = $request->alamat;
        $mahasantri->save();
        return redirect('mahasantri')->with('success', 'Mahasantri updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasantri $mahasantri)
    {
        $mahasantri->delete();
        return redirect('mahasantri')->with('success', 'Mahasantri deleted successfully');
    }
}