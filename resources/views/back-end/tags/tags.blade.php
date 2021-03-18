<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Products'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('back-end.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Tags Tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý Tags Tin Tức</li>
                    </ol>


                        <a href="/small/back-end/add-tags">
                            <button data-toggle="modal" data-target="#newsAddModal"
                                    class="btn btn-primary addBtn">Thêm Tags Tin Tức
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
                                        <th>Name</th>
                                        <th>Hành Động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news_tags as $key => $news_tag)
                                        <tr>
                                            <td>{{$news_tag->id}}</td>
                                            <td>{{$news_tag->name}} </td>
                                            <td>
                                                <a class="btn btn-primary" href="/small/back-end/edit-tags/{{$news_tag->id}}" >Sửa</a>
                                                <a class="btn btn-primary" style="background: red;border: none" href="/small/back-end/delete-tags/{{$news_tag->id}}">Xóa</a>
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