<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data-Calon-Mahasantri-PeTIK-Jombang</title>
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
  <h3 class="text-center mb-5">Data Calon Mahasantri PeTIK Jombang</h3>
  <table border="1" class="slice" align="center" cellpadding="3" cellspacing="0" width="100%">
    <thead>
      <tr class="slice">
        <th class="text-center">#</th>
        <th class="text-center">Nama Lengkap</th>
        <th class="text-center">Tempat, Tanggal Lahir</th>
        <th class="text-center">No. Hp</th>
        <th class="text-center">Email</th>
        <th class="text-center">Jurusan</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($mahasantris as $index => $mahasantri)
      <tr class="text-center" style="font-size: .9rem;">
        <td>{{ $index+1 }}</td>
        <td>{{ $mahasantri->nama }}</td>
        <td>{{ $mahasantri->tmp_lahir }}, {{ date('d F Y', strtotime($mahasantri->tgl_lahir)) }}</td>
        <td>{{ $mahasantri->no_hp }}</td>
        <td>{{ $mahasantri->email }}</td>
        <td>{{ $mahasantri->jurusan['nama_jurusan'] }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>