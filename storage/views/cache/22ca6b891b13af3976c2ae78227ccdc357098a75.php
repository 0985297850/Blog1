<body class="sb-nav-fixed">

<?php $__env->startSection('title'); ?><?php echo e('Add News'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="layoutSidenav">
        <?php echo $__env->make('back-end.layouts.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sửa Tin Tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa Tin Tức</li>
                    </ol>

                </div>

                <div style="width: 40%; margin: auto">

                    <form action="/small/back-end/news/update/<?php echo e($news->id); ?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Tiêu Đề:</label>
                                <input type="text" value="<?php echo e($news->title); ?>"  name="newsUpTitle" class="form-control"  id="newsUpTitle">
                            </div>

                            <div class="form-group">
                                <label for="">Mô Tả</label>
                                <input type="text" value="<?php echo e($news->description); ?>" name="newsUpDescription" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Nội Dung</label>
                                <input type="text" value="<?php echo e($news->content); ?>" name="newsUpContent" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Danh Mục: </label>
                                <select name="newsCategoryAdd" id="newsCategoryAdd" class="form-control">
                                    <option value="0">Chọn làm danh mục cha:</option>
                                    <?php echo $html; ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tag:</label>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label style="display: inline-block; width: 100%;">
                                        <input style="margin-right: 5px" name="tags[]"
                                               <?php $__currentLoopData = $newsTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $newsTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <?php if($news->id == $newsTag->news_id): ?>
                                               <?php if($tag->id == $newsTag->tag_id): ?>
                                               checked
                                               <?php endif; ?>
                                               <?php endif; ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               type="checkbox" value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?>

                                    </label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="form-group">
                                <label for="">Hình Ảnh</label>
                                <input type="file" name="images" class="form-control" >
                            </div>

                            <button class="btn btn-primary">Sửa</button>
                        </div>
                    </form>

                </div>
            </main>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views//back-end/news/edit-news.blade.php ENDPATH**/ ?>