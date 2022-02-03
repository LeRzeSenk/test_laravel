<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        return view('basket',compact('order'));
    }

    public function order()
    {
        return view('order');
    }

    public function remove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $PivotRaw = $order->products()->where('product_id',$productId)->first()->pivot;
            if ($PivotRaw->count < 2) {
                $order->products()->detach($productId);
            }else {
                $PivotRaw->count--;
                $PivotRaw->update();
            }
        }

        return redirect()->route('basket');
    }

    public function add($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

        if ($order->products->contains($productId)) {
            $PivotRaw = $order->products()->where('product_id',$productId)->first()->pivot;
            $PivotRaw->count++;
            $PivotRaw->update();
        }else{
            $order->products()->attach($productId);
        }

        return redirect()->route('basket');
    }
}
