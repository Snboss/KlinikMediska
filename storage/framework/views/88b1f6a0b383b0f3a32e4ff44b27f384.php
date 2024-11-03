<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Nama Dokter: <?php echo e(strtoupper($dokter->nama_dokter)); ?></div>
        <div class="card-body">
            <h5>Data Dokter : <?php echo e(strtoupper($dokter->nama_dokter)); ?></h5>
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo e(Storage::url($dokter->foto)); ?>" target="blank">
                        <img src="<?php echo e(Storage::url($dokter->foto)); ?>" alt="Foto" width="200px"
                            class="img img-thumbnail align-text-top">
                    </a>
                </div>
                <div class="col-md-9">
                    <dl class="row">
                        <dt class="col-sm-2">Kode</dt>
                        <dd class="col-sm-10">: <?php echo e($dokter->kode_dokter); ?></dd>
                        <dt class="col-sm-2">Nama</dt>
                        <dd class="col-sm-10">: <?php echo e($dokter->nama_dokter); ?></dd>
                        <dt class="col-sm-2">Nomor HP</dt>
                        <dd class="col-sm-10">: <?php echo e($dokter->nomor_hp); ?></dd>
                        <dt class="col-sm-2">Spesialis</dt>
                        <dd class="col-sm-10">: <?php echo e($dokter->spesialis); ?></dd>
                        <dt class="col-sm-2">Username</dt>
                        <dd class="col-sm-10">: <?php echo e($dokter->user->email); ?></dd>
                    </dl>
                </div>
            </div>
            <a href="/dokter" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/dokter_show.blade.php ENDPATH**/ ?>