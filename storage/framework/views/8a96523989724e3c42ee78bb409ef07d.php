<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">TAMBAH DOKTER</div>
        <div class="card-body">
            <form action="/dokter" method="POST" enctype="multipart/form-data">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group mt-1">
                    <label for="nama_dokter">Nama Dokter</label>
                    <input class="form-control" type="text" name="nama_dokter" value="<?php echo e(old('nama_dokter')); ?>" autofocus>
                    <span class="text-danger"><?php echo e($errors->first('nama_dokter')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="foto">Foto Dokter</label>
                    <input class="form-control" type="file" name="foto" value="<?php echo e(old('foto')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('foto')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="spesialis">Spesialis</label>
                    <select name="spesialis" class="form-control">
                        <option value="mata" <?php if(old('spesialis') == 'mata'): echo 'selected'; endif; ?>> Spesialis Mata</option>
                        <option value="tht" <?php if(old('spesialis') == 'tht'): echo 'selected'; endif; ?>> Spesialis THT</option>
                        <option value="jantung" <?php if(old('spesialis') == 'jantung'): echo 'selected'; endif; ?>> Spesialis Jantung</option>
                        <option value="paru" <?php if(old('spesialis') == 'paru'): echo 'selected'; endif; ?>> Spesialis Paru</option>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('spesialis')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="nomor_hp">Nomor HP</label>
                    <input class="form-control" type="text" name="nomor_hp" value="<?php echo e(old('nomor_hp')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('nomor_hp')); ?></span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="twitter">Akun Twitter</label>
                            <input class="form-control" type="text" name="twitter"
                                value="<?php echo e(old('twitter') !== null ? old('twitter') : '#'); ?>">
                            <span class="text-danger"><?php echo e($errors->first('twitter')); ?></span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="facebook">Akun Facebook</label>
                            <input class="form-control" type="text" name="facebook"
                                value="<?php echo e(old('facebook') !== null ? old('facebook') : '#'); ?>">
                            <span class="text-danger"><?php echo e($errors->first('facebook')); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="instagram">Akun Instagram</label>
                            <input class="form-control" type="text" name="instagram"
                                value="<?php echo e(old('instagram') !== null ? old('instagram') : '#'); ?>">
                            <span class="text-danger"><?php echo e($errors->first('instagram')); ?></span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="tiktok">Akun Tiktok</label>
                            <input class="form-control" type="text" name="tiktok"
                                value="<?php echo e(old('tiktok') !== null ? old('tiktok') : '#'); ?>">
                            <span class="text-danger"><?php echo e($errors->first('tiktok')); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="text" name="password" value="<?php echo e(old('password')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/dokter_create.blade.php ENDPATH**/ ?>