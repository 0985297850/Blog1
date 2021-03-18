<body class="sb-nav-fixed">

<?php $__env->startSection('title'); ?><?php echo e('Products'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('back-end.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Tags Tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý Tags Tin Tức</li>
                    </ol>


                        <a href="/small/back-end/add-tags">
                            <button data-toggle="modal" data-target="#newsAddModal"
                                    class="btn btn-primary addBtn">Thêm Tags Tin Tức
                            </button>
                        </a>


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng tin tức
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Hành Động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $news_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news_tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($news_tag->id); ?></td>
                                            <td><?php echo e($news_tag->name); ?> </td>
                                            <td>
                                                <a class="btn btn-primary" href="/small/back-end/edit-tags/<?php echo e($news_tag->id); ?>" >Sửa</a>
                                                <a class="btn btn-primary" style="background: red;border: none" href="/small/back-end/delete-tags/<?php echo e($news_tag->id); ?>">Xóa</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views//back-end/tags/tags.blade.php ENDPATH**/ ?>