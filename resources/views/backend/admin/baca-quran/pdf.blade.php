<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data-Penilaian-Baca-Quran-Calon-Mahasantri-PeTIK-Jombang</title>
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
  <h3 class="text-center mb-5">Data Penilaian Baca Quran Calon Mahasantri PeTIK Jombang</h3>
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
    @foreach ($baca_qurans as $index => $baca_quran)
      <tr class="text-center" style="font-size: .9rem;">
        <td>{{ $index+1 }}</td>
        <td>{{ $baca_quran->mahasantri['nama'] }}</td>
        <td>{{ $baca_quran->mahasantri['no_hp'] }}</td>
        <td>{{ $baca_quran->nama_pewawancara }}</td>
        <td>{{ $baca_quran->tmp_seleksi }}</td>
        <td>{{ $baca_quran->nilaibacaan + $baca_quran->tajwidbacaan + $baca_quran->nilaihafalan + $baca_quran->tajwidhafalan + $baca_quran->kemampuanhafalan }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>