

<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Products'}}@endsection
@section('content')

<div id="layoutSidenav">
    @include('back-end.layouts.sideNav')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                <p style="font-size: 30px; text-align: center">
                                    <i style="padding-left: 10px" class="fas fa-user"></i>
                                    <?php echo $user;?>
                                </p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="manage-user.php">Xem thông tin chi tiết</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <p style="font-size: 30px; text-align: center">
                                    <i style="padding-left: 10px" class="fad fa-newspaper"></i>
                                </p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="manage-news.php">Xem thông tin chi tiết</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">
                                <p style="font-size: 30px; text-align: center">
                                   <i style="padding-left: 10px" class="fad fa-shopping-bag"></i>
                                </p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="manage-products.php">Xem thông tin chi tiết</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body">
                                <canvas id="myAreaChart" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                Bar Chart Example
                            </div>
                            <div class="card-body">
                                <canvas id="myBarChart" width="100%" height="40"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </main>
    </div>

</div>

@endsection
