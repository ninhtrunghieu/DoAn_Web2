<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Exception;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
	public function __construct(Category $category)
	{
		$this->category = $category;
		$this->htmlSelect = '';
	}

	public function index(Request $request)
	{
		$perPage = $request->get('per_page', 10); // Sử dụng phân trang
		$datas = Category::paginate($perPage);
		return view('categories.index', compact('datas'));
	}

	public function create()
	{
		$htmlSelect = $this->CategoryRecusive(0);
		return view('categories.create', ['htmlSelect' => $htmlSelect]);
	}

	public function save(Request $request)
	{
		$request->validate([
			'category_name' => 'required|string|max:255',
			'parentId' => 'integer|nullable',
		]);

		try {
			$this->category->create([
				'category_name' => $request->category_name,
				'parentId' => $request->parentId,
				'alias' => Str::slug($request->category_name, '-')
			]);
			return redirect('/categories/create')->with('status', 'Thêm thành công!');
		} catch (Exception $e) {
			report($e);
			return redirect('/categories/create')->with('status', 'Thêm thất bại!');
		}
	}

	function CategoryRecusive($parentid, $text = '')
	{
		$datas = Category::all();
		foreach ($datas as $value) {
			if ($value['parentId'] == $parentid) {
				$this->htmlSelect .= '<option value="' . $value['id'] . '">' . $text . $value['category_name'] . '</option>';
				$this->CategoryRecusive($value['id'], $text . '--');
			}
		}
		return $this->htmlSelect;
	}

	function CategoryRecusiveEdit($curentparentid, $parentid = 0, $submark = '')
	{
		$datas = Category::where('parentId', $parentid)->get();
		foreach ($datas as $value) {
			if ($value->id == $curentparentid) {
				$this->htmlSelect .= '<option selected value="' . $value['id'] . '">' . $submark . $value['category_name'] . '</option>';
			} else {
				$this->htmlSelect .= '<option value="' . $value['id'] . '">' . $submark . $value['category_name'] . '</option>';
			}
			$this->CategoryRecusiveEdit($curentparentid, $value['id'], $submark . '--');
		}
		return $this->htmlSelect;
	}

	public function edit($id)
	{
		$item = $this->category->find($id);
		$htmlSelect = $this->CategoryRecusiveEdit($item['parentId'], 0);
		return view('categories.edit', ['htmlSelect' => $htmlSelect, 'item' => $item]);
	}

	public function delete($id)
	{
		$category = $this->category->find($id);
		$category->delete();
		return redirect('/categories/index')->with('status', 'Xóa thành công!');
	}

	public function saveedit($id, Request $request)
	{
		try {
			$this->category->find($id)->update([
				'category_name' => $request->name,
				'parentId' => $request->parentId,
				'alias' => Str::slug($request->name, '-')
			]);
			return redirect('/categories/edit/' . $id)->with('status', 'Cập nhật thành công!');
		} catch (Exception $e) {
			report($e);
			return redirect('/categories/index')->with('status', 'Cập nhật thất bại!');
		}
	}
}
