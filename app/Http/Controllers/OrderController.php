<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\MenuItem;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->route('home');
    }

    public function submit(Request $request)
    {
        $order = Session::get('order', []);
        $user = Auth::user(); // Get the authenticated user

        if (!$order) {
            return redirect()->route('home')->with('error', 'No items in the order.');
        }

        // Process the order and save it to the database
        $orderModel = new Order();
        $orderModel->user_id = $user ? $user->id : null; // Ensure a user is logged in or handle accordingly
        $orderModel->total = Session::get('order_total');
        $orderModel->status = 'pending';
        $orderModel->save();

        // Optionally, save order items if you have a separate OrderItem model
        foreach ($order as $item) {
            $orderModel->items()->create([
                'item_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear the session
        Session::forget('order');
        Session::forget('order_total');

        // Notify user
        return redirect()->route('home')->with('success', 'Your order is being made!');
    }
}
