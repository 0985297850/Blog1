
<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Users</div>
        <div class="card-body">Body
        <div class="table table-responsive table-bordered table-hover">
            <table>
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->firstname); ?></td>
                        <td><?php echo e($user->lastname); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>
        </div>
        </div>
        <div class="card-footer">
            <div class="button btn btn-sucess"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views/users/index.blade.php ENDPATH**/ ?>