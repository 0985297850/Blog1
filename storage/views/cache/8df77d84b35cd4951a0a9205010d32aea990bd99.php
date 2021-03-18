<?php
    if (!isset($_SESSION['user'])) {
        header('Location:/small/public/login');
    }
?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="dashboard.php">
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Tìm kiếm..." aria-label="Search"
                   aria-describedby="basic-addon2"/>
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><img style="border-radius: 50%" src="" alt="" width="30" height="30"></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="userProfile.php">Thông tin cá nhân</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/small">Đăng xuất</a>
            </div>
        </li>
    </ul>
</nav>
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
                        <a class="nav-link" href="/small/public/news">Quản lý tin tức</a>
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
</div><?php /**PATH C:\xampp\htdocs\small\resources\views/back-end/layouts/sideNav.blade.php ENDPATH**/ ?>