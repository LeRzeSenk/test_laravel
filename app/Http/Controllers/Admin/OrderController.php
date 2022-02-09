<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        if ($user->isAdmin()) {
            $orders = Order::where('status',1)->get();
            return view('admin.orders',compact('orders'));
        } else{
            return redirect()->route('index');
        }
    }
    public function deleteOrder($id){
        $order=Order::find($id);
        $order->products()->detach();
        $order->delete();
        return redirect()->route('orders');
    }

    public function openOrder($orderId){
        $order = Order::find($orderId);
        return view('admin.open_order',compact('order'));
    }
}
