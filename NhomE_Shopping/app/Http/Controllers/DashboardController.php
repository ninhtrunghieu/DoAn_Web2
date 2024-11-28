<?php

namespace App\Http\Controllers;

use App\Models\Statistical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function __construct(Statistical $statistical)
    {
        $this->statistical = $statistical;
    }

    public function index(Request $request)
    {
        return view('dashboard.dashboard');
    }
    public function get(Request $request)
    {
        $data = $request->all();
        $start = $data['start'];
        $end = $data['end'];

        $get = $this->statistical->whereBetween('order_date',[$start,$end])
                                 ->orderBy('order_date','ASC')->get();
        
        foreach($get as $value){
            $chart[] = array(
                'period' =>$value->order_date,
                'order'=>$value->total_order,
                'sales'=>$value->sales,
                'profit'=>$value->profit,
                'quantity'=>$value->quantity
            );
        }
        $result = json_encode($chart);
        return json_decode($result);
    }
}