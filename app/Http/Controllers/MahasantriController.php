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
    public function index()
    {
        //ORM > menampilkan data Mahasantri 
        $mahasantri = Mahasantri::all();
        return view('backend.biodatamahasantri.index', compact('mahasantri'));

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
        //ambil master data untuk di loop di select option
        $ar_mahasantri = Mahasantri::all();

        //membuat tambah data mahasantri
        return view('backend.biodatamahasantri.formtambahmhs', compact('ar_mahasantri'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tambah data mahasantri
        // $request->validate([
        //     'nama' => 'required',
           
        // ]);

       
      
        // Mahasantri::create($request->all());
       
        // return redirect()->route('mahasantri.index')
        //                 ->with('success','Created Successfully.');
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
        $row = Mahasantri::find($id);
        return view('backend.biodatamahasantri.viewdatamhs', compact('row'));
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
