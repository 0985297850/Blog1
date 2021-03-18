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

                    <form action="/small/back-end/news/update/{{$news->id}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="">Tiêu Đề:</label>
                                <input type="text" value="{{$news->title}}"  name="newsUpTitle" class="form-control"  id="newsUpTitle">
                            </div>

                            <div class="form-group">
                                <label for="">Mô Tả</label>
                                <input type="text" value="{{$news->description}}" name="newsUpDescription" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Nội Dung</label>
                                <input type="text" value="{{$news->content}}" name="newsUpContent" class="form-control" >
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
                                    <label style="display: inline-block; width: 100%;">
                                        <input style="margin-right: 5px" name="tags[]"
                                               @foreach ($newsTags as $key => $newsTag)
                                               @if ($news->id == $newsTag->news_id)
                                               @if($tag->id == $newsTag->tag_id)
                                               checked
                                               @endif
                                               @endif
                                               @endforeach
                                               type="checkbox" value="{{$tag->id}}">{{$tag->name}}
                                    </label>
                                @endforeach
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

@endsection