<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Dokter</title>
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
    <center><h1>Laporan Data Dokter</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Nomor HP</th>
                <th>Twitter</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Tiktok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokters as $d)
                <tr>
                    <td>{{ $d->kode_dokter }}</td>
                    <td>{{ $d->nama_dokter }}</td>
                    <td>{{ $d->spesialis }}</td>
                    <td>{{ $d->nomor_hp }}</td>
                    <td>{{ $d->twitter }}</td>
                    <td>{{ $d->facebook }}</td>
                    <td>{{ $d->instagram }}</td>
                    <td>{{ $d->tiktok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
