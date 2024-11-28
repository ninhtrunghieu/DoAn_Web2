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
					<h1 class="m-0 text-dark">Danh sách danh mục</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
						<li class="breadcrumb-item active">Danh sách danh mục</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Cập nhật danh mục</h3>
				</div>
				<div class="card-body">
					<form role="form" action="{{ route('categories.saveedit',['id' => $item->id]) }}" method="post">
						@csrf
						<div class="card-body" style="padding: 0px;">
							<div class="form-group">
								<label>Tên danh mục</label>
								<input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục" value="{{ $item -> category_name }}">
							</div>
							<div class="form-group">
								<label>Danh mục gốc</label>
								<select class="form-control" name="parentId">
									<option value="0">Chọn danh mục gốc</option>
									{!! $htmlSelect !!}
								</select>
							</div>
						</div>
						<div>
							<button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
							<a href="{{ route('categories.index') }}" class="btn btn-default">Quay lại</a>
						</div>
					</form>
					@if (session('status'))
					<p class="text-warning" style="margin:0px;padding:0px">
						{{ session('status') }}
					</p>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection