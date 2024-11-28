@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách doanh số</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách doanh số</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh sách danh mục</h3>
                    <a style="margin-left: 20px;" href="{{ route('statistics.create') }}" class="btn btn-warning">Thêm mới</a>
                </div>
                @if (session('status'))
                <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
                    {{ session('status') }}
                </p>
                @endif
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Ngày tạo</th>
                                <th>Lợi nhuận</th>
                                <th>Chi phí</th>
                                <th>Tổng sản phẩm bán</th>
                                <th>Tổng hóa đơn</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                            <tr>
                                <td>{{ $item->order_date }}</td>
                                <td>{{ number_format($item->sales) }} đồng</td>
                                <td>{{ number_format($item->profit) }} đồng</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->total_order }}</td>
                                <td>
                                    <a href="{{ route('statistics.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <a href="{{ route('statistics.delete',['id' => $item->id]) }}" class="btn btn-sm btn-danger"><i class="icon ion-android-delete"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection