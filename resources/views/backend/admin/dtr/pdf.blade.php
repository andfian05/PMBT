<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data-Hasil-Seleksi-Calon-Mahasantri-PeTIK-Jombang</title>
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
  <h3 class="text-center mb-5">Data Hasil Seleksi Calon Mahasantri PeTIK Jombang</h3>
  <table border="1" class="slice" align="center" cellpadding="3" cellspacing="0" width="100%">
    <thead>
      <tr class="slice">
        <th class="text-center">No</th>
        <th class="text-center">Nama Mahasantri</th>
        <th class="text-center">No. Hp</th>
        <th class="text-center">Email</th>
        <th class="text-center">Domisili</th>
        <th class="text-center">Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($dtrs as $index => $dtr)
      <tr class="text-center" style="font-size: .9rem;">
        <td>{{ $index+1 }}</td>
        <td>{{ $dtr->mahasantri['nama'] }}</td>
        <td>{{ $dtr->mahasantri['no_hp'] }}</td>
        <td>{{ $dtr->mahasantri['email'] }}</td>
        <td>{{ $dtr->mahasantri['kabupaten']['nama'] }}</td>
        <td>
          @php
              $nilai = $dtr->nilai_berkas + $dtr->nilai_survei + $dtr->nilai_wawancara + $dtr->nilai_quran + $dtr->nilai_akademik;
          @endphp
          @if ($nilai == 500)
              {{'Lulus Seleksi'}}
          @elseif($nilai > 250)
              {{'Rekomendasi'}}
          @elseif($nilai < 250)
              {{'Tidak Lulus Seleksi'}}
          @else
              {{'Belum Ada Pengimputan'}}
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>