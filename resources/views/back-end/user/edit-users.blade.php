<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Add News'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('back-end.layouts.sideNav')
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

                    <form action="/small/back-end/update-users/{{$users->id}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" value="{{$users->email}}"  name="email" class="form-control"  id="">
                            </div>

                            <div class="form-group">
                                <label for="">lastname:</label>
                                <input type="text" value="{{$users->lastname}}"  name="lastname" class="form-control"  id="">
                            </div>

                            <div class="form-group">
                                <label for="">firstname:</label>
                                <input type="text" value="{{$users->firstname}}"  name="firstname" class="form-control"  id="">
                            </div>

                            <button class="btn btn-primary">Sửa</button>
                        </div>
                    </form>

                </div>
            </main>
        </div>
    </div>



@endsection