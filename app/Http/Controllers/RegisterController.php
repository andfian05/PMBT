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

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        $provinsis = Provinsi::all();
        $jurusans = Jurusan::all();
        $mediaInformasis = MediaInformasi::all();

        return view('daftar.register-pmb')->with([
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
        
        return redirect()->route('donepmb');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profilePetik()
    {
        return view('daftar.first-pmb');
    }

    /**
     * get kabupaten atau kota
     */
    public function getKabupaten(Request $request)
    {
        $id_prov = $request->id_prov;
        $kabupatens = Kabupaten::where('prov_id', $id_prov)->get();

        foreach ($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id_kab'>$kabupaten->nama</option>";
        }
    }

    /**
     * get kecamatam
     */
    public function getKecamatan(Request $request)
    {
        $id_kab = $request->id_kab;
        $kecamatans = Kecamatan::where('kab_id', $id_kab)->get();

        foreach ($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id_kec'>$kecamatan->nama</option>";
        }
    }

    /**
     * get Desa
     */
    public function getDesa(Request $request)
    {
        $id_kec = $request->id_kec;
        $desas = Desa::where('kec_id', $id_kec)->get();

        foreach ($desas as $desa) {
            echo "<option value='$desa->id_desa'>$desa->nama</option>";
        }
    }
}