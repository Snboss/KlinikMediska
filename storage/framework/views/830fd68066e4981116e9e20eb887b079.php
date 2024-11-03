<?php $__env->startSection('content'); ?>
    <style>
        dd {
            margin-bottom: 0;
        }

        dl {
            margin-bottom: 0;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <?php echo e($judul); ?>

        </div>
        <div class="card-body">
            <?php if(auth()->user()->role != 'dokter'): ?>
                <a href="<?php echo e(route('administrasi.create')); ?>" class="btn btn-primary mb-3">Tambah Data</a>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th width="38%">Data Pasien</th>
                            <th>Keluhan</th>

                            <th>Status</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $administrasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <div>
                                        <strong>Diagnosa:</strong>
                                        <?php echo e($item->diagnosis); ?>

                                    </div>
                                </td>

                                <td>
                                    <span
                                        class="badge badge-pill badge-<?php echo e($item->status == 'baru' ? 'primary' : 'success'); ?>"
                                        style="font-size: 100% !important;"><?php echo e($item->status); ?></span>
                                </td>
                                <td>
                                    <a href="/administrasi/<?php echo e($item->id); ?>/edit" class="btn btn-primary">
                                        Diagnosis
                                    </a>
                                    <?php if(auth()->user()->role == 'admin'): ?>
                                        <form action="<?php echo e(route('administrasi.destroy', $item->id)); ?>" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/administrasi_index.blade.php ENDPATH**/ ?>