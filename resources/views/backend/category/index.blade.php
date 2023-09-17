@extends('backend.index')
@section('content')
    <div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Leaves</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Leaves</li>
    </ul>
    </div>
    <div class="col-auto float-right ml-auto">
        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Add Leave</a>
    </div>
    
    </div>

    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                @include('backend.category.create')
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Activity User</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Activity User</li>
                        </ul>
                    </div>
                </div>
            </div>
            
			<!-- /Page Header -->

            <!-- /Search Filter -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name En</th>
                                    <th>Name Ar</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Categories as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->name_ar }}</td>
                                        <td>{{ $item->name_en }}</td>
                                        <td>{{ $item->avter }}</td>
                                        <td>
                                                <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                <a class="dropdown-item" href="{}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown-menu dropdown-menu-right show" x-placement="top-end" style="position: absolute; transform: translate3d(-46px, -63px, 0px); top: 0px; left: 0px; will-change: transform;">
            <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
            </div>
        <!-- /Page Content -->
    </div>
@endsection



