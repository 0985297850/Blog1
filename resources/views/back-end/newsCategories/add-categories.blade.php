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
                    <form action="/small/back-end/add-categories" method="POST" enctype="multipart/form-data">
                         <div class="modal-body">
                            <div class="form-group">
                                <label for="">Name Categories :</label>
                                <input type="text" name="nameCategories" class="form-control">
                            </div>
                            <div class="form-group">
                                <select name="newsCategories" id="">
                                    <option value="0"><b>Chọn Là Danh Mục Cha !</b></option>
                                    {!! $html !!}
                                </select>
                            </div>
                         </div>

                    <button class="btn btn-primary">Thêm</button>

                </form>
                </div>
            </main>

        </div>
    </div>

@endsection