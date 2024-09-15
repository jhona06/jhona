<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\MenuItem;

class OrderController extends Controller
{
    public function add(Request $request)
    {
        // Validate request
        $request->validate([
            'item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $item = MenuItem::find($request->item_id);
        $order = session()->get('order', []);

        if (isset($order[$item->id])) {
            $order[$item->id]['quantity'] += $request->quantity;
        } else {
            $order[$item->id] = [
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $request->quantity,
            ];
        }

        session()->put('order', $order);
        $orderTotal = array_sum(array_map(function ($item) {
            return $item['quantity'] * $item['price'];
        }, $order));

        session()->put('order_total', $orderTotal);

        return redirect()->route('home');
    }

    public function submit(Request $request)
    {
        // Get the order from the session
        $orderData = session()->get('order', []);
        if (!$orderData) {
            return redirect()->route('home')->with('error', 'No items in the order.');
        }

        // Create an order record
        $order = new Order();
        $order->user_id = Auth::id(); // Assuming the user is authenticated
        $order->total = session()->get('order_total');
        $order->status = 'pending';
        $order->save();

        // Save each order item
        foreach ($orderData as $itemId => $item) {
            $order->items()->create([
                'item_id' => $itemId,
                'quantity' => $item['quantity'],
                'total' => $item['quantity'] * $item['price'],
            ]);
        }

        // Clear the session
        session()->forget('order');
        session()->forget('order_total');

        return redirect()->route('home')->with('success', 'Your order is being made!');
    }
}
