<body class="sb-nav-fixed">

<?php $__env->startSection('title'); ?><?php echo e('Add News'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('back-end.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Thêm tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm tin tức</li>
                    </ol>

                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/small/back-end/add-categories" method="POST" enctype="multipart/form-data">
                         <div class="modal-body">
                            <div class="form-group">
                                <label for="">Name Categories :</label>
                                <input type="text" name="nameCategories" class="form-control">
                            </div>
                            <div class="form-group">
                                <select name="newsCategories" id="">
                                    <option value="0"><b>Chọn Là Danh Mục Cha !</b></option>
                                    <?php echo $html; ?>

                                </select>
                            </div>
                         </div>

                    <button class="btn btn-primary">Thêm</button>

                </form>
                </div>
            </main>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views/back-end/newsCategories/add-categories.blade.php ENDPATH**/ ?>