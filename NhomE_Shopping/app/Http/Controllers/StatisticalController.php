<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistical;
use Exception;
use Illuminate\Support\Str;

class StatisticalController extends Controller
{
	public function __construct(Statistical $statistic){
		$this->statistic = $statistic;
	}

    public function index(){    	
    	$datas = $this->statistic->all();
    	return view('statistics.index',['datas' => $datas]);
    }

    public function create(){
    	return view('statistics.create');
    }

	public function save(Request $request)
{
    try {
        // Kiểm tra và validate dữ liệu đầu vào
        $validated = $request->validate([
            'order_date' => 'required|date',        // Kiểm tra ngày
            'sales' => 'required|numeric',           // Kiểm tra lợi nhuận là số
            'profit' => 'required|numeric',          // Kiểm tra chi phí là số
            'quantity' => 'required|numeric',        // Kiểm tra tổng sản phẩm bán được là số
            'total_order' => 'required|numeric',     // Kiểm tra tổng đơn hàng là số
        ]);

        // Thực hiện tạo mới doanh số với đầy đủ các thuộc tính
        $this->statistic->create([
            'order_date' => $request->order_date,          // Ngày nhập
            'sales' => $request->sales,                    // Lợi nhuận
            'profit' => $request->profit,                  // Chi phí
            'quantity' => $request->quantity,              // Số lượng sản phẩm bán được
            'total_order' => $request->total_order,        // Tổng số đơn hàng
        ]);

        // Redirect nếu thành công
        return redirect('/statistics/create')->with('status', 'Thêm thành công!');
    } catch (Exception $e) {
        // Ghi log lỗi và thông báo thất bại
        report($e);
        return redirect('/statistics/create')->with('status', 'Thêm thất bại! Lỗi: ' . $e->getMessage());
    }
}



	public function edit($id){	
		$item = $this->statistic->find($id);
		return view('statistics.edit',['item' => $item]);
	}

	public function delete($id)
    {
        $statistic = $this->statistic->find($id);
        $statistic->delete();
        return redirect('/statistics/index')->with('status', 'Xóa thành công!');
    }

	public function saveedit($id, Request $request)
{
    try {
        // Tìm đối tượng cần sửa theo ID
        $statistical = $this->statistic->find($id);

        // Cập nhật các thuộc tính đầy đủ
        $statistical->update([
            'category_name' => $request->name,
            'parentId' => $request->parentId,
            'alias' => Str::slug($request->name, '-'),
            'order_date' => $request->order_date, // Cập nhật ngày đặt hàng
            'sales' => $request->sales,           // Cập nhật doanh thu
            'profit' => $request->profit,         // Cập nhật lợi nhuận
            'quantity' => $request->quantity,     // Cập nhật số lượng
            'total_order' => $request->total_order, // Cập nhật tổng số đơn hàng
        ]);

        // Trả về thông báo thành công và chuyển hướng
        return redirect('/statistics/edit/'.$id)->with('status', 'Cập nhật thành công!');
    } catch (Exception $e) {
        // Xử lý lỗi nếu có
        report($e);
        return redirect('/statistics/index')->with('status', 'Cập nhật thất bại!');
    }
}

	
}
