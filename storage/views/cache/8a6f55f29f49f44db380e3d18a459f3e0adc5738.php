<body class="sb-nav-fixed">

<?php $__env->startSection('title'); ?><?php echo e('Add News'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('back-end.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sửa Phân Quyền</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa Phân Quyền</li>
                    </ol>

                </div>

                <div style="width: 40%; margin: auto">

                    <form action="/small/back-end/update-privilege/<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($user->id); ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                            <?php $__currentLoopData = $privilegeGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="group-name">
                                    <h3 class="group-name_title"><?php echo e($group->name); ?></h3>
                                    <ul>
                                        <?php $__currentLoopData = $privileges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $privilege): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($privilege['roles_id'] == $group['id']): ?>
                                                <li>
                                                    <input
                                                            <?php
                                                            $checkboxsList = [];
                                                            ?>
                                                            <?php $__currentLoopData = $checkboxs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checkbox): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <?php $checkboxsList[] = $checkbox->privilege_id; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            <?php if(in_array($privilege->id, $checkboxsList)): ?>
                                                                    checked
                                                            <?php endif; ?>
                                                            type="checkbox" value="<?php echo e($privilege->id); ?>" id="privilege_<?php echo e($privilege->id); ?>" name="privileges[]">
                                                    <label for="privilege_<?php echo e($privilege->id); ?>"> <?php echo e($privilege->name); ?> </label>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <button class="btn btn-primary">Sửa</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('back-end.layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views//back-end/privilege/edit-privilege.blade.php ENDPATH**/ ?>