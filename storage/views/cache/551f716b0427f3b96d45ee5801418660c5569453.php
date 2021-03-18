

<?php $__env->startSection('title'); ?><?php echo e('Users'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        if (isset($_SESSION['user'])) {
            header('Location:/small/back-end/dashboard');
        }
    ?>
    <body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Tạo tài khoản</h3>
                                </div>
    <div class="card-body">
        <form action="/small/back-end/registerCheck" method="POST">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Tên</label>
                        <input value="" name="firstname" class="form-control py-4" id="inputFirstName" type="text" placeholder="Nhập tên"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Họ</label>
                        <input value="" name="lastname" class="form-control py-4" id="inputLastName" type="text" placeholder="Nhập họ"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input value="" name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Nhập Email"/>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Mật khẩu</label>
                        <input value="" name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Nhập mật khẩu"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputConfirmPassword">Xác nhận mật khẩu</label>
                        <input name="confirm" class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Xác nhận mật khẩu"/>
                    </div>
                </div>
            </div>
            <div class="form-group mt-4 mb-0">
                <button name="" class="btn btn-primary btn-block">Tạo tài khoản</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center">
        <div class="small"><a href="login.php">Đã có tài khoản? Đăng nhập ngay!</a></div>
    </div>



    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Bản quyền &copy; Website của bạn 2020</div>
                    <div>
                        <a href="#">Chính sách Bảo mật</a>
                        &middot;
                        <a href="#">Điều khoản & Điều kiện</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back-end.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\small\resources\views/back-end/auth/register.blade.php ENDPATH**/ ?>