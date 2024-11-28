@extends('layouts.admin')
@section('title')
<title>Trang quản trị</title>
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Danh sách danh mục</h3>
                    <a href="{{ route('categories.create') }}" class="btn btn-warning float-right">Thêm mới</a>
                </div>
                @if (session('status'))
                    <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
                        {{ session('status') }}
                    </p>
                @endif
                <div class="card-body">
                    <!-- Dropdown để chọn số lượng kết quả hiển thị -->
                    <form method="GET" action="{{ route('categories.index') }}" class="mb-3">
                        <div class="form-group">
                            <label for="per_page">Hiển thị:</label>
                            <select name="per_page" id="per_page" class="form-control d-inline" style="width: auto;"
                                onchange="this.form.submit()">
                                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                            </select>
                            <label>Kết quả</label>
                        </div>
                    </form>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tên danh mục</th>
                                <th style="width:14%">Ngày tạo</th>
                                <th style="width: 12%;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)
                                <tr>
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ date("d-m-Y", strtotime($item->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', ['id' => $item->id]) }}"
                                            class="btn btn-sm btn-success"><i class="icon ion-android-create"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="showDeleteModal('{{ route('categories.delete', ['id' => $item->id]) }}')">
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
                Bạn có chắc chắn muốn xóa danh mục này không?
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
