<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header"> <?php echo e($judul); ?> </div>
        <div class="card-body">
            <a href="/poli/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="1%">ID</th>
                        <th>Nama Poli</th>
                        <th width="15%">Biaya Poli</th>
                        <th width="30%">Jadwal</th>
                        <th width="16%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td>
                                <div>Nama Poli: <b><?php echo e($item->nama); ?></b></div>
                                <div>Nama Dokter: <b><?php echo e($item->dokter->nama_dokter); ?></b></div>
                                <div>Deskripsi: <?php echo e($item->deskripsi); ?></div>
                            </td>
                            <td>Rp. <?php echo e(number_format($item->biaya, 0, ',', '.')); ?></td>
                            <td>
                                <?php $__currentLoopData = $item->jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div><?php echo e($jadwal->hari); ?>: <?php echo e($jadwal->jam_mulai); ?> - <?php echo e($jadwal->jam_selesai); ?></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <a href="/poli/<?php echo e($item->id); ?>/edit" class="btn btn-primary">
                                    Edit
                                </a>
                                <form action="/poli/<?php echo e($item->id); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($poli->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/poli_index.blade.php ENDPATH**/ ?>