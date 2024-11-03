<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header"><?php echo e($judul); ?></div>
        <div class="card-body">
            <a href="/obat/create" class="btn btn-primary mb-2">Tambah Obat</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Obat</th>
                            <th>Satuan</th>
                            <th>Qty</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Tanggal Expired</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->kode_obat); ?></td>
                                <td><?php echo e($item->nama_obat); ?></td>
                                <td><?php echo e($item->satuan); ?></td>
                                <td>
                                    <?php echo e($item->qty); ?>

                                    <?php if($item->qty <= 0): ?>
                                        <span class="badge bg-danger text-light">Habis</span>
                                    <?php else: ?>
                                        <span class="badge bg-primary text-light">Tersedia</span>
                                    <?php endif; ?>
                                    </span>
                                </td>
                                <td><?php echo e($item->harga_beli); ?></td>
                                <td><?php echo e($item->harga_jual); ?></td>
                                <td><?php echo e($item->tanggal_expired ? \Carbon\Carbon::parse($item->tanggal_expired)->format('d-m-Y') : ''); ?>

                                </td>
                                <td>

                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/obat_index.blade.php ENDPATH**/ ?>