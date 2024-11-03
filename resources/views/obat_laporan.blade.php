<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Obat</title>
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
    <center><h1>Laporan Data Obat</h1>

    <table>
        <thead>
            <tr>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Satuan</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>

                <th>Qty</th>
                <th>Tanggal Expire</th>

            </tr>
        </thead>
        <tbody>
            @foreach($obats as $d)
                <tr>
                    <td>{{ $d->kode_obat }}</td>
                    <td>{{ $d->nama_obat }}</td>
                    <td>{{ $d->satuan }}  dengan type {{ $d->tipe }}</td>
                    <td>{{ $d->harga_beli }}</td>
                    <td>{{ $d->harga_jual }}</td>
                    <td>{{ $d->qty }}</td>
                    <td>{{ $d->tanggal_expired }}</td>

                    <td>{{ $d->status }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
