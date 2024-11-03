<?php $__env->startSection('content'); ?>
    <style>
        dl {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        dd {
            margin-bottom: 0;
            padding-bottom: 0;
        }
    </style>
    <div class="card">
        <div class="card-header">
            Edit Administrasi <?php echo e($administrasi->kode_administrasi); ?>

        </div>
        <div class="card-body">
            <form action="<?php echo e(route('administrasi.update', $administrasi->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>

                <dl class="row">
                    <dt class="col-sm-3">Kode Administrasi</dt>
                    <dd class="col-sm-9">: <?php echo e($administrasi->kode_administrasi); ?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Tanggal Berobat</dt>
                    <dd class="col-sm-9">: <?php echo e($administrasi->tanggal); ?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Nama Pasien</dt>
                    <dd class="col-sm-9">: <?php echo e($administrasi->pasien->nama_pasien); ?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Poli Kunjungan</dt>
                    <dd class="col-sm-9">: <?php echo e($administrasi->poli); ?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Dokter</dt>
                    <dd class="col-sm-9">: <?php echo e($administrasi->dokter->nama_dokter); ?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Biaya</dt>
                    <dd class="col-sm-9">: Rp. <?php echo e(number_format($administrasi->biaya, 0, ',', '.')); ?></dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Biaya Tambahan</dt>
                    <dd class="col-sm-9">
                        <input type="number" name="biaya_tambahan" id="biaya_tambahan" class="form-control" value="<?php echo e(old('biaya_tambahan', $administrasi->biaya_tambahan)); ?>" oninput="calculateTotal()">
                        <span class="text-danger"><?php echo e($errors->first('biaya_tambahan')); ?></span>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Total Biaya</dt>
                    <dd class="col-sm-9">
                        <input type="text" name="total_biaya" id="total_biaya" class="form-control" value="<?php echo e(old('total_biaya', $administrasi->total_biaya)); ?>" readonly>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Keluhan</dt>
                    <dd class="col-sm-9">: <?php echo e($administrasi->keluhan); ?></dd>
                </dl>
                <h5 class="mt-3">Hasil Diagnosa Dokter</h5>
                <div class="form-group">
                    <textarea name="diagnosis" rows="3" class="form-control" autofocus><?php echo e($administrasi->diagnosis); ?></textarea>
                    <span class="text-danger"><?php echo e($errors->first('diagnosis')); ?></span>
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const biayaTambahanInput = document.getElementById('biaya_tambahan');
        const totalBiayaInput = document.getElementById('total_biaya');
        const baseBiaya = <?php echo e($administrasi->biaya); ?>;

        function calculateTotal() {
            const biayaTambahan = parseFloat(biayaTambahanInput.value) || 0;
            const totalBiaya = baseBiaya + biayaTambahan;

            totalBiayaInput.value = totalBiaya.toFixed(2);
        }

        biayaTambahanInput.addEventListener('input', calculateTotal);

        // Initial calculation on page load
        calculateTotal();
    });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/administrasi_edit.blade.php ENDPATH**/ ?>