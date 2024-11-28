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
                    <h1 class="m-0 text-dark">Thống kê</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thống kê</li>
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
                    <h3 class="card-title">Biểu đồ danh số</h3>
                    <a style="margin-left: 20px;" id="btn-filter" class="btn btn-warning">Lọc</a>
                    <input type="date" style="display:inline;width:200px" value="2024-09-20" class="form-control"
                        name="start" id="start">
                    <input type="date" style="display: inline;width:200px" value="2024-09-30" class="form-control"
                        name="end" id="end">
                </div>
                <div class="card-body">
                    <div id="myfirstchart" style="height: 250px;"></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $(document).ready(function() {
        var chart = Morris.Bar({
            element: 'myfirstchart',
            data: [],
            xkey: 'period',
            ykeys: ['order', 'sales', 'profit', 'quatity'],
            labels: ['Đơn hàng', 'Doanh số', 'Lợi nhuận', 'Số lượng']
        });

        $('#btn-filter').on('click', function() {
            var start = $('#start').val();
            var end = $('#end').val();

            $.ajax({
                url: "{{url('/dashboard/get')}}",
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    start,
                    end
                },
                success: function(res) {
                    if (res && res.length > 0) { // Kiểm tra nếu dữ liệu trả về không rỗng
                        chart.setData(res);
                    } else {
                        alert('Lọc thất bại: Không có dữ liệu phù hợp!');
                    }
                },
                error: function(mess) {
                    console.log(mess);
                    alert('Có lỗi xảy ra, vui lòng thử lại!');
                }
            });
        });
    });
</script>

@endsection