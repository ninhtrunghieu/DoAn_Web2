<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\product_owner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;


class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->htmlColor = '';
        $this->htmlCategory = '';
        $this->htmlOwner = '';
    }

    public function index()
    {
        $datas = $this->product->orderBy('created_at', 'desc')->get();
        return view('products.index', ['datas' => $datas]);
    }

    public function create()
    {
        $htmlCategory = $this->getcategory();
        $htmlOwner = $this->getowner();
        return view('products.create', ['htmlCategory' => $htmlCategory, 'htmlOwner' => $htmlOwner]);
    }

    public function save(Request $request)
    {
        if (!$request->hasFile('images')) {
            return "Mời chọn file cần upload";
        }
        $image = $request->file('images');
        $storedPath = $image->move('images', $image->getClientOriginalName());
        $this->product->create([
            'name' => $request->name,
            'categoryId' => $request->categoryId,
            'images' => $storedPath->getFilename(),
            'price' => $request->price,
            'quatity' => $request->quatity,
            'ownerId' => $request->ownerId,
            'content' => $request->content,
            'viewcount' => 1,
            'hotflag' => $request->hotflag = "on" ? 'checked' : '',
            'homeflag' => $request->homeflag = "on" ? 'checked' : '',
            'isdiscount' => $request->isdiscount = "on" ? 'checked' : '',
            'discount' => $request->discount,
            'description' => $request->description,
            'alias' => Str::slug($request->name, '-')
        ]);
        return redirect('/products/create')->with('status', 'Thêm thành công!');           
    }

    function getcategory()
    {
        $datas = Category::all();
        foreach ($datas as $value) {
            $this->htmlCategory .= '<option value="' . $value['id'] . '">' . $value['category_name'] . '</option>';
        }
        return $this->htmlCategory;
    }

    function getowner()
    {
        $datas = product_owner::all();
        foreach ($datas as $value) {
            $this->htmlOwner .= '<option value="' . $value['id'] . '">' . $value['owner_name'] . '</option>';
        }
        return $this->htmlOwner;
    }
    public function edit($id)
    {
        $item = $this->product->find($id);
		$htmlCategory = $this->CategoryRecusiveEdit($item->categoryId);
        $htmlOwner = $this->OwnerRecusiveEdit($item->ownerId);
		return view('products.edit',['htmlCategory' => $htmlCategory,'htmlOwner' => $htmlOwner,'item' => $item]);
    }

    public function saveedit($id,Request $request)
    {
        try{
            if (!$request->hasFile('images')) {
                return "Mời chọn file cần upload";
            }
            $image = $request->file('images');
            $storedPath = $image->move('images', $image->getClientOriginalName());
            $this->product->find($id)->update([
                'name' => $request->name,
                'categoryId' => $request->categoryId,
                'images' => $storedPath->getFilename(),
                'price' => $request->price,
                'quatity' => $request->quatity,
                'ownerId' => $request->ownerId,
                'viewcount' => 1,
                'hotflag' => $request->hotflag = "on" ? 'checked' : '',
                'homeflag' => $request->homeflag = "on" ? 'checked' : '',
                'description' => $request->description,
                'content' => $request->content,
                'isdiscount' => $request->isdiscount = "on" ? 'checked' : '',
                'discount' => $request->discount,
                'alias' => Str::slug($request->name, '-')
            ]);
            return redirect('/products/edit/'.$id)->with('status', 'Cập nhật thành công!');
		}
		catch(Exception $e){
			report($e);
			return redirect('/products/index')->with('status', 'Cập nhật thất bại!');
		}
        
    }

    function CategoryRecusiveEdit($id = 0){
		$datas = Category::all();
		foreach($datas as $value){
			if($value->id == $id){
				$this->htmlCategory .= '<option selected value="' . $value['id'] . '">'  . $value['category_name'] . '</option>';
			}
			else{
				$this->htmlCategory .= '<option value="' . $value['id'] . '">'  . $value['category_name'] . '</option>';
			}
		}
		return $this->htmlCategory;
	}

    function OwnerRecusiveEdit($id = 0){
		$datas = product_owner::all();
		foreach($datas as $value){
			if($value->id == $id){
				$this->htmlOwner .= '<option selected value="' . $value['id'] . '">'  . $value['owner_name'] . '</option>';
			}
			else{
				$this->htmlOwner .= '<option value="' . $value['id'] . '">'  . $value['owner_name'] . '</option>';
			}
		}
		return $this->htmlOwner;
	}

    public function delete($id){
        $product = $this->product->find($id);
        $product->delete();
        return redirect('/products/index')->with('status', 'Xóa thành công!');
    }
}
