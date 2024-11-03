<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <?php echo e($judul); ?>

        </div>
        <div class="card-body">
            <a href="/pasien/create" class="btn btn-primary mb-2">Tambah Pasien</a>
            <div class="row mb-2">
                <div class="col">
                    <form method="GET">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Cari data pasien"
                                value="<?php echo e(request('q')); ?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Nomor HP</th>
                        <th>Tanggal Buat</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->kode_pasien); ?></td>
                            <td><?php echo e($item->nama_pasien); ?></td>
                            <td><?php echo e($item->nomor_hp); ?></td>
                            <td><?php echo e($item->created_at); ?></td>
                            <td>
                                <a href="/pasien/<?php echo e($item->id); ?>/edit" class="btn btn-primary">
                                    Edit
                                </a>
                                <form action="/pasien/<?php echo e($item->id); ?>" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/pasien_index.blade.php ENDPATH**/ ?>