<body class="sb-nav-fixed">

<?php $__env->startSection('title'); ?><?php echo e('Products'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="layoutSidenav">
    <?php echo $__env->make('back-end.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Quản lý tin tức</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Quản lý tin tức</li>
                </ol>

                <a href="/small/back-end/add-news">
                    <button data-toggle="modal" data-target="#newsAddModal"
                            class="btn btn-primary addBtn">Thêm tin tức
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Content</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Ảnh</th>
                                    <th>Hoạt Động</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($news->id); ?></td>
                                    <td><?php echo e($news->title); ?> </td>
                                    <td><?php echo e($news->description); ?></td>
                                    <td><?php echo e($news->content); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($news->category_id == $category->id): ?>
                                                <?php echo e($category->name); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php $__currentLoopData = $newsTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($news->id == $newsTag->news_id): ?>
                                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($tag->id == $newsTag->tag_id): ?>
                                                        <?php echo e($tag->name . ','); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                    <td><?php echo e($news->images); ?></td>
                                    <td>

                                        <a class="btn btn-primary" href="/small/back-end/news/edit-news/<?php echo e($news->id); ?>" >Sửa</a>

                                        <a class="btn btn-primary" style="background: red;border: none" href="/small/back-end/news/delete-news/<?php echo e($news->id); ?>">Xóa</a>
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
<?php echo $__env->make('back-end.layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views/back-end/news/news.blade.php ENDPATH**/ ?>