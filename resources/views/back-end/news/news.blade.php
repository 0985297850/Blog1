<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Products'}}@endsection
@section('content')
<div id="layoutSidenav">
    @include('back-end.layouts.sideNav')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Quản lý tin tức</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Quản lý tin tức</li>
                </ol>

                <a href="/small/back-end/add-news">
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
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Content</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Ảnh</th>
                                    <th>Hoạt Động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $key => $news)
                                <tr>
                                    <td>{{$news->id}}</td>
                                    <td>{{$news->title}} </td>
                                    <td>{{$news->description}}</td>
                                    <td>{{$news->content}}</td>
                                    <td>
                                        @foreach ($categories as $category)
                                            @if ($news->category_id == $category->id)
                                                {{$category->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>@foreach ($newsTags as $newsTag)
                                            @if ($news->id == $newsTag->news_id)
                                                @foreach ($tags as $tag)
                                                    @if($tag->id == $newsTag->tag_id)
                                                        {{$tag->name . ','}}
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach</td>
                                    <td>{{$news->images}}</td>
                                    <td>

                                        <a class="btn btn-primary" href="/small/back-end/news/edit-news/{{$news->id}}" >Sửa</a>

                                        <a class="btn btn-primary" style="background: red;border: none" href="/small/back-end/news/delete-news/{{$news->id}}">Xóa</a>
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