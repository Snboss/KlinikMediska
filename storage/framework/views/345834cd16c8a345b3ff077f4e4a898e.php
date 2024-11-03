<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        PENDAFTARAN PASIEN | SILAHKAN MEMILIH JADWAL RESERVASI SESUAI DENGAN JADWAL HARI POLI YANG DISEDIAKAN
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('registrasipasien.store')); ?>" method="POST">
                            <?php echo method_field('POST'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <div class="col-md-6 form-group ">
                                    <label for="nama_pasien">Nama Pasien</label>
                                    <input type="text" name="nama_pasien" class="form-control"
                                        value="<?php echo e(old('nama_pasien')); ?>" autofocus />
                                    <span class="text-danger"><?php echo e($errors->first('nama_pasien')); ?></span>
                                </div>
                                <div class="col-md-6 form-group ">
                                    <label for="nomor_hp">Nomor HP</label>
                                    <input type="text" name="nomor_hp" class="form-control" value="<?php echo e(old('nomor_hp')); ?>"
                                        autofocus />
                                    <span class="text-danger"><?php echo e($errors->first('nomor_hp')); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="jj">Jenis Kelamin</label>
                                    <div class="form-check ml-3">
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                            class="form-check-input" id="lk"
                                            <?php echo e(old('jenis_kelamin') == 'Laki-laki' ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="lk">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan"
                                            class="form-check-input" id="pr"
                                            <?php echo e(old('jenis_kelamin') == 'Perempuan' ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="pr">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="ss">Status Menikah</label>
                                    <div class="form-check ml-3">
                                        <input type="radio" name="status" value="Sudah Menikah" class="form-check-input"
                                            id="sm" <?php echo e(old('status') == 'Sudah Menikah' ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="sm">
                                            Sudah Menikah
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input type="radio" name="status" value="Belum Menikah" class="form-check-input"
                                            id="bm" <?php echo e(old('status') == 'Belum Menikah' ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="bm">
                                            Belum Menikah
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                                <span class="text-danger"><?php echo e($errors->first('alamat')); ?></span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="keluhan">Keluhan Pasien</label>
                                <textarea name="keluhan" class="form-control" rows="3"><?php echo e(old('keluhan')); ?></textarea>
                                <span class="text-danger"><?php echo e($errors->first('keluhan')); ?></span>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label for="tanggal">Rencana Tanggal Berobat</label>
                                    <input id="tanggal" class="form-control" type="date" name="tanggal"
                                        value="<?php echo e(date('Y-m-d')); ?>">
                                    <span class="text-danger"><?php echo e($errors->first('tanggal')); ?></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="poli_id">Pilih Poli Tujuan</label>
                                    <select name="poli_id" id="poli_id" class="form-control">
                                        <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" <?php if(old('poli_id') == $item->id): echo 'selected'; endif; ?>>
                                                Poli <?php echo e($item->nama); ?> - Biaya
                                                <?php echo e(number_format($item->biaya, 0, ',', '.')); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <span class="text-danger"><?php echo e($errors->first('poli_id')); ?></span>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label for="jadwal">Jadwal Poli</label>
                                <ul class="list-group">
                                    <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="list-group-item">
                                            <strong>Poli <?php echo e($item->nama); ?></strong>
                                            <ul>
                                                <?php $__currentLoopData = $item->jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($jadwal->hari); ?>: <?php echo e($jadwal->jam_mulai); ?> - <?php echo e($jadwal->jam_selesai); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>

                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">DAFTAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.medilab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/registrasipasien_create.blade.php ENDPATH**/ ?>