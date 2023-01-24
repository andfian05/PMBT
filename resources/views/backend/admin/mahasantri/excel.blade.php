<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Lengkap</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>No. Hp</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mahasantris as $index => $mahasantri)
    <tr>
      <td>{{ $index+1 }}</td>
      <td>{{ $mahasantri->nama }}</td>
      <td>{{ $mahasantri->tmp_lahir, date('d F Y', strtotime($mahasantri->tgl_lahir)) }}</td>
      <td>{{ $mahasantri->no_hp }}</td>
      <td>{{ $mahasantri->email }}</td>
      <td>{{ $mahasantri->jurusan['nama_jurusan'] }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
