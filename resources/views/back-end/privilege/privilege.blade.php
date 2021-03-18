<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Products'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('back-end.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản Lý Phân Quyền</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản Lý Phân Quyền</li>
                    </ol>

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
                                        <th>Email</th>
                                        <th>Họ</th>
                                        <th>Tên</th>
                                        <th>Role</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->email}} </td>
                                            <td>{{$user->firstname}}</td>
                                            <td>{{$user->lastname}}</td>
                                            <td>
                                                    <a href="/small/back-end/edit-privilege/{{$user->id}}">Phân Quyền</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

@endsection