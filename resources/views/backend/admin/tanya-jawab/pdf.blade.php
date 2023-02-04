<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data-Penilaian-Tanya-Jawab-Calon-Mahasantri-PeTIK-Jombang</title>
  <style>
    .slice {
      border: 1px solid rgb(155, 154, 154);
    }
    .text-start {
      text-align: left !important;
    }

    .text-center {
      text-align: center !important;
    }

    .mb-5 {
      margin-bottom: 3rem;
    }
  </style>
</head>
<body>
  <h3 class="text-center mb-5">Data Penilaian Tanya Jawab Calon Mahasantri PeTIK Jombang</h3>
  <table border="1" class="slice" align="center" cellpadding="3" cellspacing="0" width="100%">
    <thead>
      <tr class="slice">
        <th class="text-center">No</th>
        <th class="text-center">Nama Mahasantri</th>
        <th class="text-center">No. Hp</th>
        <th class="text-center">Nama Pewawancara</th>
        <th class="text-center">Tempat Seleksi</th>
        <th class="text-center">Nilai Total</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($wawancaras as $index => $wawancara)
      <tr class="text-center" style="font-size: .9rem;">
        <td>{{ $index+1 }}</td>
        <td>{{ $wawancara->mahasantri['nama'] }}</td>
        <td>{{ $wawancara->mahasantri['no_hp'] }}</td>
        <td>{{ $wawancara->nama_pewawancara }}</td>
        <td>{{ $wawancara->tmp_seleksi }}</td>
        <td>{{ $wawancara->visimisi + $wawancara->komitmen + $wawancara->tanggungjawab + $wawancara->kejujuran + $wawancara->pekerjakeras + $wawancara->bekerjasama + $wawancara->kemandirian + $wawancara->tolongmenolong + $wawancara->peduli + $wawancara->pembelajar + $wawancara->menghargaiprestasi + $wawancara->percayadiri + $wawancara->demokratis + $wawancara->disiplinwaktu + $wawancara->menjaganamabaik + $wawancara->salam + $wawancara->motivasi + $wawancara->brgpolutan + $wawancara->brgharam + $wawancara->riwayatpenyakit + $wawancara->ceritasingkat + $wawancara->medkom }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>