<!DOCTYPE html>
<html>

<head>
    <title>PMB PeTIK Jombang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center">Data Calon Mahasantri</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">No.Hp</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            @php $no = 1; @endphp
            @foreach($mahasantris as $mahasantri)
            <tr>
                <td scope="row" data-title="No" class="text-center">{{ $no++ }}</td>
                <td data-title="Nama Lengkap">{{ $mahasantri->nama }}</td>
                <td data-title="Tempat Lahir">{{ $mahasantri->tmp_lahir }}</td>
                <td data-title="Tanggal Lahir">{{ date('d F Y', strtotime($mahasantri->tgl_lahir)) }}</td>
                <td data-title="No. Handphone">{{ $mahasantri->no_hp }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>



</body>

</html>
