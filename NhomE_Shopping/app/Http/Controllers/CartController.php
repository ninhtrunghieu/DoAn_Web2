<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use PHPUnit\Util\Json;
use Illuminate\Pagination\LengthAwarePaginator;

class CartController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function savecart(Request $request)
    {
        $product = $this->product->find($request->id);
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart){
            $is_avaible= 0;
            foreach($cart as $key => &$val){
                if($val['product_id'] == $request->id){
                    $is_avaible = 1;
                    $cart[$key] = array(
                        'session_id' => $val['session_id'],
                        'product_name' => $val['product_name'],
                        'product_id' => $val['product_id'],
                        'product_img' => $val['product_img'],
                        'product_count' => $val['product_count']+ $request->count,
                        'product_price' => $val['product_price'],
                        'product_qty' => $product['quatity']
                    );
                    Session::put('cart',$cart);
                }
            }
            if($is_avaible == 0){
                $cart[] = array(
                    "session_id" => $session_id,
                    "product_id" => $product['id'],
                    "product_name" => $product['name'],
                    "product_price" => $product['price'],
                    "product_img" => $product['images'],
                    "product_count" => $request->count,
                    "product_qty" => $product['quatity']
                );
                Session::put('cart',$cart);
            }
        }
        else{
            $cart[] = array(
                "session_id" => $session_id,
                "product_id" => $product['id'],
                "product_name" => $product['name'],
                "product_price" => $product['price'],
                "product_img" => $product['images'],
                "product_count" => $request->count,
                "product_qty" => $product['quatity']
            );  
            Session::put('cart',$cart);          
        }
        Session::save();
        $data = Session::get('cart');
        $responseHTML = '';
        $total = 0;
        foreach($data as $item){
            $total = $total + $item["product_count"]*$item["product_price"];
$responseHTML .= '<div class="cart-content"> <table> <tbody> <tr> <td class="product-image"> <a href="product-detail.html"> <img src="/images/'.$item['product_img'].'" alt="Product"> </a> </td> <td> <div class="product-name"> <a href="product-detail.html">'.$item['product_name'].'</a> </div> <div> '.$item['product_count'].' x <span class="product-price">'.number_format($item['product_price']).' VNĐ</span> </div> </td> <td class="action"> <a class="remove" href="#"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a> </td> </tr>';
        }
        $responseHTML .= '<tr class="total"> <td colspan="2">Total:</td> <td>'.number_format($total).'VNĐ </td> </tr> <tr> <td colspan="3" class="d-flex justify-content-center"> <div class="cart-button"> <a href="/cart-detail" title="View Cart">Xem giỏ hàng</a> <a href="/info-cart" title="Checkout">Thanh toán</a> </div> </td> </tr>';
        print_r($responseHTML);
    }
    public function loadcart()
    {       
        $data = Session::get('cart');
        $responseHTML = '';
        if($data){           
            $total = 0;
            foreach($data as $item){
                $total = $total + $item["product_count"]*$item["product_price"];
                $responseHTML .= '<tr> <td class="product-image"> <a href="product-detail.html"> <img src="/images/'.$item['product_img'].'" alt="Product"> </a> </td> <td> <div class="product-name"> <a href="product-detail.html">'.$item['product_name'].'</a> </div> <div> <span id="xcount">'.$item['product_count'].'</span> x <span class="product-price">'.number_format($item['product_price']).' VNĐ</span> </div> </td> <td class="action"> <a class="remove" href="#"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a> </td> </tr>';
            }
            $responseHTML .= '<tr class="total"> <td colspan="2">Tổng tiền:</td> <td>'.number_format($total).'VNĐ </td> </tr> <tr> <td colspan="3" class="d-flex justify-content-center"> <div class="cart-button"> <a href="/cart-detail" title="View Cart">Xem giỏ hàng</a> <a href="/info-cart" title="Checkout">Thanh toán</a> </div> </td> </tr>';
            
        }
        print_r($responseHTML);
    }
    public function detailcart(Request $request) {
        $data = Session::get('cart', []);
        $totalMoney = 0;
        $totalCount = 0;
    
        foreach ($data as $total) {
            $totalMoney += (integer)$total["product_price"] * (integer)$total["product_count"];
            $totalCount += (integer)$total["product_count"];
        }
    
        // Lấy số trang từ query string, mặc định là 1
        $currentPage = $request->input('page', 1);
        $perPage = 4;
    
        // Tạo một bộ dữ liệu cho trang hiện tại
        $currentPageData = array_slice($data, ($currentPage - 1) * $perPage, $perPage);
    
        // Tạo LengthAwarePaginator
        $paginator = new LengthAwarePaginator(
            $currentPageData,
            count($data),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );
    
        return view('client.product-cart', [
            'data' => $paginator,
            'totalMoney' => $totalMoney,
            'totalCount' => $totalCount,
        ]);
    }
    
    public function infocart(){
        $data = Session::get('cart');
        $totalMoney = 0;
        $totalCount = 0;
        if($data){
            foreach($data as $total){
                $totalMoney = $totalMoney +(integer)$total["product_price"]*(integer)$total["product_count"];
                $totalCount = $totalCount + (integer)$total["product_count"];
            }
            return View('client.info-cart',['totalMoney'=>$totalMoney,'totalCount'=>$totalCount]);
        }
        else{
            return View('client.info-cart',['totalMoney'=>0,'totalCount'=>0]);
        }
    }
    public function delete_cart($session_id){
        $cart = Session::get('cart');
        if($cart==true){
            foreach($cart as $key => $val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Xóa sản phẩm thành công');

        }else{
            return redirect()->back()->with('message','Xóa sản phẩm thất bại');
        }

    }
    public function update_cart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            $message = '';

            foreach($data as $key => $qty){
                $i = 0;
                if($key <> "_token"){
                    foreach($cart as $session => $val){
                        $i++;    
                        if($val['session_id']==$key && (integer)$qty<(integer)$cart[$session]['product_qty']){
    
                            $cart[$session]['product_count'] = $qty;
                            $message.='<p style="color:blue">'.$i.') Cập nhật số lượng :'.$cart[$session]['product_name'].' thành công</p>';
    
                        }elseif($val['session_id']==$key && (integer)$qty>(integer)$cart[$session]['product_qty']){
                            $message.='<p style="color:red">'.$i.') Cập nhật số lượng :'.$cart[$session]['product_name'].' thất bại</p>';
                        }
    
                    }
                }
            }

            Session::put('cart',$cart);
            return redirect()->back()->with('message',$message);
        }else{
            return redirect()->back()->with('message','Cập nhật số lượng thất bại');
        }
    }
    public function delete_all_product(){
        $cart = Session::get('cart');
        if($cart==true){
            Session::forget('cart');
            return redirect()->back()->with('message','Xóa hết giỏ thành công');
        }
    }
}