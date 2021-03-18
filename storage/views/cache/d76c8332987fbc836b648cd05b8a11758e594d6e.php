<body class="sb-nav-fixed">

<?php $__env->startSection('title'); ?><?php echo e('Products'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Người dùng
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="manage-user.php">Quản lý người dùng</a>
                        </nav>

                    </div>
                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Sản phẩm
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="manage-products.php">Quản lý sản phẩm</a>
                        </nav>

                    </div>

                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="manage-product_categories.php">Quản lý danh mục sản phẩm</a>
                        </nav>
                    </div>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="manage-product_tags.php">Quản lý Tag sản phẩm</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Tin tức
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">

                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="news">Quản lý tin tức</a>
                        </nav>

                    </div>


                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="manage-news_categories.php">Quản lý danh mục tin tức</a>
                        </nav>
                    </div>

                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="manage-news_tags.php">Quản lý Tag tin tức</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="manage-privilege.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"> </i> quyền</div>
                    </a>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Biểu đồ
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Xin Chào :

                </div>

            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Quản lý tin tức</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Quản lý tin tức</li>
                </ol>

                <a href="add-news">
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
                                    <th style="display: none">ID</th>
                                    <th>Ảnh tin</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô tả</th>
                                    <th>Nội dung</th>
                                    <th>Danh mục</th>
                                    <th>Tags</th>
                                    <th>Ngày viết</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td style="display: none"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

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
<?php echo $__env->make('back-end.layouts.master-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views/back-end/main-view/news.blade.php ENDPATH**/ ?>