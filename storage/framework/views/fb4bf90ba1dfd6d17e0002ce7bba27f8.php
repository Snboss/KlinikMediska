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
            <?php $__currentLoopData = $dokters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($d->kode_dokter); ?></td>
                    <td><?php echo e($d->nama_dokter); ?></td>
                    <td><?php echo e($d->spesialis); ?></td>
                    <td><?php echo e($d->nomor_hp); ?></td>
                    <td><?php echo e($d->twitter); ?></td>
                    <td><?php echo e($d->facebook); ?></td>
                    <td><?php echo e($d->instagram); ?></td>
                    <td><?php echo e($d->tiktok); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/dokter_laporan.blade.php ENDPATH**/ ?>