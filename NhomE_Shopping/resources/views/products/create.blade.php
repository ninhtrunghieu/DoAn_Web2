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
                <h3 class="card-title" style="font-size: 24px; font-weight: bold;">Thêm mới sản phẩm</h3>
                </div>
                @if (session('status'))
                <p class="text-warning" style="margin:0px;padding:0px">
                    {{ session('status') }}
                </p>
                @endif
                <div class="card-body">
                    <form role="form" action="{{ route('products.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body" style="padding: 0px;">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Mô tả ngắn</label>
                                <input type="text" name="description" class="form-control" placeholder="Giới thiệu ngắn">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Đơn giá</label>
                                            <input type="int" name="price" class="form-control" placeholder="Nhập đơn giá sản phẩm">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Giá khuyến mãi(nếu có)</label>
                                            <input type="int" name="discount" class="form-control" placeholder="Nhập đơn giá sản phẩm">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Số lượng</label>
                                            <input type="int" name="quatity" class="form-control" placeholder="Nhập đơn giá sản phẩm">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="images" class="form-control" placeholder="Chọn hình ảnh">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nhà cung cấp</label>
                                            <select class="form-control" name="ownerId">
                                                <option value="0">Chọn danh mục</option>
                                                {!! $htmlOwner !!}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Loại sản phẩm</label>
                                            <select class="form-control" name="categoryId">
                                                <option value="0">Chọn danh mục</option>
                                                {!! $htmlCategory !!}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="textarea" name="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Thêm mới sản phẩm</button>
                            <a href="{{ route('products.index') }}" class="btn btn-default">Quay lại</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection