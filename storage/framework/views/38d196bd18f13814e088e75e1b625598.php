<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header"><?php echo e($judul); ?></div>
        <div class="card-body">
            <a href="/dokter/create" class="btn btn-primary mb-2">Tambah Dokter</a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Total ADM</th>
                        <th width="22%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->kode_dokter); ?></td>
                            <td>
                                <div class="row">
                                    <?php if($item->foto != ''): ?>
                                        <div class="col-md-4">
                                            <a href="<?php echo e(Storage::url($item->foto)); ?>" target="blank">
                                                <img src="<?php echo e(Storage::url($item->foto)); ?>" alt="Foto" width="100px"
                                                    height="100px" class="img img-thumbnail align-text-top">
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-8">
                                        <div>Nama: <?php echo e($item->nama_dokter); ?></div>
                                        <div>Spesialis: <?php echo e($item->spesialis); ?></div>
                                        <div>Nomor HP: <?php echo e($item->nomor_hp); ?></div>
                                        <div>Username: <strong><?php echo e($item->nomor_hp); ?>@dokter.com</strong></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php echo e($item->administrasi->count()); ?>

                            </td>
                            <td>
                                <a href="/dokter/<?php echo e($item->id); ?>" class="btn btn-info">
                                    Detail
                                </a>
                                <a href="/dokter/<?php echo e($item->id); ?>/edit" class="btn btn-primary">
                                    Edit
                                </a>
                                <form action="/dokter/<?php echo e($item->id); ?>" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/dokter_index.blade.php ENDPATH**/ ?>