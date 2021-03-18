<body class="sb-nav-fixed">

<?php $__env->startSection('title'); ?><?php echo e('Add News'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('back-end.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sửa Thông Tin Người Dùng</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa Thông Tin Người Dùng</li>
                    </ol>

                </div>

                <div style="width: 40%; margin: auto">

                    <form action="/small/back-end/update-users/<?php echo e($users->id); ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" value="<?php echo e($users->email); ?>"  name="email" class="form-control"  id="">
                            </div>

                            <div class="form-group">
                                <label for="">lastname:</label>
                                <input type="text" value="<?php echo e($users->lastname); ?>"  name="lastname" class="form-control"  id="">
                            </div>

                            <div class="form-group">
                                <label for="">firstname:</label>
                                <input type="text" value="<?php echo e($users->firstname); ?>"  name="firstname" class="form-control"  id="">
                            </div>

                            <button class="btn btn-primary">Sửa</button>
                        </div>
                    </form>

                </div>
            </main>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views//back-end/user/edit-users.blade.php ENDPATH**/ ?>