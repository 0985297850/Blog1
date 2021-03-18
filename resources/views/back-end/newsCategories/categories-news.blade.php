<h1>
    Hello
</h1><body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Products'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('back-end.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Categories Tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý Categories Tin Tức</li>
                    </ol>

                    <a href="/small/back-end/add-categories">
                        <button data-toggle="modal" data-target="#newsAddModal"
                                class="btn btn-primary addBtn">Thêm Categories Tin Tức
                        </button>
                    </a>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng Categories
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Parent</th>
                                        <th>Hành Động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news_categories as $key => $news_categorie)
                                        <tr>
                                            <td>{{$news_categorie->id}}</td>
                                            <td>{{$news_categorie->name}} </td>
                                            <td>{{$news_categorie->parent_id}}</td>
                                            <td>
                                                <a class="btn btn-primary" href="/small/back-end/edit-categories/{{$news_categorie->id}}" >Sửa</a>
                                                <a class="btn btn-primary" style="background: red;border: none" href="/small/back-end/delete-categories/{{$news_categorie->id}}">Xóa</a>
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