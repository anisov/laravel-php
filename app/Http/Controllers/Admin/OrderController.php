<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    function index()
    {
        $orders = Order::all();
        $data['orders'] = $orders;
        return view('admin\orders', $data);
    }

}
