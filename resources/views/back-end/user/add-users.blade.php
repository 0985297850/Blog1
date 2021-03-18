<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Add News'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('back-end.layouts.sideNav')

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
                    <form action="/small/back-end/add-users/store" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Email Người Dùng</label>
                                <input type="text" class="form-control"  name="emailAdd" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Tên Người Dùng</label>
                                <input type="text" class="form-control"  name="firstnameAdd" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Họ Người Dùng</label>
                                <input type="text" class="form-control"  name="lastnameAdd" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control"  name="passwordAdd" id="">
                            </div>
                        </div>

                        <button class="btn btn-primary">Thêm</button>

                    </form>
                </div>
            </main>

        </div>
    </div>

@endsection