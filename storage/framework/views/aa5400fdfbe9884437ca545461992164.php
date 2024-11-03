<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">PROFIL SAYA - <?php echo e(strtoupper(auth()->user()->name)); ?></div>
        <div class="card-body">
            <form action="/profil" method="POST" enctype="multipart/form-data">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group mt-1">
                    <label for="name">Nama</label>
                    <input class="form-control" type="text" name="name" value="<?php echo e($user->name); ?>" autofocus>
                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" value="<?php echo e($user->email); ?>">
                    <span class="text-danger"><?php echo e($errors->first('username')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="text" name="password" value="<?php echo e(old('password')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/profil_create.blade.php ENDPATH**/ ?>