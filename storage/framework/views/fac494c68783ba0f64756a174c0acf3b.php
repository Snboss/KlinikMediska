<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header"><?php echo e($judul); ?></div>
        <div class="card-body">
            <form action="/poli" method="POST">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <div class="row mt-2">
                    <div class="col-md-6 form-group ">
                        <label for="nama">Nama Poli</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo e(old('nama')); ?>" autofocus />
                        <span class="text-danger"><?php echo e($errors->first('nama')); ?></span>
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="biaya">Biaya Poli</label>
                        <input type="text" name="biaya" class="form-control" value="<?php echo e(old('biaya')); ?>" />
                        <span class="text-danger"><?php echo e($errors->first('biaya')); ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Poli</label>
                    <textarea name="deskripsi" rows="3" class="form-control"><?php echo e(old('deskripsi')); ?></textarea>
                    <span class="text-danger"><?php echo e($errors->first('deskripsi')); ?></span>
                </div>
                <div class="form-group mt-2">
                    <label for="dokter_id">Pilih Dokter</label>
                    <select name="dokter_id" class="form-control">
                        <?php $__currentLoopData = $list_dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>">
                                <?php echo e("{$item->nama_dokter} - Spesialis {$item->spesialis}"); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('dokter_id')); ?></span>
                </div>
                <div class="form-group mt-2">
                    <h4>Jadwal</h4>
                    <div id="jadwal-section">
                        <div class="jadwal-item mb-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="jadwal[0][hari]" class="form-control" placeholder="Hari" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="time" name="jadwal[0][jam_mulai]" class="form-control" placeholder="Jam Mulai" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="time" name="jadwal[0][jam_selesai]" class="form-control" placeholder="Jam Selesai" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="add-jadwal" class="btn btn-secondary mt-2">Tambah Jadwal</button>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/poli" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('add-jadwal').addEventListener('click', function() {
            let jadwalSection = document.getElementById('jadwal-section');
            let count = jadwalSection.getElementsByClassName('jadwal-item').length;
            let newItem = `
                <div class="jadwal-item mb-2">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="jadwal[${count}][hari]" class="form-control" placeholder="Hari" required>
                        </div>
                        <div class="col-md-4">
                            <input type="time" name="jadwal[${count}][jam_mulai]" class="form-control" placeholder="Jam Mulai" required>
                        </div>
                        <div class="col-md-4">
                            <input type="time" name="jadwal[${count}][jam_selesai]" class="form-control" placeholder="Jam Selesai" required>
                        </div>
                    </div>
                </div>
            `;
            jadwalSection.insertAdjacentHTML('beforeend', newItem);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/poli_create.blade.php ENDPATH**/ ?>