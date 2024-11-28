<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function index()
    {
        $datas = Category::where('parentId', 0)->get();
        $living_room = $this->category->where('parentId', '=', 72)->get();
        $kitchen_room = $this->category->where('parentId', '=', 73)->get();
        $living_room_hot = $this->product->where([
            ['homeflag', '=', "checked"],
            ['categoryId', '=', 72],
            ['hotflag', '=', "checked"]
        ])->get();
        $living_room_new = $this->product->where([
            ['homeflag', '=', "checked"],
            ['categoryId', '=', 72]
        ])->orderBy('created_at', 'desc')->get();
        $living_room_sale = $this->product->where([
            ['homeflag', '=', "checked"],
            ['categoryId', '=', 72],
            ['isdiscount', '=', "checked"]
        ])->get();
        $kitchen_room_hot = $this->product->where([
            ['homeflag', '=', "checked"],
            ['categoryId', '=', 73],
            ['hotflag', '=', "checked"]
        ])->get();
        $kitchen_room_new = $this->product->where([
            ['homeflag', '=', "checked"],
            ['categoryId', '=', 73]
        ])->orderBy('created_at', 'desc')->get();
        $kitchen_room_sale = $this->product->where([
            ['homeflag', '=', "checked"],
            ['categoryId', '=', 73],
            ['isdiscount', '=', "checked"]
        ])->get();
        $list_sale = $this->product->where([
            ['homeflag', '=', "checked"],
            ['isdiscount', '=', "checked"]
        ])->get();
        return view('home', [
            'datas' => $datas,
            'living_room_hot' => $living_room_hot,
            'living_room_new' => $living_room_new,
            'living_room_sale' => $living_room_sale,
            'kitchen_room_sale' => $kitchen_room_sale,
            'kitchen_room_new' => $kitchen_room_new,
            'kitchen_room_hot' => $kitchen_room_hot,
            'living_room' => $living_room,
            'kitchen_room' => $kitchen_room,
            'list_sale' => $list_sale

            
        ]);
    }
    // public function detail($id){
    //     $item = $this->product->join('product_owners', 'products.ownerId', '=', 'product_owners.id')
    //                           ->join('categories', 'products.categoryId', '=', 'categories.id')
    //                           ->select('products.*', 'categories.category_name', 'product_owners.owner_name')
    //                           ->find($id);
    //     $datas = $this->product->where([
    //             ['categoryId', '=', $item->categoryId],
    //             ['id', '<>', $item->id]])->take(3)->get();
    //     $categories = Category::where('parentId',0)->get();
    //     return view('client.detail',['item'=>$item,'datas'=>$datas,'categories'=>$categories]);
    // }
    public function detail($id)
    {
        $item = $this->product->join('product_owners', 'products.ownerId', '=', 'product_owners.id')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
            ->select('products.*', 'categories.category_name', 'product_owners.owner_name')
            ->find($id);

        // Kiểm tra nếu $item là null
        if (!$item) {
            // Xử lý nếu không tìm thấy sản phẩm, ví dụ: hiển thị thông báo lỗi hoặc chuyển hướng
            return redirect()->back()->with('error', 'Product not found');
        }

        $datas = $this->product->where([
            ['categoryId', '=', $item->categoryId],
            ['id', '<>', $item->id]
        ])->take(3)->get();
        $categories = Category::where('parentId', 0)->get();
        return view('client.detail', ['item' => $item, 'datas' => $datas, 'categories' => $categories]);
    }

    public function list($id)
    {
        // Kiểm tra nếu $id bằng 0: Lấy toàn bộ sản phẩm
        if ($id == 0) {
            // Lấy tất cả sản phẩm và phân trang (mỗi trang 12 sản phẩm)
            $datas = $this->product->paginate(12);
    
            // Lấy danh mục cha (parentId = 0)
            $categories = Category::where('parentId', 0)->get();
        } else {
            // Nếu $id khác 0: Lọc sản phẩm thuộc danh mục cụ thể
            $datas = $this->product->where('categoryId', '=', $id)->paginate(12);
    
            // Lấy danh mục cha (parentId = 0)
            $categories = Category::where('parentId', 0)->get();
        }
    
        // Trả về view 'client.list' với danh sách danh mục và sản phẩm
        return view('client.list', [
            'categories' => $categories, // Danh mục cha
            'datas' => $datas,           // Danh sách sản phẩm (đã phân trang)
        ]);
    }
    
    public function search(Request $request)
    {
        $keyword = $request->keyword;

        // Thực hiện tìm kiếm với Full-text search
        $datas = Product::whereRaw("MATCH(name, description) AGAINST(? IN BOOLEAN MODE)", [$keyword])
            ->paginate(12);

        // Lấy danh mục sản phẩm
        $categories = Category::where('parentId', 0)->get();

        // Trả về view với dữ liệu tìm được
        return view('client.list', [
            'categories' => $categories,
            'datas' => $datas->appends(['keyword' => $keyword]),
        ]);
        
    }



}
