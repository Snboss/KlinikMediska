<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Buat User</div>
        <div class="card-body">
            <form action="/user" method="POST">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="name">Nama</label>
                        <input class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>" autofocus>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email">Email / Username</label>
                        <input class="form-control" type="text" name="email" value="<?php echo e(old('email')); ?>">
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    </div>
                </div>
                <div class="form-group mt-1">
                    <label for="role">Role</label>
                    <select name="role" class="form-control">
                        <option value="operator" <?php if(old('role') == 'operator'): echo 'selected'; endif; ?>> Operator</option>
                        <option value="admin" <?php if(old('role') == 'admin'): echo 'selected'; endif; ?>> Admin </option>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('role')); ?></span>
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" value="<?php echo e(old('password')); ?>">
                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sbadmin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tegar\Documents\2024\rian\klinik-app\resources\views/user_create.blade.php ENDPATH**/ ?>