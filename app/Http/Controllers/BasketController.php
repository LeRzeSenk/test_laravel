<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        return view('basket',compact('order'));
    }

    public function order()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        } else{
            $order = Order::find($orderId);
            return view('order',compact('order'));
        }
    }

    public function orderConfirm(Request $request)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        } else{
            $order = Order::find($orderId);
            $success = $order->saveOrder($request->name,$request->phone,$request->email,$request->comment);
        }
            session()->flash('success',$success);

        return redirect()->route('index');
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
        session()->flash('danger','Товар убран '.Product::find($productId)->name);
        return redirect()->route('basket');
    }

    public function add($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
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
        session()->flash('success','Товар добавлен '.Product::find($productId)->name);
        return redirect()->route('basket');
    }
}
