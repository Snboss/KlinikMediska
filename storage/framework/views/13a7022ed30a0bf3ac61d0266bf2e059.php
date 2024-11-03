<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Tambah Administrasi
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('administrasi.store')); ?>" method="POST">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="<?php echo e(old('tanggal') ?? date('Y-m-d')); ?>">
                <span class="text-danger"><?php echo e($errors->first('tanggal')); ?></span>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="pasien_id">Pilih Pasien atau <a href="/pasien/create" target="blank">Buat Baru</a></label>
                    <select name="pasien_id" id="pasien_id" class="form-control">
                        <?php $__currentLoopData = $list_pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" <?php if(old('pasien_id') == $item->id): echo 'selected'; endif; ?>>
                                <?php echo e($item->kode_pasien); ?> - <?php echo e($item->nama_pasien); ?> - <?php echo e($item->jenis_kelamin); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('pasien_id')); ?></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="poli_id">Pilih Poli Tujuan</label>
                    <select name="poli_id" id="poli_id" class="form-control">
                        <?php $__currentLoopData = $list_poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" data-biaya="<?php echo e($item->biaya); ?>" <?php if(old('poli_id') == $item->id): echo 'selected'; endif; ?>>
                                Poli <?php echo e($item->nama); ?> - Biaya <?php echo e(number_format($item->biaya, 0, ',', '.')); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('poli_id')); ?></span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="obat_id">Pilih Obat</label>
                    <select name="obat_id" id="obat_id" class="form-control">
                        <?php $__currentLoopData = $list_obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" data-harga_jual="<?php echo e($item->harga_jual); ?>" <?php if(old('obat_id') == $item->id): echo 'selected'; endif; ?>>
                                Obat <?php echo e($item->nama_obat); ?> - Harga <?php echo e(number_format($item->harga_jual, 0, ',', '.')); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('poli_id')); ?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <textarea name="keluhan" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="biaya_tambahan">Biaya Tambahan</label>
                <input type="number" name="biaya_tambahan" id="biaya_tambahan" class="form-control" value="<?php echo e(old('biaya_tambahan', 0)); ?>" oninput="calculateTotal()">
                <span class="text-danger"><?php echo e($errors->first('biaya_tambahan')); ?></span>
            </div>
            <div class="form-group">
                <label for="total_biaya">Total Biaya</label>
                <input type="text" name="total_biaya" id="total_biaya" class="form-control" value="<?php echo e(old('total_biaya', 0)); ?>" readonly>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const poliSelect = document.getElementById('poli_id');
                const obatSelect = document.getElementById('obat_id');
                const biayaTambahanInput = document.getElementById('biaya_tambahan');
                const totalBiayaInput = document.getElementById('total_biaya');

                function calculateTotal() {
                    const selectedPoli = poliSelect.options[poliSelect.selectedIndex];
                    const biayaPoli = parseFloat(selectedPoli.getAttribute('data-biaya')) || 0;

                    const selectedObat = obatSelect.options[obatSelect.selectedIndex];
                    const hargaObat = parseFloat(selectedObat.getAttribute('data-harga_jual')) || 0;

                    const biayaTambahan = parseFloat(biayaTambahanInput.value) || 0;
                    const totalBiaya = biayaPoli + hargaObat + biayaTambahan;

                    totalBiayaInput.value = totalBiaya.toFixed(2);
                }

                poliSelect.addEventListener('change', calculateTotal);
                obatSelect.addEventListener('change', calculateTotal);
                biayaTambahanInput.addEventListener('input', calculateTotal);

                // Initial calculation on page load if a poli is selected
                calculateTotal();
            });


        </script>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/administrasi_create.blade.php ENDPATH**/ ?>