<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\MenuItem;
use App\Models\Order; // Assuming you have an Order model

class OrderController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $item = MenuItem::find($request->item_id);
        $order = Session::get('order', []);
        
        if (isset($order[$item->id])) {
            $order[$item->id]['quantity'] += $request->quantity;
        } else {
            $order[$item->id] = [
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $request->quantity,
            ];
        }
        
        Session::put('order', $order);
        $orderTotal = array_sum(array_map(function ($item) {
            return $item['quantity'] * $item['price'];
        }, $order));
        
        Session::put('order_total', $orderTotal);

        return redirect()->route('home')->with('success', 'Item added to your order!');
    }

    public function submit(Request $request)
    {
        $order = Session::get('order', []);
        if (empty($order)) {
            return redirect()->route('home')->with('error', 'No items in the order.');
        }

        // Example: Save order to database
        $orderModel = new Order();
        $orderModel->user_id = auth()->id(); // Assuming user is logged in
        $orderModel->total = Session::get('order_total');
        $orderModel->save();

        foreach ($order as $item) {
            $orderModel->items()->create([
                'name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
            ]);
        }

        // Clear session data
        Session::forget('order');
        Session::forget('order_total');

        return redirect()->route('home')->with('success', 'Your order has been placed!');
    }
}
