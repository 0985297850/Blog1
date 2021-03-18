<body class="sb-nav-fixed">
@extends('back-end.layouts.master-admin')
@section('title'){{'Add News'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('back-end.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sửa Phân Quyền</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa Phân Quyền</li>
                    </ol>

                </div>

                <div style="width: 40%; margin: auto">

                    <form action="/small/back-end/update-privilege/@foreach($users as $key => $user){{$user->id}}@endforeach" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            @foreach($privilegeGroup as  $group)
                                <div class="group-name">
                                    <h3 class="group-name_title">{{$group->name}}</h3>
                                    <ul>
                                        @foreach($privileges as $privilege)
                                            @if ($privilege['roles_id'] == $group['id'])
                                                <li>
                                                    <input
                                                            @php
                                                            $checkboxsList = [];
                                                            @endphp
                                                            @foreach ($checkboxs as $checkbox)
                                                               @php $checkboxsList[] = $checkbox->privilege_id; @endphp
                                                            @endforeach

                                                            @if(in_array($privilege->id, $checkboxsList))
                                                                    checked
                                                            @endif
                                                            type="checkbox" value="{{$privilege->id}}" id="privilege_{{$privilege->id}}" name="privileges[]">
                                                    <label for="privilege_{{$privilege->id}}"> {{$privilege->name}} </label>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                            <button class="btn btn-primary">Sửa</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

@endsection

