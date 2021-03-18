<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Add News'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('back-end.layouts.sideNav')
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

                    <form action="/small/back-end/update-categories/{{$news_categories->id}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Name Categories:</label>
                                <input type="text" value="{{$news_categories->name}}" name="nameUpCategories" class="form-control"  id="">
                            </div>



                            <button class="btn btn-primary">Sửa</button>
                        </div>
                    </form>

                </div>
            </main>
        </div>
    </div>

@endsection