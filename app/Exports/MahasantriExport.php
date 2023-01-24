<?php

namespace App\Exports;

use App\Models\Mahasantri;
use App\Models\Jurusan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MahasantriExport implements FromView, ShouldAutoSize
{
    use Exportable;

    private $mahasantris;

    public function __construct(){
        $this->mahasantris = Mahasantri::with(['jurusan'])->get();
    }

    public function view(): View
    {
        return view('backend.admin.mahasantri.excel', [
            'mahasantris' => $this->mahasantris
        ]);
    }

}
