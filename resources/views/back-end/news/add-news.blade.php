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
                    <form action="/small/back-end/add-news/store" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tiêu Đề:</label>
                        <input type="text" class="form-control"  name="newsAddTitle" >
                    </div>

                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        <input type="text"  class="form-control" name="newsAddDescription" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Nội Dung</label>
                        <input type="text" class="form-control"  name="newsAddContent" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Danh Mục: </label>
                        <select name="newsCategoryAdd" id="newsCategoryAdd" class="form-control">
                            <option value="0">Chọn làm danh mục cha:</option>
                            {!! $html !!}
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tag:</label>
                        @foreach ($tags as $key => $tag)
                            <label style="display: inline-block; width: 100%;"><input  style="margin-right: 5px" name="tags[]" type="checkbox" value="{{$tag->id}}">{{$tag->name}}</label>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" class="form-control"  name="images" id="">
                    </div>

                    <button class="btn btn-primary">Thêm</button>
                </form>
                </div>
            </main>

        </div>
    </div>

@endsection