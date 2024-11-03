<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pasien</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <center><h1>Laporan Data Pasein</h1>

    <table>
        <thead>
            <tr>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Nomor HP</th>

                <th>Jenis Kelamin</th>
                <th>Status Menikah</th>

            </tr>
        </thead>
        <tbody>
            @foreach($pasiens as $d)
                <tr>
                    <td>{{ $d->kode_pasien }}</td>
                    <td>{{ $d->nama_pasien }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>{{ $d->nomor_hp }}</td>
                    <td>{{ $d->jenis_kelamin }}</td>

                    <td>{{ $d->status }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
