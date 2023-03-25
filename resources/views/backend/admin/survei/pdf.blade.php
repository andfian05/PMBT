<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data-Penilaian-Survei-Calon-Mahasantri-PeTIK-Jombang</title>
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
  <h3 class="text-center mb-5">Data Penilaian Survei Calon Mahasantri PeTIK Jombang</h3>
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
    @foreach ($surveis as $index => $survei)
      <tr class="text-center" style="font-size: .9rem;">
        <td>{{ $index+1 }}</td>
        <td>{{ $survei->mahasantri['nama'] }}</td>
        <td>{{ $survei->mahasantri['no_hp'] }}</td>
        <td>{{ $survei->nama_pewawancara }}</td>
        <td>{{ $survei->tmp_seleksi }}</td>
        <td>{{ $survei->sktm + $survei->progbeasiswa + $survei->izinbeasiswa + $survei->statuskel + $survei->pendkel + $survei->usiapend + $survei->kesehatankel + $survei->jenispekrj + $survei->statusrmh + $survei->luasrmh + $survei->dindingrmh + $survei->ataprmh + $survei->lantairmh + $survei->alatmsk + $survei->perabotan + $survei->sumberair + $survei->mck + $survei->penerangan + $survei->lokasirmh + $survei->tataletak + $survei->miliktanah + $survei->harta }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</body>
</html>