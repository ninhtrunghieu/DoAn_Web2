<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use app\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CustomerController extends Controller
{
    public function __construct(Customer $customer, Order $order)
    {
        $this->customer = $customer;
        $this->order = $order;
    }

    public function login_index()
    {
        return view('client.login');
    }

    public function register_index()
    {
        return view('client.register');
    }

    public function login_post(Request $request){
        $customer = $this->customer->where([
            ['email',$request->email],
            ['password',$request->password]
        ])->get();
        if($customer){
            Session::put('customer', $customer);
            return redirect('/');
        }
        return view('client.login')->with('status', 'Đăng nhập thất bại!');
    }

    public function register_post(Request $request){    

        $this->customer->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect('/login')->with('status', 'Đăng ký thành công!');
    }
    public function logout(){
        Session::forget('customer');
        return redirect('/');
    }
    public function get_order(){
        $user = Session::get('customer');
        $order = $this->order->join('customers','orders.cusId','=','customers.id')
                            ->where([['orders.cusId','=', $user[0]->id],['orders.status','<>','5'],['orders.status','<>','4']])
                            ->select('orders.created_at','orders.status','orders.id','orders.total')
                            ->get();
        $order_trash = $this->order->join('customers','orders.cusId','=','customers.id')
                            ->where([['orders.cusId','=', $user[0]->id],
                                    ['orders.status','<>','0'],
                                    ['orders.status','<>','1'],
                                    ['orders.status','<>','2'],
                                    ['orders.status','<>','3']])
                            ->select('orders.created_at','orders.status','orders.id','orders.total')
                            ->get();                    
        return view('client.user-order',['order'=>$order,'order_trash'=>$order_trash]);
        
    }
}
