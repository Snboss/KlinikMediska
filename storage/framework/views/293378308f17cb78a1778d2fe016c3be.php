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
        Klinik Mediska Padang
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
            <?php $__currentLoopData = $pasiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($d->kode_pasien); ?></td>
                    <td><?php echo e($d->nama_pasien); ?></td>
                    <td><?php echo e($d->alamat); ?></td>
                    <td><?php echo e($d->nomor_hp); ?></td>
                    <td><?php echo e($d->jenis_kelamin); ?></td>

                    <td><?php echo e($d->status); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/pasien_laporan.blade.php ENDPATH**/ ?>