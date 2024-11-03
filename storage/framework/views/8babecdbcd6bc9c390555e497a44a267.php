<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Administrasi</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body style="background: white;">
    <div class="container-fluid">
        <div class="col-md-12">
            <h3 class="text-center">LAPORAN ADMINISTRASI</h3>
            <div class="text-center">Tanggal Laporan : <?php echo e(request('tanggal_awal')); ?> - <?php echo e(request('tanggal_akhir')); ?></div>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th width="30%">Data Pasien</th>
                            <th>Keluhan</th>
                            <th>Biaya</th>
                            <th>Biaya Tambahan</th>
                            <th>Total Biaya</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $adm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td>
                                    <dl class="row">
                                        <dt class="col-md-4">Nama Pasien</dt>
                                        <dd class="col-md-8">: <?php echo e($item->pasien->nama_pasien); ?></dd>

                                        <dt class="col-md-4">Nomor HP</dt>
                                        <dd class="col-md-8">: <?php echo e($item->pasien->nomor_hp); ?></dd>

                                        <dt class="col-md-4">Tujuan Poli</dt>
                                        <dd class="col-md-8">: <?php echo e($item->poli); ?></dd>

                                        <dt class="col-md-4">Dokter</dt>
                                        <dd class="col-md-8">: <?php echo e($item->dokter->nama_dokter); ?></dd>
                                    </dl>
                                </td>
                                <td>
                                    <div><strong>Keluhan</strong>: <?php echo e($item->keluhan); ?></div>
                                    <div><strong>Diagnosa:</strong> <?php echo e($item->diagnosis); ?></div>
                                </td>
                                <td>Rp. <?php echo e(number_format($item->biaya, 0, ',', '.')); ?></td>
                                <td>Rp. <?php echo e(number_format($item->biaya_tambahan, 0, ',', '.')); ?></td>
                                <td>Rp. <?php echo e(number_format($item->total_biaya, 0, ',', '.')); ?></td>
                                <td>
                                    <span class="badge badge-pill badge-<?php echo e($item->status == 'baru' ? 'primary' : 'success'); ?>"
                                          style="font-size: 100% !important;color:black">
                                        <?php echo e($item->status); ?>

                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/laporanadm_index.blade.php ENDPATH**/ ?>