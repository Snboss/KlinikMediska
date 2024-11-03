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
            <?php $__currentLoopData = $obats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($d->kode_obat); ?></td>
                    <td><?php echo e($d->nama_obat); ?></td>
                    <td><?php echo e($d->satuan); ?>  dengan type <?php echo e($d->tipe); ?></td>
                    <td><?php echo e($d->harga_beli); ?></td>
                    <td><?php echo e($d->harga_jual); ?></td>
                    <td><?php echo e($d->qty); ?></td>
                    <td><?php echo e($d->tanggal_expired); ?></td>

                    <td><?php echo e($d->status); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/obat_laporan.blade.php ENDPATH**/ ?>