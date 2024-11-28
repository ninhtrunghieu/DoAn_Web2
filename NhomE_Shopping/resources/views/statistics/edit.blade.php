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
					<h1 class="m-0 text-dark">Chỉnh sửa doanh số</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
						<li class="breadcrumb-item active">Chỉnh sửa doanh số</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Chỉnh sửa doanh số</h3>
				</div>
				<div class="card-body">
					<form role="form" action="{{ route('statistics.saveedit',['id' => $item->id]) }}" method="post">
						@csrf
						<div class="card-body" style="padding: 0px;">
							<div class="form-group">
								<label>Ngày nhập</label>
								<input type="date" value="{{ $item -> order_date }}" name="order_date" class="form-control">
							</div>

							<div class="form-group">
								<label>Lợi nhuận</label>
								<input type="text" name="sales" value="{{ $item -> sales }}" class="form-control" placeholder="Lợi nhuận">
							</div>
							<div class="form-group">
								<label>Chi phí</label>
								<input type="text" name="profit" value="{{ $item -> profit }}" class="form-control" placeholder="Chi phí">
							</div>
							<div class="form-group">
								<label>Tổng sản phẩm bán được</label>
								<input type="text" name="quantity" value="{{ $item -> quantity }}" class="form-control" placeholder="Tổng sản phẩm bán được">
							</div>
							<div class="form-group">
								<label>Tổng đơn hàng bán được</label>
								<input type="text" name="total_order" value="{{ $item -> total_order }}" class="form-control" placeholder="Tổng đơn hàng">
							</div>
						</div>
						<div>
							<button type="submit" class="btn btn-primary" >Cập nhật doanh số</button>
							<a href="{{ route('statistics.index') }}" class="btn btn-default">Quay lại</a>
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