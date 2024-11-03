<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header"><?php echo e($judul); ?></div>
        <div class="card-body">
            <form action="/pasien/<?php echo e($pasien->id); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row mb-3">
                    <div class="col-md-6 form-group ">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control"
                            value="<?php echo e(old('nama_pasien') ?? $pasien->nama_pasien); ?>" autofocus />
                        <span class="text-danger"><?php echo e($errors->first('nama_pasien')); ?></span>
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" name="nomor_hp" class="form-control"
                            value="<?php echo e(old('nomor_hp') ?? $pasien->nomor_hp); ?>" autofocus />
                        <span class="text-danger"><?php echo e($errors->first('nomor_hp')); ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="jj">Jenis Kelamin</label>
                        <div class="form-check ml-3">
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input"
                                id="lk" <?php echo e($pasien->jenis_kelamin == 'Laki-laki' ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="lk">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input"
                                id="pr" <?php echo e($pasien->jenis_kelamin == 'Perempuan' ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="pr">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="ss">Status Menikah</label>
                        <div class="form-check ml-3">
                            <input type="radio" name="status" value="Sudah Menikah" class="form-check-input"
                                id="sm" <?php echo e($pasien->status == 'Sudah Menikah' ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="sm">
                                Sudah Menikah
                            </label>
                        </div>
                        <div class="form-check ml-3">
                            <input type="radio" name="status" value="Belum Menikah" class="form-check-input"
                                id="bm" <?php echo e($pasien->status == 'Belum Menikah' ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="bm">
                                Belum Menikah
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" rows="3" class="form-control"><?php echo e(old('alamat') ?? $pasien->alamat); ?></textarea>
                    <span class="text-danger"><?php echo e($errors->first('alamat')); ?></span>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/pasien" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/pasien_edit.blade.php ENDPATH**/ ?>