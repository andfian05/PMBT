<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MahasantriRequest;

use App\Models\Mahasantri;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\Jurusan;
use App\Models\MediaInformasi;
use App\Models\ProfilePetik;


use DB;
use PDF;


class MahasantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasantris = Mahasantri::all();

        return view('backend.admin.mahasantri.index')->with([
            'mahasantris' => $mahasantris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsis = Provinsi::all();
        $jurusans = Jurusan::all();
        $mediaInformasis = MediaInformasi::all();

        return view('backend.admin.mahasantri.create')->with([
            'provinsis' => $provinsis,
            'jurusans' => $jurusans,
            'mediaInformasis' => $mediaInformasis,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasantriRequest $request)
    {
        $data = $request->all();

        $fileName = $data['berkas']->getClientOriginalName() . '.' . $data['berkas']->extension();
        $data['berkas']->move(storage_path('app/upload'), $fileName);

        Mahasantri::create([
            'nama' => $data['nama'], 
            'anak_ke' => $data['anak_ke'], 
            'tmp_lahir' => $data['tmp_lahir'], 
            'tgl_lahir' => $data['tgl_lahir'], 
            'no_hp' => $data['no_hp'], 
            'email' => $data['email'], 
            'alamat' => $data['alamat'], 
            'prov_id' => $data['prov_id'], 
            'kab_id' => $data['kab_id'], 
            'kec_id' => $data['kec_id'], 
            'desa_id' => $data['desa_id'], 
            'nama_ayah' => $data['nama_ayah'], 
            'pkj_ayah' => $data['pkj_ayah'], 
            'pdk_ayah' => $data['pdk_ayah'], 
            'nama_ibu' => $data['nama_ibu'], 
            'pkj_ibu' => $data['pkj_ibu'], 
            'pdk_ibu' => $data['pdk_ibu'], 
            'jml_sdr' => $data['jml_sdr'], 
            'nohp_klg' => $data['nohp_klg'], 
            'skl_asal' => $data['skl_asal'], 
            'jurusan_skl' => $data['jurusan_skl'], 
            'thn_lulus' => $data['thn_lulus'], 
            'cita_cita' => $data['cita_cita'], 
            'prestasi' => $data['prestasi'], 
            'penyakit' => $data['penyakit'], 
            'perokok' => $data['perokok'], 
            'jurusan_id' => $data['jurusan_id'], 
            'alasan' => $data['alasan'], 
            'media_id' => $data['media_id'], 
            'metode_berkas' => $data['metode_berkas'], 
            'berkas' => $fileName,
        ]);

        // menambahkan data profile petik
        ProfilePetik::create([
            'ket_profile' => $data['ket_profile']
        ]);

        return redirect()->route('mahasantri.index')->with('success', 'Mahasantri added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasantri = Mahasantri::with(['provinsi', 'kabupaten', 'kecamatan', 'desa', 'jurusan', 'mediaInformasi'])->findOrFail($id);
        $profilePetik = ProfilePetik::findOrFail($id);

        return view('backend.admin.mahasantri.detail')->with([
            'mahasantri' => $mahasantri,
            'profilePetik' => $profilePetik
        ]);
    }

    /**
     * For download file berkas
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        // $data = DB::table('mahasantri')->where('id', $id)->first();
        // $filepath = storage_path("app/upload/{$data->berkas}");
        // return Response::download($filepath);

        $data = DB::table('mahasantri')->where('id', $id)->first();
       
        return response()->download(storage_path('/app/upload/'. $data->berkas));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasantri = Mahasantri::with(['provinsi', 'kabupaten', 'kecamatan', 'desa', 'jurusan', 'mediaInformasi'])->findOrFail($id);
        $profilePetik = ProfilePetik::findOrFail($id);
        $provinsis = Provinsi::all();
        $kabupatens = Kabupaten::all();
        $kecamatans = Kecamatan::all();
        $desas = Desa::all();
        $jurusans = Jurusan::all();
        $mediaInformasis = MediaInformasi::all();

        return view('backend.admin.mahasantri.edit')->with([
            'mahasantri' => $mahasantri,
            'profilePetik' => $profilePetik,
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens,
            'kecamatans' => $kecamatans,
            'desas' => $desas,
            'jurusans' => $jurusans,
            'mediaInformasis' => $mediaInformasis,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasantriRequest $request, $id)
    {
        $data = $request->all();
        $mahasantri = Mahasantri::findOrFail($id);
        $profilePetik = ProfilePetik::findOrFail($id);

        if($request->berkas == ""){
            $fileName = $mahasantri->berkas;
        }else{
            $fileName = $data['berkas']->getClientOriginalName() . '-' . time(). '.' . $data['berkas']->extension();
            $data['berkas']->move(storage_path('app/upload'), $fileName);
            if($mahasantri->berkas == NULL){

            }else{
                unlink(storage_path('app')."/upload/".$mahasantri->berkas);
            }
        }

        Mahasantri::where('id', $mahasantri->id)
        ->update([
            'nama' => $data['nama'], 
            'anak_ke' => $data['anak_ke'], 
            'tmp_lahir' => $data['tmp_lahir'], 
            'tgl_lahir' => $data['tgl_lahir'], 
            'no_hp' => $data['no_hp'], 
            'email' => $data['email'], 
            'alamat' => $data['alamat'], 
            'prov_id' => $data['prov_id'], 
            'kab_id' => $data['kab_id'], 
            'kec_id' => $data['kec_id'], 
            'desa_id' => $data['desa_id'], 
            'nama_ayah' => $data['nama_ayah'], 
            'pkj_ayah' => $data['pkj_ayah'], 
            'pdk_ayah' => $data['pdk_ayah'], 
            'nama_ibu' => $data['nama_ibu'], 
            'pkj_ibu' => $data['pkj_ibu'], 
            'pdk_ibu' => $data['pdk_ibu'], 
            'jml_sdr' => $data['jml_sdr'], 
            'nohp_klg' => $data['nohp_klg'], 
            'skl_asal' => $data['skl_asal'], 
            'jurusan_skl' => $data['jurusan_skl'], 
            'thn_lulus' => $data['thn_lulus'], 
            'cita_cita' => $data['cita_cita'], 
            'prestasi' => $data['prestasi'], 
            'penyakit' => $data['penyakit'], 
            'perokok' => $data['perokok'], 
            'jurusan_id' => $data['jurusan_id'], 
            'alasan' => $data['alasan'], 
            'media_id' => $data['media_id'], 
            'metode_berkas' => $data['metode_berkas'], 
            'berkas' => $fileName,
        ]);

        // mengubah data profile petik
        ProfilePetik::where('id', $profilePetik->id)
        ->update([
            'ket_profile' => $data['ket_profile']
        ]);

        return redirect()->route('mahasantri.index')->with('success', 'Mahasantri updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasantri = Mahasantri::findOrFail($id);
        if(!empty($mahasantri->berkas)) unlink(storage_path('app')."/upload/".$mahasantri->berkas);
        $mahasantri->delete();

        // menghapus data profile petik
        $profilePetik = ProfilePetik::findOrFail($id);
        $profilePetik->delete();

        return redirect()->route('mahasantri.index')->with('success', 'Mahasantri deleted successfully');
    }

    /**
     * Export list mahasantri to PDF of the resource Mahasantri.
     */
    public function exportPDF()
    {
        $mahasantris = Mahasantri::with(['jurusan'])->get();
        $data = [
            'mahasantris' => $mahasantris
        ];

        $pdf = PDF::loadView('backend.admin.mahasantri.pdf', $data);
        return $pdf->download('Data-Calon-Mahasantri-PeTIK-Jombang.pdf');
    }

   
}