<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use function view;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where('status',1)->get();
        return view('admin.orders',compact('orders'));
    }
    public function deleteOrder($id){
        $order=Order::find($id);
        $order->products()->detach();
        $order->delete();
        return redirect()->route('orders');
    }
}