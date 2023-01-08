<?php

namespace App\Http\Controllers;

use App\Models\DataSeleksi as ModelsDataSeleksi;
use Illuminate\Http\Request;

class DataSeleksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ORM > menampilkan data Mahasantri 
        $dataseleksi = ModelsDataSeleksi::all();
        return view('backend.DTR.index', compact('dataseleksi'));

        //menampilkan seluruh data
        // $mahasantri = Mahasantri::orderBy('id', 'DESC')->get();
        // return view('backend.biodatamhs',compact('mahasantri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan view data
        $row = ModelsDataSeleksi::find($id);
        return view('backend.DTR.viewdataseleksi', compact('row'));
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
        //
    }
}
