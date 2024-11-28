@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Danh sách sản phẩm</h3>
                    <a href="{{ route('products.create') }}" class="btn btn-warning float-right">Thêm mới</a>
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
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Khuyến mãi</th>
                                <th style="width: 12%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="/images/{{ $item->images }}" style="width:100px;height:80px" alt="">
                                </td>
                                <td>{{ $item->quatity }}</td>
                                <td style="font-weight:600;color:red">{{ number_format($item->price) }} đồng</td>
                                <td style="font-weight:500;color:green">{{ number_format($item->discount) }} đồng</td>
                                <td>
                                    <a href="{{ route('products.edit',['id' => $item->id]) }}" class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                    <button class="btn btn-sm btn-danger" onclick="showDeleteModal('{{ route('products.delete', ['id' => $item->id]) }}')">
                                        <i class="icon ion-android-delete"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Xác nhận xóa -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa sản phẩm này không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Xác nhận</a>
            </div>
        </div>
    </div>
</div>

<!-- Thêm Bootstrap JS nếu chưa có -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showDeleteModal(deleteUrl) {
        // Gán liên kết vào nút Xác nhận trong modal
        document.getElementById('confirmDeleteBtn').setAttribute('href', deleteUrl);
        // Hiển thị modal
        $('#deleteModal').modal('show');
    }
</script>

@endsection
