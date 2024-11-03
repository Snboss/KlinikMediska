<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">TAMBAH OBAT</div>
        <div class="card-body">
            <form action="/obat" method="POST" enctype="multipart/form-data">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-1">
                            <label for="kode_obat">Kode Obat</label>
                            <input class="form-control" type="text" name="kode_obat" value="<?php echo e(old('kode_obat')); ?>"
                                autofocus>
                            <span class="text-danger"><?php echo e($errors->first('kode_obat')); ?></span>
                        </div>
                        <div class="form-group mt-1">
                            <label for="nama_obat">Nama Obat</label>
                            <input class="form-control" type="text" name="nama_obat" value="<?php echo e(old('nama_obat')); ?>"
                                autofocus>
                            <span class="text-danger"><?php echo e($errors->first('nama_obat')); ?></span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="satuan">Satuan</label>
                            <select name="satuan" class="form-control">
                                <option value="" <?php echo e(old('satuan') === null ? 'selected' : ''); ?> disabled hidden>
                                    Masukkan
                                    satuan</option>
                                <option value="botol" <?php echo e(old('satuan') === 'botol' ? 'selected' : ''); ?>>Botol</option>
                                <option value="tablet" <?php echo e(old('satuan') === 'tablet' ? 'selected' : ''); ?>>Tablet</option>
                                <option value="kapsul" <?php echo e(old('satuan') === 'kapsul' ? 'selected' : ''); ?>>Kapsul</option>
                                <option value="strip" <?php echo e(old('satuan') === 'strip' ? 'selected' : ''); ?>>Strip</option>
                                <option value="pcs" <?php echo e(old('satuan') === 'pcs' ? 'selected' : ''); ?>>Pcs</option>
                            </select>
                            <span class="text-danger"><?php echo e($errors->first('satuan')); ?></span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="tipe">Tipe</label>
                            <select name="tipe" class="form-control">
                                <option value="" <?php echo e(old('tipe') === null ? 'selected' : ''); ?> disabled hidden>
                                    Masukkan
                                    tipe</option>
                                <option value="botol" <?php echo e(old('tipe') === 'botol' ? 'selected' : ''); ?>>Generik</option>
                                <option value="tablet" <?php echo e(old('tipe') === 'tablet' ? 'selected' : ''); ?>>Paten</option>
                            </select>
                            <span class="text-danger"><?php echo e($errors->first('tipe')); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-1">
                            <label for="harga_beli">Harga Beli</label>
                            <input class="form-control" type="text" name="harga_beli" id="harga_beli"
                                value="<?php echo e(old('harga_beli')); ?>">
                            <span class="text-danger"><?php echo e($errors->first('harga_beli')); ?></span>
                        </div>
                        <div class="form-group mt-1">
                            <label for="harga_jual">Harga Jual</label>
                            <input class="form-control" type="text" name="harga_jual" id="harga_jual"
                                value="<?php echo e(old('harga_jual')); ?>">
                            <span class="text-danger"><?php echo e($errors->first('harga_jual')); ?></span>
                        </div>
                        <div class="form-group mt-1">
                            <label for="qty">QTY</label>
                            <input class="form-control" type="text" name="qty" value="<?php echo e(old('qty')); ?>"
                                autofocus>
                            <span class="text-danger"><?php echo e($errors->first('qty')); ?></span>
                        </div>
                        <div class="form-group mt-1">
                            <label for="tanggal_expired">Tanggal Expired</label>
                            <input id="tanggal_expired" class="form-control" type="date" name="tanggal_expired"
                                value="<?php echo e(date('Y-m-d')); ?>">
                            <span class="text-danger"><?php echo e($errors->first('tanggal_expired')); ?></span>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/obat_create.blade.php ENDPATH**/ ?>