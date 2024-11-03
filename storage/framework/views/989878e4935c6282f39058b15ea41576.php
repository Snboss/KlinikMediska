<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
        <div class="card-body">
            <div>
                <a href="/administrasi/create" class="btn btn-primary m-1">Buat Administrasi</a>
                <a href="/pasien/create" class="btn btn-primary m-1">Tambah Pasien</a>
                <a href="/dokter/create" class="btn btn-primary m-1">Tambah Dokter</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/home.blade.php ENDPATH**/ ?>