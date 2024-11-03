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
            LAPORAN DATA ADMINISTRASI PER PERIODE
        </div>
        <div class="card-body">
            <form action="/laporan/administrasi" method="GET" target="_blank">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tanggal_awal">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal"
                            value="<?php echo e(now()->subMonth(1)->format('Y-m-d')); ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tanggal_akhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
                            value="<?php echo e(now()->format('Y-m-d')); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Generate Laporan</button>
            </form>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/laporanadm_form.blade.php ENDPATH**/ ?>