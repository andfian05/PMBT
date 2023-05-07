<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SurveiRequest;

use App\Models\Survei;
use App\Models\Mahasantri;

class TestSurveyController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testsurvey()
    {
        $mahasantris = Mahasantri::all();
        $tmp_seleksis = ['Virtual', 'PeTIK Jombang', 'YBM PLN'];
        $lks_seleksis = ['YBM PLN Pusat', 'YBM PLN Divisi Provinsi Aceh', 'YBM PLN Divisi Provinsi Sumatera Utara', 'YBM PLN Divisi Provinsi Sumatera Barat', 'YBM PLN Divisi Provinsi Riau', 'YBM PLN Divisi Provinsi Jambi', 'YBM PLN Divisi Provinsi Sumatera Selatan', 'YBM PLN Divisi Provinsi Bengkulu', 'YBM PLN Divisi Provinsi Lampung', 'YBM PLN Divisi Provinsi Kepulauan Bangka Belitung', 'YBM PLN Divisi Provinsi Kepulauan Riau', 'YBM PLN Divisi Provinsi Jawa Barat', 'YBM PLN Divisi Provinsi Jawa Tengah', 'YBM PLN Divisi Provinsi D.I Yogyakarta', 'YBM PLN Divisi Provinsi Jawa Timur', 'YBM PLN Divisi Provinsi Banten', 'YBM PLN Divisi Provinsi Bali', 'YBM PLN Divisi Provinsi Nusa Tenggara Barat', 'YBM PLN Divisi Provinsi Nusa Tenggara Timur', 'YBM PLN Divisi Provinsi Kalimantan Barat', 'YBM PLN Divisi Provinsi Kalimantan Timur', 'YBM PLN Divisi Provinsi Kalimantan Tengah', 'YBM PLN Divisi Provinsi Kalimantan Selatan', 'YBM PLN Divisi Provinsi Kalimantan Utara', 'YBM PLN Divisi Provinsi Sulawesi Utara', 'YBM PLN Divisi Provinsi Sulawesi Selatan', 'YBM PLN Divisi Provinsi Sulawesi Tenggara', 'YBM PLN Divisi Provinsi Sulawesi Barat', 'YBM PLN Divisi Provinsi Gorontalo', 'YBM PLN Divisi Provinsi Maluku', 'YBM PLN Divisi Provinsi Maluku Utara', 'YBM PLN Divisi Provinsi Papua Barat', 'YBM PLN Divisi Provinsi Papua'];

        return view('backend.panitia-a.test-survey')->with([
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

        $ntotal_survei = $data['izinbeasiswa'] + $data['statuskel'] + $data['pendkel'] + $data['usiapend'] + $data['kesehatankel'] + $data['jenispekrj'] + $data['statusrmh'] + $data['luasrmh'] + $data['dindingrmh'] + $data['ataprmh'] + $data['lantairmh'] + $data['alatmsk'] + $data['perabotan'] + $data['sumberair'] + $data['mck'] + $data['penerangan'] + $data['lokasirmh'] + $data['tataletak'] + $data['miliktanah'] + $data['harta'];

        Survei::create([
            'mhs_id' => $data['mhs_id'], 
            'nama_pewawancara' => $data['nama_pewawancara'], 
            'tmp_seleksi' => $data['tmp_seleksi'], 
            'lks_seleksi' => $data['lks_seleksi'], 
            'izinbeasiswa' => $data['izinbeasiswa'], 
            'note_izinbeasiswa' => $data['note_izinbeasiswa'], 
            'statuskel' => $data['statuskel'], 
            'note_statuskel' => $data['note_statuskel'], 
            'pendkel' => $data['pendkel'], 
            'note_pendkel' => $data['note_pendkel'], 
            'usiapend' => $data['usiapend'], 
            'note_usiapend' => $data['note_usiapend'], 
            'kesehatankel' => $data['kesehatankel'], 
            'note_kesehatankel' => $data['note_kesehatankel'], 
            'jenispekrj' => $data['jenispekrj'], 
            'note_jenispekrj' => $data['note_jenispekrj'], 
            'statusrmh' => $data['statusrmh'], 
            'note_statusrmh' => $data['note_statusrmh'], 
            'luasrmh' => $data['luasrmh'], 
            'note_luasrmh' => $data['note_luasrmh'], 
            'dindingrmh' => $data['dindingrmh'], 
            'note_dindingrmh' => $data['note_dindingrmh'], 
            'ataprmh' => $data['ataprmh'], 
            'note_ataprmh' => $data['note_ataprmh'], 
            'lantairmh' => $data['lantairmh'], 
            'note_lantairmh' => $data['note_lantairmh'], 
            'alatmsk' => $data['alatmsk'], 
            'note_alatmsk' => $data['note_alatmsk'], 
            'perabotan' => $data['perabotan'], 
            'note_perabotan' => $data['note_perabotan'], 
            'sumberair' => $data['sumberair'], 
            'note_sumberair' => $data['note_sumberair'], 
            'mck' => $data['mck'], 
            'note_mck' => $data['note_mck'], 
            'penerangan' => $data['penerangan'], 
            'note_penerangan' => $data['note_penerangan'], 
            'lokasirmh' => $data['lokasirmh'], 
            'note_lokasirmh' => $data['note_lokasirmh'], 
            'tataletak' => $data['tataletak'], 
            'note_tataletak' => $data['note_tataletak'], 
            'miliktanah' => $data['miliktanah'], 
            'note_miliktanah' => $data['note_miliktanah'], 
            'harta' => $data['harta'], 
            'note_harta' => $data['note_harta'],
            'ntotal_survei' => $ntotal_survei
        ]);

        return redirect()->route('test-survey.done');
    }
}
