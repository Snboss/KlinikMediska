<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">EDIT DOKTER <?php echo e($dokter->nama_dokter); ?></div>
        <div class="card-body">
            <form action="/dokter/<?php echo e($dokter->id); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group mt-1">
                    <label for="nama_dokter">Nama Dokter</label>
                    <input class="form-control" type="text" name="nama_dokter"
                        value="<?php echo e($dokter->nama_dokter ?? old('nama_dokter')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('nama_dokter')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="foto">Foto Dokter</label>
                    <input class="form-control" type="file" name="foto" value="<?php echo e(old('foto')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('foto')); ?></span>
                </div>
                <?php if($dokter->foto): ?>
                    <img src="<?php echo e(Storage::url($dokter->foto)); ?>" width="100px" height="100px" alt="foto dokter">
                <?php endif; ?>
                <div class="form-group mt-3">
                    <label for="spesialis">Spesialis</label>
                    <select name="spesialis" class="form-control">
                        <option value="mata" <?php if($dokter->spesialis == 'mata'): echo 'selected'; endif; ?>> Spesialis Mata</option>
                        <option value="tht" <?php if($dokter->spesialis == 'tht'): echo 'selected'; endif; ?>> Spesialis THT</option>
                        <option value="jantung" <?php if($dokter->spesialis == 'jantung'): echo 'selected'; endif; ?>>
                            Spesialis Jantung
                        </option>
                        <option value="paru" <?php if($dokter->spesialis == 'paru'): echo 'selected'; endif; ?>> Spesialis Paru </option>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('spesialis')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="nomor_hp">Nomor HP</label>
                    <input class="form-control" type="text" name="nomor_hp"
                        value="<?php echo e($dokter->nomor_hp ?? old('nomor_hp')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('nomor_hp')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="twitter">Twitter</label>
                    <input class="form-control" type="text" name="twitter"
                        value="<?php echo e($dokter->twitter ?? old('twitter')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('twitter')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="facebook">Facebook</label>
                    <input class="form-control" type="text" name="facebook"
                        value="<?php echo e($dokter->facebook ?? old('facebook')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('facebook')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="instagram">Instagram</label>
                    <input class="form-control" type="text" name="instagram"
                        value="<?php echo e($dokter->instagram ?? old('instagram')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('instagram')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="tiktok">Tiktok</label>
                    <input class="form-control" type="text" name="tiktok"
                        value="<?php echo e($dokter->tiktok ?? old('tiktok')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('tiktok')); ?></span>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/dokter_edit.blade.php ENDPATH**/ ?>